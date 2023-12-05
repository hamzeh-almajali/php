<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    processFormData($email, $password, "POST");
} elseif ($_SERVER["REQUEST_METHOD"] === "GET") {
   
    $email = $_GET["email_get"];
    $password = $_GET["password_get"];
    processFormData($email, $password, "GET");
} else {
  
    echo "Unsupported request method";
}
function processFormData($email, $password, $method) {
    echo "Email ($method): $email<br>";
    echo "Password ($method): $password<br>";
}
?>
