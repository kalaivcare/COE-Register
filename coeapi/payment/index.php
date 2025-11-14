<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/coeapi/Token.php';
include $_SERVER['DOCUMENT_ROOT'] . '/coeapi/db.php';

$data = json_decode(file_get_contents("php://input"), true);

if (!is_array($data)) {
    echo json_encode(["status" => 400, "error" => true, "message" => "Invalid JSON format"]);
    exit;
}

try {
    $isOffline = isset($data["payment_mode"]) && in_array($data["payment_mode"], ["offline", "cash", "pso"]);

    if ($isOffline) {
        $paymentId = uniqid('pay_');
        $razorOrderId = uniqid('razor_');
        $amount = $data['offline_amount'] ?? 0;
        $status = 'offline';
        $userId = $data['user_id'] ?? null;
        $transaction_id = $data['transaction_id'] ?? null;

        $sql = "INSERT INTO payment (payment_id, razor_order_id, amount, status, transaction_no, created_at)
                VALUES (:payment_id, :razor_order_id, :amount, :status, :transaction_no, NOW())";

        $query = $dbh->prepare($sql);
        $query->bindParam(':payment_id', $paymentId);
        $query->bindParam(':razor_order_id', $razorOrderId);
        $query->bindParam(':amount', $amount);
        $query->bindParam(':status', $status);
        $query->bindParam(':transaction_no', $transaction_id);
        $query->execute();
        $Inserted_Id = $dbh->lastInsertId();  
    } else {
        // Online payment
        $paymentId = $data['paymentData']['payment_id'] ?? null;
        $razorOrderId = $data['paymentData']['razor_order_id'] ?? null;
        $amount = $data['paymentData']['amount'] ?? 0;
        $status = $data['paymentData']['status'] ?? 'pending';
        $userId = $data['paymentData']['user_id'] ?? null;
        $email = $data['paymentData']['email'] ?? null;
        $contact = $data['paymentData']['contact'] ?? null;
        $comments = $data['paymentData']['comments'] ?? null;
        $sql = "INSERT INTO payment (payment_id, razor_order_id, amount, email, contact, status, comments, created_at)
                VALUES (:payment_id, :razor_order_id, :amount, :email, :contact, :status, :comments, NOW())";

        $query = $dbh->prepare($sql);
        $query->bindParam(':payment_id', $paymentId);
        $query->bindParam(':razor_order_id', $razorOrderId);
        $query->bindParam(':amount', $amount);
        $query->bindParam(':email', $email);
        $query->bindParam(':contact', $contact);
        $query->bindParam(':status', $status);
        $query->bindParam(':comments', $dcomments);
        $query->execute();
        $Inserted_Id = $dbh->lastInsertId();  
    }

    // Invoice
    $invoice_no = 'INV' . strtoupper(uniqid());
    $sqlInvoice = "INSERT INTO invoices (invoice_no, payment_id, patient_id, amount, created_at)
                   VALUES (:invoice_no, :payment_id, :patient_id, :amount, NOW())";
    $queryInvoice = $dbh->prepare($sqlInvoice);
    $queryInvoice->bindParam(':invoice_no', $invoice_no);
    $queryInvoice->bindParam(':payment_id', $Inserted_Id); 
    $queryInvoice->bindParam(':patient_id', $userId);
    $queryInvoice->bindParam(':amount', $amount);
    $queryInvoice->execute();
    

    echo json_encode([
        "status" => 200,
        "error" => false,
        "message" => "Payment recorded successfully!",
        "data" => [
            "paymentId" => $Inserted_Id,
            "invoiceNo" => $invoice_no
        ]
    ]);

} catch (Exception $e) {
    echo json_encode([
        "status" => 500,
        "error" => true,
        "message" => $e->getMessage(),
        "data" => []
    ]);
}