<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = $_POST['id'];
    $newName = $_POST['newName'];
    $newAddress = $_POST['newemail'];
    $newSalary = $_POST['newphone'];

    $stmt = query("UPDATE users SET name ='$newName', email = '$newAddress', phone = '$newSalary' WHERE id = '$id'");

    header("Location: admin.php"); 
    exit();
} else {
    // Display the form for updating
    $id = $_GET['id'];
    $stm = query("SELECT * FROM users WHERE id = '$id'");
    $row = mysqli_fetch_assoc( $stm );

    if (!$row) {
        echo "Employee not found.";
        exit();
    }

    $name = $row["name"];
    $address = $row["email"];
    $salary = $row["phone"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
</head>
<body>

    <h2>Update Employee</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="newName">New name:</label>
        <input type="text" name="newName" value="<?php echo $name; ?>" required><br>

        <label for="newAddress">New Email:</label>
        <input type="text" name="newAddress" value="<?php echo $address; ?>" required><br>

        <label for="newSalary">New phone :</label>
        <input type="text" name="newSalary" value="<?php echo $salary; ?>" required><br>

        <button type="submit">Update</button>
    </form>

</body>
</html>
