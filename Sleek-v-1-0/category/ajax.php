<?php
$action = $_REQUEST['action'];  
if(!empty($action))
{
    require_once 'includes/category.php';
    $obj= new player();
}
if ($action == 'adduser' && !empty($_POST))
{
    $cname = $_POST['category'];
    
    $playerId = (!empty($_POST['userid'])) ? $_POST['userid'] : '';

    //validations

    //file(photo) upload
    // $imagename = '';
    // if(!empty($photo['name']))
    // {
    //     $imagename = $obj->uploadPhoto($photo);
    //     $playerData = [
    //         'pname' => $pname,
    //         'email' =>$email,
    //         'phone' =>$phone,
    //         'photo' => $imagename,
    //     ];

    // }
    // else
    // {
        
    //     $playerData = [
    //         'pname' => $pname,
    //         'email' =>$email,
    //         'phone' =>$phone,
    //     ];
            
    // }
    
        $playerData = [
            'category_Name' => $cname,

        ];
        
    if($playerId)
    {
        $obj->update($playerData , $playerId);
    }
    else
    {
        $playerId = $obj->add($playerData);
    }


    if(!empty($playerId))
    {
        $player = $obj->getRow('category_Id',$playerId);
        echo json_encode($player);
        exit();
    }


}
if($action == "getusers")
{
    $page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $limit = 4;
    $start =($page - 1) * $limit;
    $players = $obj->getRows($start,$limit);
    if(!empty($players))
    {
        $playerslist = $players;

    }
    else
    {
        $playerslist = [];
       
    }
    $total = $obj->getCount();
    $playerArr = ['count'=>$total ,'players'=>$playerslist];
    echo json_encode($playerArr);
    exit();
}
if($action == "getuser")
{
    $playerId = (!empty($_GET['id'])) ? $_GET['id'] : '';

    if(!empty($playerId))
    {
        $player = $obj->getRow('category_Id' , $playerId);
        echo json_encode($player);
        exit();
    }
}

if($action == "deleteuser")
{
    $playerId = (!empty($_GET['id'])) ? $_GET['id'] : '';

    if(!empty($playerId))
    {
        $isDeleted = $obj->deleteRow($playerId);
        if($isDeleted)
        {
            $message = ['deleted' =>1];
        }
        else{
            $message = ['deleted' =>0];

        }
        echo json_encode($message);
        exit();
    }
}
if($action == 'search')
{
    $queryString = (!empty($_GET['searchQuery'])) ? trim($_GET['searchQuery']) :'';
    $results = $obj->searchPlayer($queryString);
    echo json_encode($results);
    exit();
    
}
?>