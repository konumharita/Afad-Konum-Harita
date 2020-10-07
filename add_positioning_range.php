<?php 
    include_once('db_connect.php');

    $id = $_POST['id'];
    $positioning_range = $_POST['positioning_range'];

    $query = "UPDATE operations SET positioning_range = '$positioning_range' WHERE id = '$id'";
    $result = mysqli_query($db_connect,$query);
?>