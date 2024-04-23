<?php
include '../config.php';
include '../header.php';
?>
<div class="mycontainer">
  <div class="row d-flex justify-content-center">
    <?php
      include 'navbar.php';
      $sql="SELECT*FROM question_pool";
      $result = $con->query($sql);
      ?>
      
      <?php
      while($row = $result->fetch_assoc()){
        ?>
      
        
        <div class="card m-2 col-md-3 p-0 rounded-3 mt-5 ">
          <div class="card-header d-flex justify-content-center ">
        
            <h1><?php echo str_replace('_', ' ', $row['subject']) ; ?></h1>
          </div>
        

          <div class="card-body p-4 pb-0 ">
            
            
              <p><b>Course:</b><?php echo $row['course'] ; ?></p>
              <p><b>Sem:</b><?php echo $row['sem'] ; ?></p>
              <p><?php echo $row['desc'] ;  ?></p>
            </div>
            <div class="d-flex justify-content-center " style="padding-top: 10px;">
              <button type="submit" name="veiw" class="btn btn-outline-dark btn-lg m-1 submit ">Veiw Deatils</button>
              <button type="submit" name="delet" class="btn btn-outline-danger btn-lg m-1 submit ">Delet Pool</button>
            </div> 
            </div> 

            
            <?php } ?>
          </div>
       


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
