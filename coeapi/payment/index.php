<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/coeapi/Token.php';
include $_SERVER['DOCUMENT_ROOT'] . '/coeapi/db.php';

if(!isset($_POST)) {
    echo json_encode(["status" => 403, "error" => true, "message" => "Data missing from request"]);
    exit;
}
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
        if($query->execute())
        {
            $Inserted_Id = $dbh->lastInsertId();
               echo json_encode([
                "status" => 200,
                "error" => false,
                "message" => "Offline payment recorded successfully!",
                "data" => ["paymentId" => $payment_id]
            ]);
            
        }else{
            echo json_encode(["status" => 403, "error" => true, "message" => "Data missing from request"]);
    exit;
        }

        
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