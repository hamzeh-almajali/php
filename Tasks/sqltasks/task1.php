<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>
    <form action="action.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Submit">
    </form>
    
    <form action="action.php" method="get">
        <label for="email_get">Email (GET):</label>
        <input type="email" id="email_get" name="email_get" required>
        <br>
        <label for="password_get">Password (GET):</label>
        <input type="password" id="password_get" name="password_get" required>
        <br>
        <input type="submit" value="Submit (GET)">
    </form>
</body>
</html>
