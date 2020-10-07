<?php
      // username and password sent from form 
  
        include_once('db_connect.php');
        
        
        $myusername = $_POST['username'];
        $mypassword = $_POST['password'];
        
        $sql = "SELECT pass FROM login_user WHERE username = '$myusername' ";
        $result = mysqli_query($db_connect,$sql);
        
        while($data = mysqli_fetch_array($result)){
           if($mypassword != $data['pass']){
              echo "false";
           }else{
              
              echo "true";
              die();
           }
        }
     
?>