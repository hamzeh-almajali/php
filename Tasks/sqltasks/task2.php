<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Search Engine</title>
</head>
<body>
    <h1>Simple Search Engine</h1>
    <form id="searchForm" action="" method="post">
        <label for="url">Enter URL:</label>
        <input type="text" id="url" name="url" required>
        <button type="submit">GO</button>
    </form>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $url = filter_var($_POST["url"], FILTER_SANITIZE_URL);

  
    if (filter_var($url, FILTER_VALIDATE_URL)) {
       
        header("Location: $url");
        exit();
    } else {
        echo "Invalid URL. Please enter a valid URL.";
    }
} else {
    header("Location: task2.html");
    exit();
}
?>
