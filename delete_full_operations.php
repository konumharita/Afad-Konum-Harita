<?php 

    include_once('db_connect.php');

    $id = $_POST['id'];
    $operation = $_POST['operation'];
    $city = $_POST['city'];

    try{
        $delete_accession = "DELETE FROM accession WHERE operation = '$operation' AND city = '$city'";
        $execute_accession = mysqli_query($db_connect,$delete_accession);

    }catch(Exception $e){}
    
    try{
        $delete_distances = "DELETE FROM distances WHERE operation = '$operation' AND city = '$city'";
        $execute_distances = mysqli_query($db_connect,$delete_distances);
    }catch(Exception $e){}
    

    try{
        $delete_instant_situation = "DELETE FROM instant_situation WHERE operation = '$operation' AND city = '$city'";
        $execute_instant_situation = mysqli_query($db_connect,$delete_instant_situation);
    }catch(Exception $e){}
    

    try{
        $delete_locations = "DELETE FROM locations WHERE operation = '$operation' AND city = '$city'";
        $execute_locations = mysqli_query($db_connect,$delete_locations);
    }catch(Exception $e){}
    

    try{
        $delete_operations = "DELETE FROM operations WHERE id='$id'";
        $execute_operations = mysqli_query($db_connect,$delete_operations);
    }catch(Exception $e){}
        

      
?>