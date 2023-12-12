<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = $_POST['id'];
    $newName = $_POST['newName'];
    $newAddress = $_POST['newAddress'];
    $newSalary = $_POST['newSalary'];

    $stmt = $pdo->prepare("UPDATE employee SET name = ?, adress = ?, salary = ? WHERE id = ?");
    $stmt->execute([$newName, $newAddress, $newSalary, $id]);

    header("Location: master.php"); 
    exit();
} else {
    // Display the form for updating
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM employee WHERE id = ?");
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        echo "Employee not found.";
        exit();
    }

    $name = $row["name"];
    $address = $row["adress"];
    $salary = $row["salary"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'config.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
</head>
<body>

    <h2>Update Employee</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="newName">New Name:</label>
        <input type="text" name="newName" value="<?php echo $name; ?>" required><br>

        <label for="newAddress">New Address:</label>
        <input type="text" name="newAddress" value="<?php echo $address; ?>" required><br>

        <label for="newSalary">New Salary:</label>
        <input type="text" name="newSalary" value="<?php echo $salary; ?>" required><br>

        <button type="submit">Update</button>
    </form>

</body>
</html>
