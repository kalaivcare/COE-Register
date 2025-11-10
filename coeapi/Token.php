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


?>