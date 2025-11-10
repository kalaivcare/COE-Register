<?php
require __DIR__ . '/vendor/autoload.php';
use chillerlan\QRCode\QRCode;


function generateQRCode($mobile) {
    $qrContent = 'mobile=' . $mobile;
    return json_encode((new QRCode)->render($qrContent));
}