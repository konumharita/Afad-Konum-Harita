<?php 
    include_once('db_connect.php');

    $user = $_POST['user'];
    $distance = $_POST['distance'];
    $operation = $_POST['operation'];
    $city = $_POST['city'];

    $query = "INSERT INTO distances(user, distance, operation, city) VALUES('$user', '$distance', '$operation', '$city')";
    $result = mysqli_query($db_connect,$query);
    $lastId = mysqli_insert_id($db_connect);
    echo $lastId;
?>