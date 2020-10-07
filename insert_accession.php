<?php
    include_once('db_connect.php');

    $start_time = $_POST['start_time'];
    $user = $_POST['user'];
    $city = $_POST['city'];
    $operation = $_POST['operation'];

    $query = "INSERT INTO accession(start_time, user, city, operation) VALUES('$start_time', '$user', '$city', '$operation')";
    $_result = mysqli_query($db_connect,$query);
    
    echo mysqli_insert_id($db_connect);

?>