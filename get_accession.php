<?php 

    include_once('db_connect.php');

    $city = $_POST['city'];
    $operation = $_POST['operation'];

    $query = "SELECT start_time, end_time, user FROM accession WHERE city = '$city' AND operation = '$operation' ORDER BY start_time ASC";
    $result = mysqli_query($db_connect,$query);

    $array_data = array();

    while($data = mysqli_fetch_assoc($result)){
        $array_data[] = $data;
    }
    echo json_encode($array_data);

?>