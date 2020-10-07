<?php 
    include_once('db_connect.php'); 

    $city = $_GET['city'];

    $query = "SELECT operation_name, positioning_range FROM operations WHERE city = '$city' AND states = '1'";
	$result = mysqli_query($db_connect,$query);

	$array_data = array();

	while($data = mysqli_fetch_assoc($result)){
		$array_data[] = $data;
	}

    echo json_encode($array_data);
        
?>