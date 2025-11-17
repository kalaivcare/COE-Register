<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $dbh = new PDO("mysql:host=$servername;dbname=coe_final1", $username, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>