<?php

$action = $_REQUEST['action'];

if (!empty($action)) {
    require_once 'includes/stockdetails.php';
    $obj = new stockdetail();
}

if ($action == 'addsubcat' && !empty($_POST)) {
    //    $cat = $_POST['category'];
    //    $scat = $_POST['subcat'];
    $pro = $_POST['proname'];
    $qty = $_POST['stockqty'];
    $current = $_POST['todayDate'];
    $stockId = (!empty($_POST['stockid'])) ? $_POST['stockid'] : '';
    $ppid = $_POST['pro'];
    //echo "Product Id :".$ppid;
    // validation 
    // file (photo) upload


    //    $catid = $obj->getcategoryid("'".$cat."'",'category');
    //    $subid = $obj->getsubcategoryid("'".$scat."'",'sub_category');
    $proid = $obj->getproductid("'" . $pro . "'", 'product_description');

    $Stockdata = [
        'product_Name' => $proid,
        'stock_qty' => $qty,
        'added_Date' => $current,
    ];


    //   var_dump($Stockdata);
    //   die();

    if ($stockId) {
        $Stockdata = [
            'product_Name' => $proid,
            'stock_qty' => $qty,
        ];
        $obj->update($Stockdata, $stockId);
        $stock_history = $obj->sumofstock($ppid);
        // $Stockqty = [
        //     'p_Id' => $proid,
        //     'total_qty' => $stock_history,
        //     'sId' => $stockId,
        // ];
        $obj->update2($stock_history, $ppid);
    } else {
        $stockId = $obj->add($Stockdata);

        // $stock_history = $obj->sumofstock($proid);
        // $stockstatus = $obj->sstatus($proid);
        // $Stockqty = [
        //     'p_Id' => $proid,
        //     'total_qty' => $stock_history,
        //     'sId' => $stockId
        // ];
        // if (!empty($stockstatus)) {
        //     $obj->updatestock($stock_history, $stockId);
        // } else {
        //     $stock_add = $obj->addstockqty($Stockqty);
        // }
    }


    if (!empty($stockId)) {
        $product = $obj->getRow('stock_Id', $stockId);

        $stock_history = $obj->sumofstock($proid);
        $stockstatus = $obj->sstatus($proid);
        $Stockqty = [
            'p_Id' => $proid,
            'total_qty' => $stock_history,
            'sId' => $stockId,
        ];
        if ($stockstatus != 0) {
            $obj->updatestock($Stockqty, $proid);
        } else {
            $stock_add = $obj->addstockqty($Stockqty);
        }

        echo json_encode($product);
        exit();
    }
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

if ($action == "updatedStock") {
    $StockId = (!empty($_GET['sid'])) ? $_GET['sid'] : '';

    if (!empty($StockId)) {
        $Stocks = $obj->getRow('stock_Id', $StockId);
        echo json_encode($Stocks);
        exit();
    }
}


if ($action == "deletestock") {
    $StockId = (!empty($_GET['sid'])) ? $_GET['sid'] : '';

    if (!empty($StockId)) {
        $isDeleted  = $obj->deleteRow($StockId);
        if ($isDeleted) {
            $message = ['deleted' => 1];
        } else {
            $message = ['deleted' => 0];
        }
        echo json_encode($message);
        exit();
    }
}
if ($action == "addCategory") {

    $table = 'category';

    $Allcategories = $obj->getAllRows($table);

    if ($Allcategories) {
        echo json_encode($Allcategories);
    }
}
if ($action == "addcategorytoupdate") {

    $table = 'category';
    $pname = $_GET['proname'];

    $categories = $obj->getcategories($pname, $table);

    if ($categories) {
        echo json_encode($categories);
    }
}
if ($action == "addsubtoupdate") {


    $pname = $_GET['proname'];

    $subcategories = $obj->getsubcategories($pname);

    if ($subcategories) {
        echo json_encode($subcategories);
    }
}
if ($action == "findsub") {

    $table = 'sub_category';
    $subcategory = $_GET['subQuery'];

    $Allsubcategories = $obj->getAllSubRows($subcategory, $table);

    if ($Allsubcategories) {
        echo json_encode($Allsubcategories);
    }
}
if ($action == "findpro") {

    $table = 'product_description';
    $product = $_GET['proQuery'];

    $Allproducts = $obj->getAllProRows($product, $table);

    if ($Allproducts) {
        echo json_encode($Allproducts);
    }
}




if ($action == 'search') {
    $queryString = (!empty($_GET['searchQuery'])) ? trim($_GET['searchQuery']) : '';
    $results = $obj->searchPlayer($queryString);
    echo json_encode($results);
    exit();
}
