<?php 

    include_once('db_connect.php');

    $city = $_POST['city'];
    $name_surname = $_POST['name_surname'];
    $telephone = $_POST['telephone'];
    $radio_code = $_POST['radio_code'];
    $valunteer = $_POST['valunteer'];

    $query = "SELECT color FROM colors";
    $result = mysqli_query($db_connect,$query);
    while($color = mysqli_fetch_assoc($result)){
        $map_color = $color['color'];
        $query_two="SELECT map_color FROM users WHERE city='$city' AND map_color = '$map_color'";
        $result_two= mysqli_query($db_connect,$query_two);
        $row = mysqli_fetch_row($result_two);
        if ($row <1){
            
            $query_insert = "INSERT INTO users(city, name_surname, telephone, radio_code, map_color, valunteer) 
            VALUES('$city','$name_surname','$telephone','$radio_code','$map_color','$valunteer')";
            $result_insert=mysqli_query($db_connect,$query_insert);  
            echo $map_color;
            break;
        }
      
    }


?>