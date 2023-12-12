<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form submission and perform the insert
    $newName = $_POST['newName'];
    $newAddress = $_POST['newAddress'];
    $newSalary = $_POST['newSalary'];

    $stmt = $pdo->prepare("INSERT INTO employee (name, adress, salary) VALUES (?, ?, ?)");
    $stmt->execute([$newName, $newAddress, $newSalary]);

    header("Location: master.php");
    exit();
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
    

  <h2>Add New Employee</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="newName">Name:</label>
        <input type="text" name="newName" required><br>

        <label for="newAddress">Address:</label>
        <input type="text" name="newAddress" required><br>

        <label for="newSalary">Salary:</label>
        <input type="text" name="newSalary" required><br>

        <button type="submit" name="insertEmployee">Add Employee</button>
    </form>
    </body>
    </html>
    <?php
    // Handle form submission for inserting a new employee
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['insertEmployee'])) {
        $newName = $_POST['newName'];
        $newAddress = $_POST['newAddress'];
        $newSalary = $_POST['newSalary'];

        // Insert the new employee data into the database
        try {
            $stmt = $pdo->prepare("INSERT INTO employee (name, address, salary) VALUES (?, ?, ?)");
            $stmt->execute([$newName, $newAddress, $newSalary]);

            // Redirect to avoid form resubmission on page refresh
            header("Location: master.php" );
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    ?>