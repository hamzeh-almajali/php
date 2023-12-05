<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Request Time</title>
</head>
<body>
    <h1>Page Request Time</h1>

    <?php
   
    $requestTime = $_SERVER['REQUEST_TIME'];
    $formattedTime = date('Y-m-d H:i:s', $requestTime);

    echo "<p>The page was requested at: $formattedTime</p>";
    ?>
</body>
</html>
