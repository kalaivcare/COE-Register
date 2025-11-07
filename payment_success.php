<!DOCTYPE html>
<html>

<head>
    <title>Payment Successful</title>
</head>

<body style="font-family: Arial; text-align:center; margin-top:100px;">
    <h2 style="color:green;">✅ Payment Successful!</h2>
    <p><b>Payment ID:</b> <?php echo htmlspecialchars($_GET['payment_id']); ?></p>
    <p><b>Order ID:</b> <?php echo htmlspecialchars($_GET['order_id']); ?></p>
    <p><b>Amount:</b> ₹ <?php echo htmlspecialchars($_GET['amount']); ?></p>
    <p><b>Status:</b> Completed</p>
</body>

<script>
const paymentData = {
    payment_id: "<?php echo htmlspecialchars($_GET['payment_id']); ?>",
    amount: "<?php echo htmlspecialchars($_GET['amount']); ?>",
    razor_order_id: "<?php echo htmlspecialchars($_GET['order_id']); ?> ",
    status: "Completed"
};

fetch("http://localhost:8080/payment/", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Authorization": "Bearer b8e7f61d5d63a23ad24157404976042ec6df8893b09ebe19ef468ba536fdbb14"
        },
        body: JSON.stringify(paymentData)

    })
    .then(response => response.text())
    .then(data => console.log(" Response:", data))
    .catch(error => console.error(" Error:", error));
</script>

</html>