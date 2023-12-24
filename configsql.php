<?php
$serverName = "OmersMachine\SQLEXPRESS";
$databaseName = "final";
try {
  // Create a PDO instance
  $pdo = new PDO("sqlsrv:Server=$serverName;Database=$databaseName", null, null);
  // Set PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully<br>";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $username = $_POST["username"];
  $password = $_POST["password"];

  echo "$username<br>";
  echo "$password<br>";

  // SQL query to insert data into the Society table
  $sql = "SELECT * FROM Students WHERE FirstName = ? AND Password = ?";
  $params = array($username, $password);
  echo "Got here";
  // Prepare and execute the query
  $stmt = $pdo->prepare($sql);
  echo "Got here";
  $stmt->execute($params);

  // Fetch additional data
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($row != "") {
    // Login successful, redirect to the success page
    header("Location: success.php");
    exit(); // Ensure that no further code is executed after the redirect
  } else {
    // Invalid credentials, redirect to the error page
    // Invalid credentials, redirect to the error page with parameters
    //header("Location: error.php?username=" . urlencode($username) . "&//password=" . urlencode($password) . "&data1=" . urlencode//($additionalData1) . "&data2=" . urlencode($additionalData2));

    header("Location: error.php");
    exit(); // Ensure that no further code is executed after the redirect
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $societyData = new stdClass();


    $societyData->name = $_POST['s_societyName'];
    $societyData->description = $_POST['s_description'];
    $societyData->logo = $_FILES['s_logo']['name']; 
    $societyData->socialMedia = $_POST['s_socialMedia'];
    $societyData->contactEmail = $_POST['s_contactEmail'];

}

?>