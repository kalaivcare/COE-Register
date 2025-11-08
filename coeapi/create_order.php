<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");
include $_SERVER['DOCUMENT_ROOT'] . '/coeapi/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

$amount = 100; 
$currency = "INR";
$receipt = "Payment of Rs. $amount";

if ($razorpay_mode === 'test') {
    $razorpay_key = $razorpay_test_key;
    $authKey = base64_encode("$razorpay_test_key:$razorpay_test_secret");
} else {
    $razorpay_key = $razorpay_live_key;
    $authKey = base64_encode("$razorpay_live_key:$razorpay_live_secret");
}

$postData = [
    "amount" => $amount * 100,
    "currency" => $currency,
    "receipt" => $receipt
];

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => 'https://api.razorpay.com/v1/orders',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($postData),
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'Authorization: Basic ' . $authKey
    ],
]);
$response = curl_exec($curl);
curl_close($curl);

// === Decode Response ===

$order = json_decode($response, true);
echo json_encode($order);
?>