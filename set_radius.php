<?php 
    include_once('db_connect.php');

    $id = $_POST['id'];
    $radius = $_POST['radius'];

    $query = "UPDATE operations SET radius = '$radius' WHERE id = '$id'";
    $result = mysqli_query($db_connect,$query);
?>