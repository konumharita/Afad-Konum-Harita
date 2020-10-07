<?php 
    include_once('db_connect.php'); 

    $city = $_POST['city'];
    $operation_name = $_POST['operation_name'];
    $query = "SELECT start_dates, end_date, radius FROM operations WHERE city = '$city' AND operation_name = '$operation_name'";
    $result = mysqli_query($db_connect,$query);

    $array_data = array();

    while($data = mysqli_fetch_assoc($result)){
        $array_data[] = $data;
    }

    echo json_encode($array_data);
    ?>