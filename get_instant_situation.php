<?php 

    include_once('db_connect.php');

    $city = $_POST['city'];
    $operation = $_POST['operation'];

    $query = "SELECT user, states FROM instant_situation WHERE city = '$city' AND operation = '$operation' ";
    $result = mysqli_query($db_connect,$query);

    $array_data = array();
    
    while($data = mysqli_fetch_assoc($result)){
        $array_data[] = $data;
    }
    echo json_encode($array_data);
?>