<?php
$mysqli= new mysqli('localhost', 'root','', 'datn');
$ID = $_GET['GetID'];
$sql = "SELECT * FROM car_booking WHERE ID='".$ID."'";
$res = $mysqli->query($sql);

while ($row = $res->fetch_assoc()) {
    $name = $row['Name'];
    $phone= $row['Phone_Number'];
    $time= $row['Booking_Time'];
    $car= $row['Car_Number'];
    $place= $row['Place'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>

<div class="navbar">
    <a href="index.php" class="active">Home</a>
    <a href="booking.php">Booking</a>
    <a href="#" class="right">Login</a>
</div>

<body>
    <div class="container">
        <div style="text-align:center">
            <h2>Update</h2>
            <p>If you want to update</p>
        </div>
        <div class="row">
            <div class="column">
            <img src="https://www.w3schools.com/w3images/map.jpg" style="width:100%" title="bãi đỗ xe">
            </div>
            <div class="column">
                <form action="update.php?ID=<?php echo $ID ?>" method="post">
                    <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Name" value="<?php echo $name ?>" required>
                    <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="Phone Number" value="<?php echo $phone ?>" required>
                    <label for="fname">Check in</label>
                        <input type="datetime-local" id="time" name="time" value="<?php echo $time ?>" required title="time"> 
                    <label for="place">Place</label>
                    <select id="place" name="place" value="<?php echo $place ?>">
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="A3">A3</option>
                        <option value="A4">A4</option>
                    </select>
                    <label for="car">Car Number</label>
                        <input type="text" id="car" name="car" placeholder="Car Number" value="<?php echo $car ?>" required>
                    <input type="submit" name="update" value="Update">
                    <!-- <button name="update" type="submit" value="Update">Update</button> -->
                </form>
            </div>
        </div>
    </div>
</body>

<div class="footer">
    <h2>Footer</h2>
</div>

</html>