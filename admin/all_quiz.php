<?php
include '../header.php';
include '../config.php';

if(!isset($_SESSION['admin'])){
  header("location: ../login.php");
}
?>

<div class="mycontainer">
    <?php
      include 'navbar.php';
      ?>
      <div class="row d-flex justify-content-center">

        <div class="card m-2 col-md-3 p-0 rounded-3 mt-5 ">
          <div class="card-header d-flex justify-content-center ">
            <h1>OS Development</h1>
          </div>
        

          <div class="card-body p-4 pb-0 ">
            
            
            </div>
            <div class="d-flex justify-content-center " style="padding-top: 10px;">
              <button type="submit" name="veiw" class="btn btn-outline-dark btn-lg m-1 submit ">Veiw Deatils</button>
              <button type="reset" name="edit" class="btn btn-outline-danger btn-lg m-1 submit ">Edit Quiz</button>
            </div>
        
        </div>
    

        <div class="card m-2 col-md-3 p-0 rounded-3 mt-5 ">
          <div class="card-header d-flex justify-content-center ">
            <h1>OS Development</h1>
          </div>
        

          <div class="card-body p-4 pb-0 ">
            
           
            </div>
            <div class="d-flex justify-content-center " style="padding-top: 10px;">
              <button type="submit" name="veiw" class="btn btn-outline-dark btn-lg m-1 submit ">Veiw Deatils</button>
              <button type="reset" name="edit" class="btn btn-outline-danger btn-lg m-1 submit ">Edit quiz</button>
            </div>
        </div>
        <div class="card m-2 col-md-3 p-0 rounded-3 mt-5 ">
          <div class="card-header d-flex justify-content-center ">
            <h1>OS Development</h1>
          </div>
        

          <div class="card-body p-4 pb-0 ">
            
            
            </div>
            <div class="d-flex justify-content-center " style="padding-top: 10px;">
              <button type="submit" name="veiw" class="btn btn-outline-dark btn-lg m-1 submit ">Veiw Deatils</button>
              <button type="reset" name="edit" class="btn btn-outline-danger btn-lg m-1 submit ">Edit quiz</button>
            </div>
        </div>
        <div class="card m-2 col-md-3 p-0 rounded-3 mt-5 ">
          <div class="card-header d-flex justify-content-center ">
            <h1>OS Development</h1>
          </div>
        

          <div class="card-body p-4 pb-0 ">
            
             
            </div>
            <div class="d-flex justify-content-center " style="padding-top: 10px;">
              <button type="submit" name="veiw" class="btn btn-outline-dark btn-lg m-1 submit ">Veiw Deatils</button>
              <button type="reset" name="edit" class="btn btn-outline-danger btn-lg m-1 submit ">Edit Quiz</button>
            </div>
        </div>
        <div class="card m-2 col-md-3 p-0 rounded-3 mt-5 ">
          <div class="card-header d-flex justify-content-center ">
            <h1>OS Development</h1>
          </div>
        

          <div class="card-body p-4 pb-0 ">
            
              
              
            </div>
            <div class="d-flex justify-content-center " style="padding-top: 10px;">
              <button type="submit" name="veiw" class="btn btn-outline-dark btn-lg m-1 submit ">Veiw Deatils</button>
              <button type="reset" name="edit" class="btn btn-outline-danger btn-lg m-1 submit ">Edit Quiz</button>
            </div>
        </div>



      </div>
      
    
  </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
