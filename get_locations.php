<?php 

    include_once('db_connect.php');

    $city = $_POST['city'];
    $operation = $_POST['operation'];
    $lastId = $_POST['last_id'];

    $query = "SELECT id, user, latitude, longitude, map_color, hour, telephone, radio_code FROM locations WHERE city = '$city' AND operation = '$operation' ORDER BY hour ASC";
    $result = mysqli_query($db_connect,$query);

    $array_data = array();

    while($data = mysqli_fetch_assoc($result)){
        if($data['id']>$lastId){
            $array_data[] = $data;
        }
        
    }
    echo json_encode($array_data);
?>