<?php 
    include_once('db_connect.php');

    $state = $_POST['state'];
    $user = $_POST['user'];
    $operation = $_POST['operation'];
    $city = $_POST['city'];

    $query = "INSERT INTO instant_situation(states, user, operation, city) VALUES('$state', '$user', '$operation', '$city')";
    $result = mysqli_query($db_connect,$query);

    echo mysqli_insert_id($db_connect);
?>