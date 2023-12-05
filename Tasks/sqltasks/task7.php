<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Counter</title>
</head>
<body>
    <h1>Welcome to My Website</h1>

    <?php
session_start();


if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = 0;
}


$_SESSION['visit_count']++;
$visitCount = $_SESSION['visit_count'];
?>


    <p>This page has been visited <?php echo $visitCount; ?> times.</p>
</body>
</html>
