<?php 
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = $_POST['id'];
    echo $id;
    $stmt = $pdo->prepare("DELETE FROM employee  WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: master.php");
}else{


    $id = $_GET['id'];
    echo $id;

    $stmt = $pdo->prepare("DELETE FROM employee  WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: master.php");
}


exit();





?>