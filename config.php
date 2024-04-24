<?php

$host  = "localhost";
$user = "root";
$password = "";
$db = "qms";

session_start();

$con = new mysqli($host, $user, $password, $db);
if($con->connect_error){
    die("Connection failed" . $con->connect_error);
}


// session destroy 
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
}

if(!isset($_SESSION)){
    header("location: login.php");
}



?>