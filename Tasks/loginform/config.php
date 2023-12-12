<?php 
$host ='localhost';
$username='root';
$password= '';
$dbname= 'users';
$con = new mysqli($host, $username, $password, $dbname);
if ($con->connect_errno) {
    
    die ('connection faild :'. $con->connect_error);
}
function query($str){
    global $con;
    $query = $str;
    return mysqli_query($con, $query);
}





?>