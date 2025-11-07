<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $paymentMethod = $_POST['payment_method'] ?? '';

    if ($paymentMethod === 'online') {
        // Redirect to online payment page
        header("Location: online_payment.php");
        exit;
    } elseif ($paymentMethod === 'offline') {
        // Redirect to offline payment page
        header("Location: offline_payment.php");
        exit;
    } else {
        echo "<h2>Please select a payment method.</h2>";
    }
} else {
    echo "<h2>Invalid request.</h2>";
}
