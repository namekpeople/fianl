<?php 
    if(isset($_GET['Del']))
    {
        $ID = $_GET['Del'];

        $pdo= new PDO('mysql:host=localhost;dbname=datn', 'root','');
        $sql = "delete from car_booking WHERE ID='".$ID."'";
        $sql2 = "ALTER TABLE car_booking AUTO_INCREMENT=1";
        echo $sql;
        $pdo->exec($sql);

        echo $sql2;
        $pdo->exec($sql2);

        header('Location: booking.php');
    }
?>