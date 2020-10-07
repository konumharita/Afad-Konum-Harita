<?php 

    include_once('db_connect.php');

    $id = $_POST['id'];

    $query = "DELETE FROM locations WHERE id = '$id'";
    $result = mysqli_query($db_connect,$query);
?>