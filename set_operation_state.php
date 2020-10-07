<?php 
    include_once('db_connect.php');

    $id = $_POST['id'];
    $state = $_POST['state'];
    $end_date = $_POST['end_date'];

    $query = "UPDATE operations SET states = '$state', end_date = '$end_date' WHERE id='$id'";
    $result = mysqli_query($db_connect, $query);

?>