<?php
session_start();
$servername = "";
$username = "";
$password = "";

try {
  $mysqlserver = new PDO("sqlsrv:server=$servername;Database=FSWeb", $username, $password);
  // set the PDO error mode to exception
 // $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
 $mysqlserver->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  echo "Success: ";
} catch(PDOException $e) {
  echo "Connection failed: ";
}

?>