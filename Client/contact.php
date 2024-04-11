<?php



error_reporting(E_ERROR | E_PARSE);
echo "444";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$sub = $_POST['submit'];
echo $sub;

//echo $email;
if($_POST['submit']){


$server = "localhost";
$user = "root";
$pass = "";
$dbname = "project";
$conn = mysqli_connect($server,$user,$pass,$dbname);



$que =  "insert into `contact`(`name`,`email`,`msg`) values('$name','$email','$message')";

$res = mysqli_query($conn,$que);
header("location:index.html"); 


}else{
    //echo "11111111";
    header("location:contact.html");
}

?>
