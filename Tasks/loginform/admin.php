<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'config.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users Table</title>
    <style>
        *{
            font-size: 30px;
            text-align: center;
            border-collapse: collapse;
        }
        table{
            width: 50%;
            height: 30vh;
            margin: 50px ;

        }
        a{
            text-decoration: none;
            cursor: pointer;
        }


    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>DATE</th>
            
        </tr>
        <?php 
        // Performing a simple query
        try {
            $stmt = query("SELECT * FROM users");
            while ($row = mysqli_fetch_array($stmt)) {
                $id = $row["id"];
                $name = $row["name"];
                $email = $row["email"];
                $phone = $row["phone"];
                $date = $row["date"];

                echo "
                <tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$phone</td>
                    <td colspan='3'>$date</td>
                    <td><a href='update.php?id=$id'>Update</a></td>
                    <td><a href='delete.php?id=$id'>Delete</a></td>

                    

                </tr>";
            }
        } catch (mysql_error ) {
            echo "Error: " . $e->getMessage();
        }
       
        ?>

    </table>
 <?php echo  "<button><a href='add.php'>ADD </a></button>"  ?>
</body>
</html>