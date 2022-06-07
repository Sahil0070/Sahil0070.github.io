<?php
session_start();
echo $_SESSION['TID'];
echo "<br>";
echo "<pre>";
print_r($_REQUEST);
// echo $_SESSION['tamt'];
$last_id;

if ($_REQUEST['payment_status'] == 'Credit') {
    echo "successfull payment";
// 1 Insert for Order_Master and Multiple Entries for Order_Detail(Loop).
// Delete Cart of this user.
// Generate PDF and then send email with attachment.


    // echo "successfull payment";
    // 1 Insert for Order_Master Table
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fashion_ecommerce";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $currentdate = date("Y/m/d");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // $subcategory = $_GET['subcat'];\
    $userid = $_SESSION['id'];
    $amt = $_SESSION['tamt'];
    $status = $_REQUEST['payment_status'];
    $sql = "INSERT INTO order_master(customer_Id,total_Amount,payment_Type,currentdate) values($userid,$amt,'" . $status . "','" . $currentdate . "')";
    // echo $sql;
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        $userid = $_SESSION['id'];
        $sql1 = "SELECT cart_Item.quantity,product_description.product_Id,product_description.product_Name,product_description.price,product_description.discount_price from product_description,cart_Item where product_description.product_Id=cart_Item.product_Id AND cart_Item.userid=$userid ";
        // echo $sql;
        $result = $conn->query($sql1);
        if ($result->num_rows > 0) {
            // output data of each row
            // var_dump($result);
            // die();
            while ($row1 = $result->fetch_assoc()) {
                $proid = $row1['product_Id'];
                $qty = $row1['quantity'];
                $pri = $row1['discount_price'];
                $sql2 = "INSERT INTO order_detail(order_Id ,product_Id,quantity,product_Price) values($last_id,$proid,$qty,$pri)";
                if ($conn->query($sql2) === TRUE) {
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            $sql3 = "DELETE FROM cart_Item WHERE userid=$userid";
            if ($conn->query($sql3) === TRUE) {
                header("location:success_payment.php?orderid=$last_id");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn=mysqli_connect("localhost","root","","fashion_ecommerce");
$sql = "SELECT order_detail.quantity,order_detail.product_Price,product_description.product_Name from order_detail,product_description where order_detail.product_Id = product_description.product_Id AND order_detail.order_Id=$last_id";
echo $sql;
$uid = $_SESSION['id'];
$sql2 = "Select * from order_master where $uid = customer_Id"; 
$result = mysqli_query($conn,$sql);
$result2= mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);
$rand = (rand(1,100));

require('fpdf184/fpdf.php');

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();
/*output the result*/

/*set font to arial, bold, 14pt*/
$pdf->SetFont('Arial','B',20);
$pdf->Image( "1.jpEg",0,0,210 );

/*Cell(width , height , text , border , end line , [align] )*/
$pdf->ln(75);

$pdf->Cell(71 ,10,'',0,0);
$pdf->Cell(59 ,5,'Invoice',0,0);
$pdf->Cell(59 ,10,'',0,1);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(71 ,5,'Delivered To',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->Cell(59 ,5,'Details',0,1);

$pdf->SetFont('Arial','',10);
$address = $_session['address'];
$pdf->Cell(130 ,5,$address,0,0);
$pdf->Cell(25 ,5,'Customer ID:',0,0);
$pdf->Cell(34 ,5,'00'.$row2['customer_Id'],0,1);

$pdf->Cell(130 ,5,'Gujarat, 370205',0,0);
$pdf->Cell(25 ,5,'Invoice Date:',0,0);
$pdf->Cell(34 ,5,$row2['currentdate'],0,1);
 
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Invoice No:',0,0);
$pdf->Cell(34 ,5,'ORD00'.$rand,0,1);

$pdf->ln(15);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(130 ,5,'Bill To',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(189 ,10,'',0,1);



$pdf->Cell(50 ,10,'',0,1);
// $pdf->ln(100);
$pdf->SetFont('Arial','B',10);
/*Heading Of the table*/
$pdf->Cell(10 ,6,'Sl',1,0,'C');
$pdf->Cell(80 ,6,'Product Name',1,0,'C');
$pdf->Cell(23 ,6,'Qty',1,0,'C');
$pdf->Cell(30 ,6,'Unit Price',1,0,'C');
// $pdf->Cell(20 ,6,'Sales Tax',1,0,'C');
$pdf->Cell(25 ,6,'Total',1,1,'C');/*end of line*/
/*Heading Of the table end*/
$pdf->SetFont('Arial','',10);
$i=1;
$tot = $_SESSION['tamt'];
while($row=mysqli_fetch_assoc($result))
{
    $pdf->Cell(10 ,6,$i,1,0);
    $pdf->Cell(80 ,6,$row['product_Name'],1,0);
    $pdf->Cell(23 ,6,$row['quantity'],1,0,'R');
    $pdf->Cell(30 ,6,$row['product_Price'],1,0,'R');
    $qty = $row['quantity'];
    $pric = $row['product_price'];
    $mul = $row['quantity'] * $row['product_Price'];
    // $stot = $mul + 100;
    // $pdf->Cell(20 ,6,'100.00',1,0,'R');
    $pdf->Cell(25 ,6,$mul,1,1,'R');
    $i++;

}
    // for ($i = 0; $i <= 10; $i++) {
	// 	$pdf->Cell(10 ,6,$i,1,0);
	// 	$pdf->Cell(80 ,6,'HP Laptop',1,0);
	// 	$pdf->Cell(23 ,6,'1',1,0,'R');
	// 	$pdf->Cell(30 ,6,'15000.00',1,0,'R');
	// 	$pdf->Cell(20 ,6,'100.00',1,0,'R');
	// 	$pdf->Cell(25 ,6,'15100.00',1,1,'R');
	// }
		

$pdf->Cell(98 ,6,'',0,0);
$pdf->Cell(25 ,6,'Subtotal',0,0);
$pdf->Cell(45 ,6,$_SESSION['checkout'],1,1,'R');


// $pdf->Output();

//mail 
$to_email = $_SESSION['pay_email'];
$to = $to_email; 
  
 // Sender 
 $from = 'ashishwadhwani7716@gmail.com'; 
 $fromName = 'Fashino Ecommerce'; 
  
 // Email subject 
 $subject = 'Your Shoping bill from fasion ecommerce';  
  
 // Attachment file 
$pdf->Output("bill.pdf",'F');

 $file = "bill.pdf"; 
  
 // Email body content 
 $htmlContent = ' 
     <h3>Thank You For shopping from fashion ecommerce</h3> 
     <p>Your Order is successful and you can download your invoice from here</p> 
 '; 
  
 // Header for sender info 
 $headers = "From: $fromName"." <".$from.">"; 
  
 // Boundary  
 $semi_rand = md5(time());  
 $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
  
 // Headers for attachment  
 $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
  
 // Multipart boundary  
 $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
 "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
  
 // Preparing attachment 
 if(!empty($file) > 0){ 
     if(is_file($file)){ 
         $message .= "--{$mime_boundary}\n"; 
         $fp =    @fopen($file,"rb"); 
         $data =  @fread($fp,filesize($file)); 
  
         @fclose($fp); 
         $data = chunk_split(base64_encode($data)); 
         $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
         "Content-Description: ".basename($file)."\n" . 
         "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
         "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
     } 
 } 
 $message .= "--{$mime_boundary}--"; 
 $returnpath = "-f" . $from; 
  
 // Send email 
 $mail = @mail($to, $subject, $message, $headers, $returnpath);  
  
 // Email sending status 
 echo $mail?"<h1>Email Sent Successfully!</h1>":"<h1>Email sending failed.</h1>"; 

    // 2 Multiple Entries for Order_Detail(Loop).
    // 3 Delete Cart of this user.
    // 4 Generate PDF and then send email with attachment.
} else {
    echo "payment failed";
}
