<?php 
$host="localhost";
$username= "root";
$password= "";
$dbname = "portofilo";
$conn = new mysqli($host,$username,$password,$dbname);
if ($conn->connect_error) {
    die("connection failed". $conn->connect_error);
};
SESSION_START();
function query($str){
global $conn;
$qu=$str;
return mysqli_query($conn,$qu);
}








?>