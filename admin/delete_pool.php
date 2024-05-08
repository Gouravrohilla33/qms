<?php
include "../config.php";

if(isset($_POST['delete'])){


$table  = $_POST['question_pool'];
$sql1="DELETE FROM `question_pool` WHERE `subject`='$table'";
$result=$con->query($sql1);

$sql2="DROP TABLE `qms`.`$table`";
$result1=$con->query($sql2);
if($result1){
    header("location: all_pools.php");
}

}
?>