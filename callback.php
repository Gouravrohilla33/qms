<?php
include 'config.php';
// ********    Registration    ***********
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $course = $_POST['course'];
    $sem = $_POST['sem'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    $sql = "SELECT * FROM student_data WHERE `roll` = '$roll' ";
    $result = $con->query($sql);
    
        $row = $result->fetch_assoc();
        // check roll has already taken or not
        if($row['roll'] == $roll){
        echo "<script>alert('Roll no. has already taken'); window.location='registration.php'</script>";

        }
    
// check password common or not
    if( $password == $cpassword){
        $sql = "INSERT INTO student_data ( `name`, `roll`, `course`, `sem`, `email`, `password`, `cpassword`, `dt`) VALUES ( '$name', '$roll', '$course', '$year', '$email', '$password', '$cpassword', current_timestamp())";
        if ($con->query($sql) === TRUE ) {
            
            header("location: login.php");  
    
        } 
    }else {
        echo "<script>alert('Passwords does not match'); window.location='registration.php'</script>";
     

    }
    
}
// ***********    Login   *************
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM student_data WHERE `email` = '$email' AND `password` = '$password'";
    $result = $con->query($sql);
    if(isset($result) ){
        $row = $result->fetch_assoc();
        // check admin or not
        if($row['roll'] == 2301301001){
            $_SESSION['admin'] = $row['roll'];
            echo "<script>window.location.href='admin/index.php' </script>";
        }
        else{
            $_SESSION['id'] = $row['roll'];
            echo "<script>window.location.href='index.php' </script>";
        }
    }
    else{
        echo "<script>alert('Passwords does not match')</script>";
    }
}
?>