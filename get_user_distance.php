<?php

    include_once('db_connect.php');

    $id = $_POST['id'];
    
    $query = "SELECT distance FROM distances WHERE id = '$id'";
    $result = mysqli_query($db_connect,$query);

    $array_data = array();
    while($data = mysqli_fetch_array($result)){
        echo $data['distance'];
    }
  

?>