<?php 
    include_once('db_connect.php');

    $id = $_POST['id'];
    $end_time = $_POST['end_time'];

    $query = "UPDATE accession SET end_time = '$end_time' WHERE id = '$id'";
    $result = mysqli_query($db_connect,$query);


?>