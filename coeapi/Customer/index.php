<?php
include $_SERVER['DOCUMENT_ROOT'] . '/coeapi/db.php';

include_once $_SERVER['DOCUMENT_ROOT'].'/coeapi/Token.php';


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
$tnX=$data['payment_id'] ?? null;
$numberPart = str_pad($newNumber, 6, '0', STR_PAD_LEFT);
$registration_no = $prefix . $yearCode . $numberPart;
    
$sql = "INSERT INTO registrations (registration_no,name,mobile,gender,email, dob,occupation,address,pincode,qr_code,
created_at,updated_at) VALUES (:registration_no,:name,:mobile,  :gender,:email,:dob,:occupation,:address,:pincode,:qr_code,NOW(),NOW())";



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
include_once $_SERVER['DOCUMENT_ROOT'].'/coeapi/qr/generate.php';
$qrcode = generateQRCode($data['mobile']);
$query->bindParam(':registration_no', $registration_no);
$query->bindParam(':name', $data['name']);
$query->bindParam(':mobile', $data['mobile']);
$query->bindParam(':gender', $data['gender']);
$query->bindParam(':email', $data['email']);
$query->bindParam(':dob', $data['dob']);
$query->bindParam(':occupation', $data['occupation']);
$query->bindParam(':address', $data['address']);
$query->bindParam(':pincode', $data['pincode']);
$query->bindParam(':qr_code', $qrcode);


$query->execute();
$responseData = $data;             
$user_id = $dbh->lastInsertId() ?? null;
$responseData['user_id']=$user_id;
$responseData['registration_no']=$registration_no;



   
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