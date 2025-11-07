<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
//key :: b8e7f61d5d63a23ad24157404976042ec6df8893b09ebe19ef468ba536fdbb14
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}
include $_SERVER['DOCUMENT_ROOT'] . '/coeapi/db.php';
// include_once('db.php');

$headers = getallheaders();
$authHeader = $headers['Authorization'] ?? '';
$rawData = file_get_contents('php://input');

$data = json_decode($rawData, true);


$receivedHash = substr($authHeader, 7);

$serverUsername = "V(@reTrich0l0gy";
$serverPassword = "V(@reTrich0l0gy";
$salt = "V(@reNEW";

$expectedHash = hash('sha256', $serverUsername . ":" . $serverPassword . $salt);

if ($receivedHash !== $expectedHash) {
    header('HTTP/1.0 403 Forbidden');
    echo json_encode(["status" => 403, "error" => true, "message" => "Invalid credentials"]);
    exit;
}

if(!isset($_POST)) {
    echo json_encode(["status" => 403, "error" => true, "message" => "Data missing from request"]);
    exit;
}
// var_dump($data);die;

try {
   
    $sql1 = "SELECT payment_id FROM payment WHERE payment_id = :payment_id";
    $query1 = $dbh->prepare($sql1);
    $query1->bindParam(':payment_id', $data['payment_id']);
    $query1->execute();

    if ($query1->rowCount() > 0) {
        echo json_encode([
            "status" => 409,
            "error" => true,
            "message" => "Payment already exists with this ID"
        ]);
        exit;
    }

    if (!is_array($data)) {
        echo json_encode([
            "status" => 400,
            "error" => true,
            "message" => "Invalid JSON format"
        ]);
        exit;
    }
    if(isset($data["payment_mode"]) && $data["payment_mode"] == "offline")
    {
// var_dump($data);die;

         $sql = "INSERT INTO payment (payment_id,razor_order_id, amount, email, contact, status, transaction_no, created_at)
                VALUES (:payment_id ,:razor_order_id,:amount, :email, :contact, :status, :transaction_no, NOW())";
    
        $query = $dbh->prepare($sql);

        $payment_id = uniqid('pay_');
        $razor_order_id = uniqid('razor_');
        $status = 'offline';
        $query->bindParam(':payment_id', $payment_id);
        $query->bindParam(':razor_order_id', $razor_order_id);
        $query->bindParam(':amount', $data['offline_amount']);
        $query->bindParam(':email', $data['email']);
        $query->bindParam(':contact', $data['contact']);
        $query->bindParam(':status', $status);
        $query->bindParam(':transaction_no', $data['transaction_id']);
        $query->execute();

        $Inserted_Id = $dbh->lastInsertId();
           echo json_encode([
            "status" => 200,
            "error" => false,
            "message" => "Offline payment recorded successfully!",
            "data" => ["paymentId" => $Inserted_Id]
        ]);
        
    }
    else{
        
        $requiredFields = ['payment_id', 'amount', 'status'];
        foreach ($requiredFields as $field) {
            if (!isset($data[$field]) || trim($data[$field]) === '') {
                echo json_encode([
                    "status" => 403,
                    "error" => true,
                    "message" => ucfirst(str_replace('_', ' ', $field)) . " is required"
                    
                ]);
                exit;
            }
        }
    
        $sql = "INSERT INTO payment (payment_id,razor_order_id, amount, email, contact, status, comments, created_at)
                VALUES (:payment_id ,:razor_order_id,:amount, :email, :contact, :status, :comments, NOW())";
    
        $query = $dbh->prepare($sql);
    
        $query->bindParam(':payment_id', $data['payment_id']);
        $query->bindParam(':razor_order_id', $data['razor_order_id']);
        $query->bindParam(':amount', $data['amount']);
        $query->bindParam(':email', $data['email']);
        $query->bindParam(':contact', $data['contact']);
        $query->bindParam(':status', $data['status']);
        $query->bindParam(':comments', $data['comments']);
    
        $query->execute();
        
        $Inserted_Id = $dbh->lastInsertId();
            echo json_encode([
                "status" => 200,
                "error" => false,
                "message" => "Payment inserted successfully!",
                "data" => ["paymentId" => $Inserted_Id]
            ]);
    }


} catch (Exception $e) {
    echo json_encode([
        "status" => 500,
        "error" => true,
        "message" => $e->getMessage(),
        "data" => []
    ]);
}