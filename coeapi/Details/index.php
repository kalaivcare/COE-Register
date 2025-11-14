<?php
include $_SERVER['DOCUMENT_ROOT'] . '/coeapi/db.php';

include_once $_SERVER['DOCUMENT_ROOT'].'/coeapi/Token.php';





try {

$sqlDetails = "
    SELECT 
        r.registration_no,
        r.name AS patient_name,
        r.mobile,
        r.email,
        r.dob,
        r.address,
        r.gender,
        r.occupation,
        r.qr_code,
        r.consultant_id,
        p.amount AS payment_amount,
        i.invoice_no,
        i.amount AS invoice_amount,
        i.status AS invoice_status,
        i.generated_at
    FROM registrations r
    LEFT JOIN payment p ON r.payment_id = :payment_id
    LEFT JOIN invoices i ON i.payment_id = :payment_id
    WHERE r.id = :user_id
";
$stmt = $dbh->prepare($sqlDetails);
$stmt->bindParam(':user_id', $data['_value']['user_id']);
$stmt->bindParam(':payment_id', $data['_value']['payment_id']);


$stmt->execute();
$details = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode([
    "status" => 200,
    "error" => false,
    "data" => $details
]);








} catch (Exception $e) {
     echo json_encode(["status"=>500,"error"=>true,"message"=>$e->getMessage(),"data"=>[]]);
}