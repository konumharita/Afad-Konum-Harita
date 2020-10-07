<?php 
    define('DB_USER',"konumha4_konum");
    define('DB_PASSWORD',"SaKa123SaKa");
    define('DB_DATABASE',"konumha4_konum");
    define('DB_SERVER',"localhost:3306");

    $db_connect = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die (mysqli_errno("Error"));
    $db_connect->set_charset("utf8");
?>