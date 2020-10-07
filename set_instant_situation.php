<?php 

    include_once('db_connect.php');

    $id = $_POST['id'];
    $state = $_POST['state'];

    $query = "UPDATE instant_situation SET states = '$state' WHERE id = '$id'";
    $result = mysqli_query($db_connect, $query);
    
?>