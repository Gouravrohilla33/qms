<?php
include 'config.php';
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM student_data WHERE `email` = '$email' AND `password` = '$password'";
    $result = $con->query($sql);
    
    if(isset($result)){
        echo "<script>alert('logged in successfully'); </script>";
    }
}
$sql = "INSERT INTO `student_data` ( `name`, `roll`, `course`, `year`, `email`, `password`, `dt`) VALUES ( '$name',' $roll','$course',' $year',' $email', '$password', current_timestamp())";
if($con->query($sql) === TRUE){
 echo" data inserted succesfully <script>window.location='login.php'</script>";
}
?>