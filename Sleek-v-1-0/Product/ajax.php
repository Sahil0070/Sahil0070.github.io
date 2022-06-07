<?php
  
   $action = $_REQUEST['action'];

   if(!empty($action)){
       require_once 'includes/product.php';
       $obj = new SubCategory();
   }

   if($action == 'addsubcat' && !empty($_POST)){
       $scat = $_POST['subcategory'];
    //    $scat = $_POST['scategory'];
       $pname = $_POST['pname'];
       $price = $_POST['price'];
       $discount = $_POST['discount'];
       $discount_price = $_POST['discount_price'];
       $description = $_POST['description'];
       $photo = $_FILES['photo'];

       $prodId = (!empty($_POST['prodid'])) ? $_POST['prodid'] :'';

       // validation 
       // file (photo) upload

     
       $subcatid = $obj->getsubcategoryid("'".$scat."'",'sub_category');
        // file(photo) upload
    $imagename = '';
    if(!empty($photo['name']))
    {
        $imagename = $obj->uploadPhoto($photo);
        // echo $imagename;die();
        $ProductData = [
            'sub_Category_Name' => $subcatid,
            'product_Name' => $pname,        
            'price' => $price,        
            'discount' => $discount, 
            'discount_Price' => $discount_price, 
            'description' => $description, 
            'photo' => $imagename,
           
        ];
        // var_dump( $ProductData).die();


    }
    else{

        $ProductData = [
            'sub_Category_Name' => $subcatid,
            'product_Name' => $pname,        
            'price' => $price,        
            'discount' => $discount, 
            'discount_Price' => $discount_price, 
            'description' => $description, 

        ];
    }
        // echo "prod id is:".$prodId;die();
       if($prodId){
           $obj->update($ProductData,$prodId);
       }else{
          
           $prodId = $obj->add($ProductData);
         
       }
      

       if(!empty($prodId)){
        //    echo "inside sub id ".die();
           $Subcategory = $obj->getRow('product_Id',$prodId);
        //    echo "this is subcategory";
        //    var_dump($Subcategory);die();
           echo json_encode($Subcategory);
           exit();
       }
     


   }

   if($action == "getproductslist"){
       $page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
       $limit = 4;
       $start = ($page - 1) * $limit;

       $Products = $obj->getRows($start,$limit);
    //    echo $subcategorys;die();    
        if(!empty($Products)){
            $Productlist = $Products;
        }else{
            $Productlist = [];
        }
        $total = $obj->getCount();
        $ProductArr = ['count' => $total, 'Products' => $Productlist]; 
        echo json_encode($ProductArr);
        exit();
   }

   if($action == "getproduct"){
       $prodId = (!empty($_GET['pid'])) ? $_GET['pid'] : '';

       if(!empty($prodId)){
           $product = $obj->getRow('product_Id',$prodId);
        //    var_dump($product);die();
           echo json_encode($product);
           exit();
       }
   }


   if($action == "deleteproduct"){
    $prodId = (!empty($_GET['pid'])) ? $_GET['pid'] : '';

         if(!empty($prodId)){
        $isDeleted  = $obj->deleteRow($prodId);
        if($isDeleted){
            $message = ['deleted'=>1];
        }else{
            $message = ['deleted'=>0];
        }
        echo json_encode($message);
        exit();
        }
    }
   if($action == "addsubCategory"){
    
        $table = 'sub_category';

        $Allcategories = $obj->getAllRows($table);

        if($Allcategories){
            echo json_encode($Allcategories);
        }
    }

    


    if($action == 'search'){
        $queryString = (!empty($_GET['searchQuery'])) ? trim($_GET['searchQuery']) : '';
        $results=$obj->searchPlayer($queryString);
        echo json_encode($results);
        exit();
    }
