<?php 
    include_once('db_connect.php'); 

    $id = $_POST['id'];

    $query = "SELECT operation_name FROM operations WHERE id = '$id'";
	$result = mysqli_query($db_connect,$query);

	$array_data = array();

	while($data = mysqli_fetch_assoc($result)){
		$array_data[] = $data;
	}
    
    echo json_encode($array_data);
?>