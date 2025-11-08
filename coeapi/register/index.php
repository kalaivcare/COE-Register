<?php
include $_SERVER['DOCUMENT_ROOT'] . '/coeapi/db.php';

include_once $_SERVER['DOCUMENT_ROOT'].'/coeapi/Token.php';
if (isset($data['payment_id']) && $data['payment_id'] != null) {
   
    $sql1 = "SELECT id FROM payment WHERE payment_id = :payment_id";
    $query1 = $dbh->prepare($sql1);
    $query1->bindParam(':payment_id', $data['payment_id']);
    $query1->execute();

    $result = $query1->fetch(PDO::FETCH_ASSOC);
   
    
    if ($result) {
       
        $payment_id = $result['id'];
    } else {
      
        $payment_id = NULL;
       
    }
} else {
    $payment_id = NULL;
}



try {
$prefix = "VCEC";
$yearCode = date('y') . (date('y') + 1);

$sqlReg = "SELECT registration_no FROM registrations ORDER BY id DESC LIMIT 1";
$stmtReg = $dbh->prepare($sqlReg);
$stmtReg->execute();
$lastReg = $stmtReg->fetch(PDO::FETCH_ASSOC);

if ($lastReg && isset($lastReg['registration_no'])) {
   
    $lastNumber = intval(substr($lastReg['registration_no'], -6));
    $newNumber = $lastNumber + 1;
} else {
    $newNumber = 1;
}

$numberPart = str_pad($newNumber, 6, '0', STR_PAD_LEFT);

$registration_no = $prefix . $yearCode . $numberPart;
    
$sql = "INSERT INTO registrations (registration_no,name,mobile,gender,email, dob,occupation,address,pincode,signature,
terms_accepted,payment_type,payment_id,consultant_id,medium_id,registration_type,email_alert,whatsapp_alert,
created_at,updated_at) VALUES (:registration_no,:name,:mobile,  :gender,:email,:dob,:occupation,:address,:pincode,
    :signature,:terms_accepted,:payment_type,:payment_id,:consultant_id,:medium_id,:registration_type,:email_alert,
:whatsapp_alert,NOW(),NOW())";


$query = $dbh->prepare($sql);
if (!is_array($data)) {
    echo json_encode(["status" => 400, "error" => true, "message" => "Invalid JSON format"]);
    exit;
}
$requiredFields = [
    'name', 'mobile'
];

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
if (!preg_match('/^[0-9]{10}$/', $data['mobile'])) {
    echo json_encode([
        "status" => 403,
        "error" => true,
        "message" => "Mobile number must be 10 digits"
    ]);
    exit;
}
$query->bindParam(':registration_no', $registration_no);
$query->bindParam(':name', $data['name']);
$query->bindParam(':mobile', $data['mobile']);
$query->bindParam(':gender', $data['gender']);
$query->bindParam(':email', $data['email']);
$query->bindParam(':dob', $data['dob']);
$query->bindParam(':occupation', $data['occupation']);
$query->bindParam(':address', $data['address']);
$query->bindParam(':pincode', $data['pincode']);
$query->bindParam(':signature', $data['signature']);
$query->bindParam(':terms_accepted', $data['terms']);
$query->bindParam(':payment_type', $data['payment_method']);
$query->bindParam(':payment_id', $payment_id);
$query->bindParam(':consultant_id', $data['consultant']);
$query->bindParam(':medium_id', $data['medium']);
$query->bindParam(':registration_type', $data['care']);
$query->bindParam(':email_alert', $data['email_confirm']);
$query->bindParam(':whatsapp_alert', $data['whatsapp_confirm']);

$query->execute();
$responseData = $data;             
$responseData['register_no'] = $registration_no;  
$responseData['payment_id'] = $payment_id;
$user_id = $dbh->lastInsertId() ?? null;


   
$sql3 = "INSERT INTO appointments (patient_id,doctor_id)
 VALUES (:patient_id,:doctor_id)";


$query3 = $dbh->prepare($sql3);
$query3->bindParam(':patient_id', $user_id);
$query3->bindParam(':doctor_id', $data['consultant']);

if($query3->execute())
{
    
    echo json_encode(["status"=>200,"error"=>false,"message"=>"Inserted successfully!",  "data" => $responseData]);
}





} catch (Exception $e) {
     echo json_encode(["status"=>500,"error"=>true,"message"=>$e->getMessage(),"data"=>[]]);
}