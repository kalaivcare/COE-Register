<?php
// === Razorpay Config ===
// === CORS Headers ===
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}
$razorpay_mode = 'test'; // change to 'live' when going live

$razorpay_test_key = 'rzp_test_aZqyp9WC74epcz';
$razorpay_test_secret = 'NkRJwzgRQDbCBeGUTXmC9HGT';

$razorpay_live_key = 'rzp_live_RGI4Sf0pj2GQ9R';
$razorpay_live_secret = 'flQEGTwwp4MqCUDzoukSGKBW';

// === Payment Details ===
$amount = 100; // in INR
$currency = "INR";
$receipt = "Payment of Rs. $amount";

// === Select mode ===
if ($razorpay_mode === 'test') {
    $razorpay_key = $razorpay_test_key;
    $authKey = base64_encode("$razorpay_test_key:$razorpay_test_secret");
} else {
    $razorpay_key = $razorpay_live_key;
    $authKey = base64_encode("$razorpay_live_key:$razorpay_live_secret");
}

// === Prepare Order Data ===
$postData = [
    "amount" => $amount * 100, // Amount in paise
    "currency" => $currency,
    "receipt" => $receipt
];

// === Create Order via cURL ===
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