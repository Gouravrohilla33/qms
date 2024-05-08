<?php
include "../config.php";
include "../header.php";
?>

<div >
        <?php
        include "navbar.php";
        ?>
    </div>
    <div class="container card   me-auto col-ld-6 p-0 rounded-3 mt-5  ">
                <table class="table">
            <tr>
                <th>S.no.</th>
                <th>Question</th>
                <th>Option1</th>
                <th>Option2</th>
                <th>Option3</th>
                <th>Option4</th>
                <th>Answer</th>
            </tr>
<?php
if(isset($_POST['veiw'])){
    $table = $_POST['question_pool'];
    $sql="SELECT*FROM `$table`";
    $result=$con->query($sql);
    while($row =$result->fetch_assoc()){

?>
       <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['question'];?></td>
        <td><?php echo $row['option1'];?></td>
        <td><?php echo $row['option2'];?></td>
        <td><?php echo $row['option3'];?></td>
        <td><?php echo $row['option3'];?></td>
        <td><?php echo $row['answer'];?></td>
       </tr>
       <?php } } ?>
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
