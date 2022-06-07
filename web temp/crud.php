<?php
session_start();

if ($_GET['action'] == 'updatecart') {


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fashion_ecommerce";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $cartId = $_GET['cartid'];
    $qtyval = $_GET['qty'];
    // echo $cartId;
    // echo $qtyval;
    $sql = "update cart_item set quantity=$qtyval where cart_Id=$cartId";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo true;
    } else {
        echo false;
    }
    $conn->close();
}

if ($_GET['action'] == 'deletelist') {


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fashion_ecommerce";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $listId = $_GET['listid'];
    // $qtyval = $_GET['qty'];
    // echo $cartId;
    // echo $qtyval;
    $sql = "delete from wishlist where list_Id=$listId";
    $result = mysqli_query($conn, $sql);
    if ($result == 1) {
        echo true;
    } else {
        echo false;
    }
    $conn->close();
}
if ($_GET['action'] == 'deletecart') {


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fashion_ecommerce";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $cartId = $_GET['cartid'];
    // $qtyval = $_GET['qty'];
    // echo $cartId;
    // echo $qtyval;
    $sql = "delete from cart_item where cart_Id=$cartId";
    $result = mysqli_query($conn, $sql);
    if ($result == 1) {
        echo true;
    } else {
        echo false;
    }
    $conn->close();
}
if ($_GET['action'] == 'selectcart') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fashion_ecommerce";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // $cartId = $_GET['cartid'];
    // $qtyval = $_GET['qty'];
    // echo $cartId;
    // echo $qtyval;
    $userid = $_SESSION['id'];
    $sql = "SELECT sum(cart_item.quantity*product_description.discount_Price) as total from product_description, cart_item where cart_item.product_Id= product_description.product_Id and cart_item.userid=$userid";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
    // echo $row['total'];

    if ($row['total'] > 0) {

        echo  $row['total'];
    } else {
        echo $row['total'];
    }
    $conn->close();
}
