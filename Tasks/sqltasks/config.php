<?php
// Database credentials
$host = 'localhost';
$dbname = 'employee';
$user ='root';
$password ='';

// PDO connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Performing a simple query
// try {
//     $stmt = $pdo->query("SELECT * FROM epis");
//     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        

//     }
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }

// Closing the connection
// $pdo = null;
?>