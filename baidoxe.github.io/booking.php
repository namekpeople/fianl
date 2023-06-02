<?php
$mysqli= new mysqli('localhost', 'root','', 'datn');
$sql = "SELECT * FROM car_booking";
$res = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Booking</title>
</head>

<div class="navbar">
    <a href="index.php" class="active">Home</a>
    <a href="booking.php">Booking</a>
    <a href="#" class="right">Login</a>
</div>

<body>
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Booking Time</th>
                <th>Place</th>
                <th>Car Number</th>
                <th>Function</th>
            </tr>
            <?php while ($row = $res->fetch_assoc()) { ?> 
                <tr>
                    <td><?php echo $row['ID'];?></td>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Phone_Number'];?></td>
                    <td><?php echo $row['Booking_Time'];?></td>
                    <td><?php echo $row['Place'];?></td>
                    <td><?php echo $row['Car_Number'];?></td>
                    <td colspan="2"><a href="edit.php?GetID=<?php echo $row['ID'] ?>">Edit</a> | 
                        <a href="delete.php?Del=<?php echo $row['ID'] ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
    </div> 
</body>

<div class="footer">
    <h2>Footer</h2>
</div>

</html>