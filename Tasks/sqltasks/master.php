<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'config.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Table</title>
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
            <th>Address</th>
            <th>Salary</th>
        </tr>
        <?php 
        // Performing a simple query
        try {
            $stmt = $pdo->query("SELECT * FROM employee");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $id = $row["id"];
                $name = $row["name"];
                $address = $row["adress"];
                $salary = $row["salary"];

                echo "
                <tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$address</td>
                    <td colspan='3'>$salary</td>
                    <td><a href='update.php?id=$id'>Update</a></td>
                    <td><a href='delete.php?id=$id'>Delete</a></td>

                    

                </tr>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>

    </table>
 <?php echo  "<button><a href='add.php'>ADD </a></button>"  ?>
</body>
</html>
