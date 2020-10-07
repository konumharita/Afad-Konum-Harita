<?php

    include_once('db_connect.php');

    $city = $_POST['city'];
    $operation_name = $_POST['operation_name'];
    $start_date = $_POST['start_date'];
    $state = $_POST['state'];
    $wanted_name = $_POST['wanted_name'];
    $wanted_surname = $_POST['wanted_surname'];
    $wanted_gender = $_POST['wanted_gender'];
    $wanted_length = $_POST['wanted_length'];
    $wanted_weight = $_POST['wanted_weight'];
    $wanted_age = $_POST['wanted_age'];
    $wanted_more_information = $_POST['wanted_more_information'];
    $positioning_range = $_POST['positioning_range'];

    $query ="INSERT INTO operations(city, operation_name, start_dates, states,  wanted_name, wanted_surname, wanted_gender, wanted_length,
            wanted_weight, wanted_age, wanted_more_information, positioning_range)
            VALUES ('$city','$operation_name','$start_date','$state','$wanted_name','$wanted_surname',
            '$wanted_gender','$wanted_length','$wanted_weight','$wanted_age','$wanted_more_information','$positioning_range')"; 

    $result = mysqli_query($db_connect,$query);
    echo mysqli_insert_id($db_connect);
?>