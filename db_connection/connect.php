<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=uzairways", $username, $password);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $a=1;
$stmt = $conn->prepare(
  "SELECT * FROM `comment`"
);
$stmt->execute();
$comments = $stmt->fetchAll();