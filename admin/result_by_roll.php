
<?php
      include 'navbar.php';
      include '../header.php';
      include '../config.php';
      
if(!isset($_SESSION['admin'])){
  header("location: ../login.php");
}
      ?>
      <div class="mycontainer">
        <div class="container card m-auto col-md-6 p-0 rounded-3 mt-5 ">
            <div class="card-header d-flex justify-content-center ">
            <h1>Student Progress</h1>
        </div>
        <div class="card-body p-4 pb-0 ">

            <form action="" method="post">
            
              <input type="phone" name="result_by_roll" class="form-control" id="exampleInputresult_by_roll" placeholder="Enter user's Roll Number">
              
            </div>
            
          
            <div class="d-flex justify-content-center " style="padding-top: 10px;">
            
            <button type="submit" name="login" class="btn btn-outline-dark btn-lg m-1 submit ">Generate PDF</button>
        </div>
          </form>
        </div>
    </div>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>