<?php

     if(isset($_POST['username']) && isset($_POST['password'])){
       $username = $_POST['username'];
       $password = $_POST['password'];

       $my_uname = "admin";
       $my_pass = "password";
       $user_name = "Chaff Hickory Velila";

       if($username == $my_uname && $password == $my_pass){
        echo "<script> window .location.href = '../Dashboard.php?name=".$user_name."'</script>";
       }else{
         echo "<script> window .location.href = '../login.php?status=false ' </script>";
       }

          echo " Your username is " . $username . " and your password is " . $password;
     }
?>