<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dompdf\Dompdf;

include $_SERVER['DOCUMENT_ROOT'] . '/coeapi/db.php';


if (!isset($_GET['invoice_no'])) {
  die('Invoice number missing.');
}

$invoiceNo = $_GET['invoice_no'];

$sql = " SELECT 
      i.invoice_no,
      i.created_at AS invoice_date,
      p.payment_id,
      p.amount,
      p.status,
      p.comments,
      p.email,
      p.contact,
      p.created_at AS payment_date,
      r.id AS patient_id,
      r.name,
      r.gender,
      r.address,
      r.mobile,
      r.email AS reg_email
  FROM invoices i
  JOIN payment p ON i.payment_id = p.id
  JOIN registrations r ON i.patient_id = r.id
  WHERE i.invoice_no = :invoice_no
";
$query = $dbh->prepare($sql);
$query->bindParam(':invoice_no', $invoiceNo);
$query->execute();
$invoice = $query->fetch(PDO::FETCH_ASSOC);

if (!$invoice) {
  die('Invoice not found.');
}
$invoiceDate = date('d-m-Y h:i A', strtotime($invoice['invoice_date']));


$html = "
  <style>
    body { font-family: DejaVu Sans, sans-serif; padding: 20px; }
    h2 { text-align: center; color: #333; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { padding: 8px 12px; border: 1px solid #ccc; }
    .header-table td { border: none; padding: 4px 8px; }
    .footer { text-align: center; margin-top: 40px; font-size: 12px; color: #555; }
  </style>

  <h2>Invoice #{$invoice['invoice_no']}</h2>

  <table class='header-table'>
    <tr><td><strong>Invoice Date:</strong> {$invoiceDate}</td></tr>
    <tr><td><strong>Payment ID:</strong> {$invoice['payment_id']}</td></tr>
    <tr><td><strong>Payment Date:</strong> {$invoiceDate}</td></tr>
  </table>

  <h3>Registration Details</h3>
  <table>
    <tr><th>Name</th><td>{$invoice['name']}</td></tr>
    <tr><th>Gender</th><td>{$invoice['gender']}</td></tr>
    <tr><th>Email</th><td>{$invoice['reg_email']}</td></tr>
    <tr><th>Phone</th><td>{$invoice['mobile']}</td></tr>
    <tr><th>Address</th>
      <td>{$invoice['address']}</td>
    </tr>
  </table>

  <h3>Payment Details</h3>
  <table>
    <tr><th>Amount Paid</th><td>₹{$invoice['amount']}</td></tr>
  </table>

  <div class='footer'>
    <p>Thank you for your payment!</p>
    <p>This is a system-generated invoice. No signature required.</p>
  </div>
";



$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $invoiceNo . '.pdf"');
echo $dompdf->output();
exit;