<?php
include "config.php";
if(isset($_POST['upload'])){
    $question_pool = $_POST['question_pool'];
    $file = $_FILES['file'];

    //check the file csv or not
    $file_extension  = pathinfo($file['name'], PATHINFO_EXTENSION);
    
    if($file_extension == 'csv'){
        // read  
        $csv_data = array_map('str_getcsv',file($file['tmp_name']));
        // extract header and data
        $header = array_shift($csv_data);
        
        $sql = "INSERT INTO `$question_pool`(`question`,`option1`,`option2`,`option3`,`option4`,`answer`) VALUES";

        foreach ($csv_data as $row){
            $sql .= "('" . implode("', '",$row) . "'),";
        }
        // removing additional comma
        $sql = rtrim($sql,',');

        if($con->query($sql) == TRUE){
            echo '<script>alert("Question uploaded successfully!"); window.location.href="admin/all_pools.php";</script>';
            // echo "success";
        }
        else{
            echo "<script>alert('Error: ".$sql . "<br>".$con->error ."')</script>";
        }
    }else{
        echo "<script>alert('Please Upload a CSV file.');window.location='admin/all_pools.php';</script>";

    }


}



?>