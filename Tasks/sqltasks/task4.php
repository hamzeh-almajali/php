<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>
    
    <form action="" method="post">
        <label for="new-task">Add a new task:</label>
        <input type="text" id="new-task" name="new-task" required>
        <button type="submit">Add</button>
    </form>

    <h2>Tasks</h2>
    <ul>
    <?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newTask = filter_var($_POST['new-task'], FILTER_SANITIZE_STRING);

    if (!empty($newTask)) {
        
        $_SESSION['tasks'][] = $newTask;
    }
}

if (isset($_SESSION['tasks']) && is_array($_SESSION['tasks'])) {
    foreach ($_SESSION['tasks'] as $task) {
        echo '<li>' . $task . '</li>';
    }
}
?>


    </ul>
</body>
</html>