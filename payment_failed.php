<!DOCTYPE html>
<html>

<head>
    <title>Payment Failed</title>
</head>

<body style="font-family: Arial; text-align:center; margin-top:100px;">
    <h2 style="color:red;">❌ Payment Failed!</h2>
    <p><b>Reason:</b> <?php echo htmlspecialchars($_GET['reason']); ?></p>
    <p>Please try again later.</p>
</body>

</html>