<?php
// === Razorpay Config ===
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
?>

<!DOCTYPE html>
<html>

<head>
    <title>Razorpay Payment</title>
</head>

<body style="font-family: Arial; text-align:center; margin-top:100px;">

    <?php if (isset($order['id'])): ?>
        <!-- Razorpay Checkout Script -->
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
            var options = {
                "key": "<?php echo $razorpay_key; ?>",
                "amount": "<?php echo $amount * 100; ?>",
                "currency": "INR",
                "name": "Vcare",
                "description": "Payment for Registration",
                "order_id": "<?php echo $order['id']; ?>",
                "handler": function(response) {
                    // Redirect to success page with payment details
                    window.location.href = "payment_success.php?payment_id=" + response.razorpay_payment_id +
                        "&order_id=" + response.razorpay_order_id +
                        "&amount=<?php echo $amount; ?>";
                },
                "prefill": {
                    "name": "",
                    "email": "",
                    "contact": ""
                },
                "theme": {
                    "color": "#3399cc"
                }
            };

            var rzp1 = new Razorpay(options);
            rzp1.open();

            // Handle payment failed
            rzp1.on('payment.failed', function(response) {
                window.location.href = "payment_failed.php?reason=" + encodeURIComponent(response.error.description);
            });
        </script>

    <?php else: ?>
        <h3 style="color:red;">Error Creating Razorpay Order</h3>
        <pre><?php echo $response; ?></pre>
    <?php endif; ?>

</body>

</html>