<?php
// Database credentials
$host = 'localhost';
$dbname = 'talk';
$user ='root';
$password ='';

// PDO connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Performing a simple query
try {
    $stmt = $pdo->query("SELECT * FROM epis");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        print_r($row["pod_name"]);

    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Closing the connection
$pdo = null;
?>