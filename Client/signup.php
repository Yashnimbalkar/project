<?php 

error_reporting(E_ERROR | E_PARSE);
if($_POST['sub']){
$name = $_POST['uname'];
$pas = $_POST['passw'];
$add = $_POST['address'];
$phone = $_POST['phone'];

echo $add;
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "project";
$conn = mysqli_connect($server,$user,$pass,$dbname);



$que =  "insert into `signup`(`uname`,`pass`,`adds`,`phone`) values('$name','$pas','$add','$phone')";

$res = mysqli_query($conn,$que);
header("location:login.html");
}else{
    header("location:signup.html");
}

?>