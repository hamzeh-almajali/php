<?php 
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = $_POST['id'];
    echo $id;
    $stmt= query("DELETE FROM users WHERE id ='$id'");
    header("Location: admin.php");
}else{


    $id = $_GET['id'];
    echo $id;

    $stmt= query("DELETE FROM users WHERE id ='$id'");
    print_r($stmt);
    header("Location: admin.php");
}


exit();





?>