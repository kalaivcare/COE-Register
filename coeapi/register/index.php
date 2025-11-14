<?php
header("Content-Type: application/json");
include $_SERVER['DOCUMENT_ROOT'] . '/coeapi/db.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/coeapi/Token.php';

try {
    if (!$data) {
        echo json_encode(["status" => 400, "error" => true, "message" => "Invalid JSON input"]);
        exit;
    }

    if (empty($data['registration_id'])) {
        echo json_encode(["status" => 400, "error" => true, "message" => "Registration ID is required"]);
        exit;
    }
    $sqlCheck = "SELECT id FROM registrations WHERE registration_no = :registration_no OR id = :registration_id";
    $check = $dbh->prepare($sqlCheck);
    $check->bindParam(':registration_no', $data['registration_id']);
    $check->bindParam(':registration_id', $data['registration_id']);
    $check->execute();

    if (!$check->fetch()) {
        echo json_encode(["status" => 404, "error" => true, "message" => "Registration not found"]);
        exit;
    }

    $sql = "UPDATE registrations SET 
                consultant_id = :consultant_id,
                medium_id = :medium_id,
                registration_type = :care_type,
                email_alert = :email_confirm,
                whatsapp_alert = :whatsapp_confirm,
                diagnosis_consent=:diagnosis_consent,
                medical_consent=:medical_consent,
                medical_sign=:medical_sign,
                diagnosis_sign=:diagnosis_sign,

                updated_at = NOW()
            WHERE registration_no = :registration_id OR id = :registration_id";

    $query = $dbh->prepare($sql);
    $query->bindParam(':consultant_id', $data['consultant_id']);
    $query->bindParam(':medium_id', $data['medium_id']);
    $query->bindParam(':care_type', $data['care_type']);
    $query->bindParam(':email_confirm', $data['email_confirm']);
    $query->bindParam(':whatsapp_confirm', $data['whatsapp_confirm']);
    $query->bindParam(':registration_id', $data['registration_id']);
    $query->bindParam(':diagnosis_consent', $data['diagnosis_consent']);
    $query->bindParam(':medical_consent', $data['medical_consent']);
    $query->bindParam(':medical_sign', $data['medical_sign']);
    $query->bindParam(':diagnosis_sign', $data['diagnosis_sign']);



    $query->execute();

    echo json_encode([
        "status" => 200,
        "error" => false,
        "message" => "Registration updated successfully!",
        "data" => $data
    ]);

} catch (Exception $e) {
    echo json_encode([
        "status" => 500,
        "error" => true,
        "message" => $e->getMessage()
    ]);
}