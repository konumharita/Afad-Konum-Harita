<?php 
    include_once('db_connect.php');

    $city = $_POST['city'];
    $operation = $_POST['operation'];
    $user = $_POST['user'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $map_color = $_POST['map_color'];
    $hour = $_POST['hour'];
    $telephone = $_POST['telephone'];
    $radio_code = $_POST['radio_code'];

    $query = "INSERT INTO locations(city, operation, user, latitude, longitude, map_color, hour, telephone, radio_code) 
                VALUES ('$city', '$operation', '$user', '$latitude', '$longitude', '$map_color','$hour', '$telephone', '$radio_code')";
    $result = mysqli_query($db_connect,$query);



?>