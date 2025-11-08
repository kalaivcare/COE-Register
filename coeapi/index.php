<?php
// Always send CORS headers first
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);

    if (!empty($input['signature'])) {
        $data = $input['signature'];
        $image = str_replace('data:image/png;base64,', '', $data);
        $image = str_replace(' ', '+', $image);
        $imageData = base64_decode($image);

        $fileName = 'signature_' . time() . '.png';
        if (!file_exists('signatures')) mkdir('signatures', 0777, true);

        $filePath = 'signatures/' . $fileName;
        if (file_put_contents($filePath, $imageData)) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Signature saved successfully!',
                'filePath' => $filePath
            ]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to save signature']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No signature data received']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}