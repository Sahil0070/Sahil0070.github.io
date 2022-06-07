<?php

$action = $_REQUEST['action'];

if (!empty($action)) {
    require_once 'includes/ordermaster.php';
    $obj = new SubCategory();
}

if ($action == 'addsubcat' && !empty($_POST)) {
    $cat = $_POST['category'];
    $scat = $_POST['scategory'];

    $SubId = (!empty($_POST['subid'])) ? $_POST['subid'] : '';

    // validation 
    // file (photo) upload


    $catid = $obj->getcategoryid("'" . $cat . "'", 'category');
    $SubcategoryData = [
        'category_Id' => $catid,
        'sub_Category_Name' => $scat,
    ];

    if ($SubId) {
        $obj->update($SubcategoryData, $SubId);
    } else {

        $SubId = $obj->add($SubcategoryData);
    }


    if (!empty($SubId)) {
        $Subcategory = $obj->getRow('sub_Category_Id', $SubId);
        echo json_encode($Subcategory);
        exit();
    }
}

if ($action == "getordermaster") {
    $page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $limit = 4;
    $start = ($page - 1) * $limit;

    $ordermaster = $obj->getRows($start, $limit);
    if (!empty($ordermaster)) {
        $ordermasterlist = $ordermaster;
    } else {
        $ordermasterlist = [];
    }
    $total = $obj->getCount();
    $orderArr = ['count' => $total, 'Order' => $ordermasterlist];
    echo json_encode($orderArr);
    exit();
}

if ($action == "getSubCategory") {
    $subId = (!empty($_GET['sid'])) ? $_GET['sid'] : '';

    if (!empty($subId)) {
        $subcategory = $obj->getRow('sub_Category_Id', $subId);
        echo json_encode($subcategory);
        exit();
    }
}


if ($action == "deletesubcategory") {
    $SubId = (!empty($_GET['sid'])) ? $_GET['sid'] : '';

    if (!empty($SubId)) {
        $isDeleted  = $obj->deleteRow($SubId);
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




if ($action == 'search') {
    $queryString = (!empty($_GET['searchQuery'])) ? trim($_GET['searchQuery']) : '';
    $results = $obj->searchPlayer($queryString);
    echo json_encode($results);
    exit();
}
