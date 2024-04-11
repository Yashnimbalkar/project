<?php 

error_reporting(E_ERROR | E_PARSE);
if($_POST['sub']){
$email = $_POST['email'];
$pas = $_POST['pass'];

  if($email == "yashnimbalkar26@gmail.com" && $pas=="yesh"){
    header("location:index.html");
  }else{
    header("location:login.html");

  }

}




?>