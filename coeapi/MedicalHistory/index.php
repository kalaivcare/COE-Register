<?php
include $_SERVER['DOCUMENT_ROOT'] . '/coeapi/db.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/coeapi/Token.php';

try {
    // Decode incoming JSON payload
    $data = json_decode(file_get_contents('php://input'), true);

    if (!$data || !isset($data['patient_id'])) {
        echo json_encode([
            "status" => 400,
            "error" => true,
            "message" => "Invalid payload or missing patient_id"
        ]);
        exit;
    }

    $user_id = $data['patient_id'];

    if (isset($data['medical_history']) && is_array($data['medical_history'])) {
        $med = $data['medical_history'];

        $sqlMed = "INSERT INTO medical_histories 
            (patient_id, recorded_by, has_chronic_diseases, chronic_diseases, has_allergies, allergies, on_medication, current_medications, had_surgeries, surgical_history, family_history, social_history, remarks, created_at, updated_at) 
            VALUES 
            (:patient_id, :recorded_by, :has_chronic_diseases, :chronic_diseases, :has_allergies, :allergies, :on_medication, :current_medications, :had_surgeries, :surgical_history, :family_history, :social_history, :remarks, NOW(), NOW())";

        $queryMed = $dbh->prepare($sqlMed);

        // Bind parameters safely
        $queryMed->bindValue(':patient_id', $user_id);
        $queryMed->bindValue(':recorded_by', $med['recorded_by'] ?? null);
        $queryMed->bindValue(':has_chronic_diseases', $med['has_chronic_diseases'] ?? 'no');
        $queryMed->bindValue(':chronic_diseases', $med['chronic_diseases'] ?? null);
        $queryMed->bindValue(':has_allergies', $med['has_allergies'] ?? 'no');
        $queryMed->bindValue(':allergies', $med['allergies'] ?? null);
        $queryMed->bindValue(':on_medication', $med['on_medication'] ?? 'no');
        $queryMed->bindValue(':current_medications', $med['medications'] ?? null);
        $queryMed->bindValue(':had_surgeries', $med['had_surgeries'] ?? 'no');
        $queryMed->bindValue(':surgical_history', $med['surgeries'] ?? null);
        $queryMed->bindValue(':family_history', $med['family_history'] ?? null);
        $queryMed->bindValue(':social_history', json_encode([
            'smoking' => $med['smoking'] ?? 'no',
            'alcohol' => $med['alcohol'] ?? 'no'
        ])); // store social history as JSON
        $queryMed->bindValue(':remarks', $med['remarks'] ?? null);

        $queryMed->execute();

        echo json_encode([
            "status" => 200,
            "error" => false,
            "message" => "Medical history saved successfully",
            "data" => ["patient_id" => $user_id]
        ]);
    } else {
        echo json_encode([
            "status" => 400,
            "error" => true,
            "message" => "No medical_history data provided"
        ]);
    }

} catch (Exception $e) {
    echo json_encode([
        "status" => 500,
        "error" => true,
        "message" => $e->getMessage()
    ]);
}