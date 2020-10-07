<?php 

    include_once('db_connect.php');

    $id = $_POST['id'];
    $distance = $_POST['distance'];

    $query = "UPDATE distances SET distance = '$distance' WHERE id = '$id'";
    $result = mysqli_query($db_connect,$query);
    
?>