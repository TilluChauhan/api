<?php 
$database = 'work';
$user = 'root';
$pass = '';
$servername = 'localhost';
 
 $conn = mysqli_connect($servername, $user ,$pass, $database);
 
 if(!$conn){
     echo 'error';
     
 }


?>