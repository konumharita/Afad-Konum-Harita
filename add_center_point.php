<?php 

    include_once('db_connect.php');

    $id = $_POST['id'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $radius = $_POST['radius'];

    $query = "UPDATE operations SET latitude = '$latitude', longitude = '$longitude', radius = '$radius' WHERE id = '$id'";
    $result = mysqli_query($db_connect,$query);
?>