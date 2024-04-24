<?php
include 'config.php';
if(isset($_POST['submit'])){

$subject = str_replace(' ', '_', $_POST['subject']);
$sem = $_POST['sem'];
$course = $_POST['course'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `question_pool`( `subject`, `course`,`sem`,`desc`) VALUES ('$subject','$course ','$sem','$desc')";
if ($con->query($sql) == TRUE ) {
    // to create table in database 
    $sql2 ="CREATE TABLE `$subject` (
        `id` int(11) AUTO_INCREMENT,
        `question` text NOT NULL,
        `option1`   varchar(255) NOT NULL,
        `option2` varchar(255) NOT NULL,
        `option3` varchar(255) NOT NULL,
        `option4` varchar(255) NOT NULL,
        `answer` varchar(255) NOT NULL,
        PRIMARY key (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET = utf8mb4";
    $con->query($sql2);

    echo "<script>alert('Pool successfully add'); window.location='admin/all_pools.php';</script>"; 
}
else {
    echo "Error: " . "<br>" . $conn->error;
}
} 
?>