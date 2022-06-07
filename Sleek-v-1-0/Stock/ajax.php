<?php

$action = $_REQUEST['action'];

if (!empty($action)) {
    require_once 'includes/stockdetails.php';
    $obj = new stockdetail();
}


if ($action == "getstock") {
    $page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $limit = 4;
    $start = ($page - 1) * $limit;

    $Stocks = $obj->getRows($start, $limit);
    if (!empty($Stocks)) {
        $Stocklist = $Stocks;
    } else {
        $Stocklist = [];
    }
    $total = $obj->getCount();
    $StockArr = ['count' => $total, 'stock' => $Stocklist];
    echo json_encode($StockArr);
    exit();
}

// if ($action == "updatedStock") {
//     $StockId = (!empty($_GET['sid'])) ? $_GET['sid'] : '';

//     if (!empty($StockId)) {
//         $Stocks = $obj->getRow('stock_Id', $StockId);
//         echo json_encode($Stocks);
//         exit();
//     }
// }


// if ($action == "deletestock") {
//     $StockId = (!empty($_GET['sid'])) ? $_GET['sid'] : '';

//     if (!empty($StockId)) {
//         $isDeleted  = $obj->deleteRow($StockId);
//         if ($isDeleted) {
//             $message = ['deleted' => 1];
//         } else {
//             $message = ['deleted' => 0];
//         }
//         echo json_encode($message);
//         exit();
//     }
// }
// if ($action == "addCategory") {

//     $table = 'category';

//     $Allcategories = $obj->getAllRows($table);

//     if ($Allcategories) {
//         echo json_encode($Allcategories);
//     }
// }
// if ($action == "addcategorytoupdate") {

//     $table = 'category';
//     $pname = $_GET['proname'];

//     $categories = $obj->getcategories($pname, $table);

//     if ($categories) {
//         echo json_encode($categories);
//     }
// // }
// if ($action == "addsubtoupdate") {


//     $pname = $_GET['proname'];

//     $subcategories = $obj->getsubcategories($pname);

//     if ($subcategories) {
//         echo json_encode($subcategories);
//     }
// }
// if ($action == "findsub") {

//     $table = 'sub_category';
//     $subcategory = $_GET['subQuery'];

//     $Allsubcategories = $obj->getAllSubRows($subcategory, $table);

//     if ($Allsubcategories) {
//         echo json_encode($Allsubcategories);
//     }
// }
// if ($action == "findpro") {

//     $table = 'product_description';
//     $product = $_GET['proQuery'];

//     $Allproducts = $obj->getAllProRows($product, $table);

//     if ($Allproducts) {
//         echo json_encode($Allproducts);
//     }
// }




if ($action == 'search') {
    $queryString = (!empty($_GET['searchQuery'])) ? trim($_GET['searchQuery']) : '';
    $results = $obj->searchPlayer($queryString);
    echo json_encode($results);
    exit();
}
?>
