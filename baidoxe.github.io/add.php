<?php
try {
    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['time']) && isset($_POST['car']) && isset($_POST['place']) && isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $phone= $_POST['phone'];
        $time= $_POST['time'];
        $car= $_POST['car'];
        $place= $_POST['place'];
    }
    
    if((isset($_POST['submit'])))
    {
        $pdo= new PDO('mysql:host=localhost;dbname=datn', 'root','');
        $sql = "INSERT INTO car_booking(Name,Phone_Number,Booking_Time,Place,Car_Number) 
        VALUE ('$name','$phone','$time','$place','$car')";
        echo $sql;
        $pdo->exec($sql);
    }

    unset($_POST['name']);
    unset($_POST['phone']);
    unset($_POST['time']);
    unset($_POST['car']);
    unset($_POST['place']);

    header('Location: index.php');
    }
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}