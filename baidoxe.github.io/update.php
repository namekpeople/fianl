<?php 
    if(isset($_POST['update']))
    {
        $ID = $_GET['ID'];
        $name = $_POST['name'];
        $phone= $_POST['phone'];
        $time= $_POST['time'];
        $car= $_POST['car'];
        $place= $_POST['place'];

        $pdo= new PDO('mysql:host=localhost;dbname=datn', 'root','');
        $sql = "update car_booking 
                set Name='".$name."', Phone_Number='".$phone."', Booking_Time='".$time."', Place='".$place."', Car_Number='".$car."' 
                WHERE ID='".$ID."'";
        echo $sql;
        $pdo->exec($sql);

        header('Location: booking.php');
    }
?>