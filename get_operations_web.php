<?php 
    include_once('db_connect.php'); 

    $city = $_POST['city'];

    $query = "SELECT id, operation_name, start_dates FROM operations WHERE city = '$city' ORDER BY id DESC";
	$result = mysqli_query($db_connect,$query);

	$array_data = array();

	while($data = mysqli_fetch_assoc($result)){
		$array_data[] = $data;
	}
    
    echo json_encode($array_data);
?>