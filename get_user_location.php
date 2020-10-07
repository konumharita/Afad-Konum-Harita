<?php 
     include_once('db_connect.php');

     $operation = $_POST['operation'];
     $user = $_POST['user'];
     
     $query = "SELECT latitude, longitude, map_color, hour FROM distances WHERE operation = '$operation' AND user = '$user'";
     $result = mysqli_query($db_connect,$query);
 
     $array_data = array();
     while($data = mysqli_fetch_array($result)){
        $array_data[] = $data;
	}

    echo json_encode($array_data);
   
?>