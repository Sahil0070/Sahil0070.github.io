<?php
session_start();
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt(
    $ch,
    CURLOPT_HTTPHEADER,
    array(
        "X-Api-Key:test_99348ca3a6eff8bac044b1c3a49",
        "X-Auth-Token:test_664d5f3289be37d1687c379012b"
    )
);
$payload = array(
    'purpose' => "shopping bill",
    'amount' => $_REQUEST['totalAmount'],
    'phone' => $_REQUEST['street-phone'],
    'buyer_name' => $_REQUEST['name'],
    'redirect_url' => 'http://localhost/web%20temp/redirect.php',
    'send_email' => true,
    // 'webhook' => 'http://test.example.com/webhook/',
    'send_sms' => true,
    'email' => $_REQUEST['email'],
    'allow_repeated_payments' => false
);
$_SESSION['tamt'] = $_REQUEST['totalAmount'];
$_SESSION['checkout'] = $_REQUEST['totalAmount'] - 50;
$_SESSION['checkout'] = round($_SESSION['checkout'] - ($_SESSION['checkout'] * 0.15));
$_session['address'] = $_REQUEST['street-addres'];
$_SESSION['pay_email'] = $_REQUEST['email']; 
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch);
$response = json_decode($response);
$_SESSION['TID'] = $response->payment_request->id;
header('location:' . $response->payment_request->longurl);
die();
// echo $response;
// print_r($response);
