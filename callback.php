<?php
include 'config.php';
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
}
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM student_data WHERE `email` = '$email' AND `password` = '$password'";
    $result = $con->query($sql);
    
    if(isset($result)){
        echo "<script>window.location='admin/index.php' </script>";
    }
}
$sql = "INSERT INTO `student_data` ( `name`, `roll`, `course`, `year`, `email`, `password`,`cpassword`, `dt`) VALUES ( '$name',' $roll','$course',' $year',' $email', '$password','$cpassword', current_timestamp())";
if($con->query($sql) === TRUE && $password == $cpassword){
 echo"  <script>window.location='login.php'</script>";
}
else{
    echo"<script>alert('password not match');window.location='registration.php'</script>";
}
?>