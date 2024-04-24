<?php
include 'config.php';
include 'header.php';

if(!isset($_SESSION['id'])){
    header("location: login.php");  
}



?>

    <div class="main"  style="color:white;">
    <form class="d-flex" method="post" style="margin-left:100%">
     
      <button class="btn btn-outline-danger" type="submit" name='logout'>Logout</button>
    </form>
    <div class="logo" style="height: auto;" >
            <img src="images/geeta univesity logo.jpeg" alt="geeta university logo" >
        </div>
        <div class="main d-flex justify-content-center " >
            <h2>Active Quizes</h2>
            
        </div>
<div class="row d-flex justify-content-center">
    
<div class="card m-2 col-md-3 p-0 rounded-3 mt-5 "style="background-color:blue;" >
    <div class=" d-flex justify-content-center ">
        <h1>OS Development</h1>
    </div>
    
    
    <div class="card-body p-4 pb-0 ">
    
        
        </div>
        <div class="d-flex justify-content-center " style="padding-top: 10px;">
      <button type="submit" name="veiw" class="btn btn-warning  btn-lg m-1 submit ">Veiw Deatils</button>
      <button type="reset" name="edit" class="btn btn-warning  btn-lg m-1 submit ">Edit Quiz</button>
    </div>

</div>


<div class="card m-2 col-md-3 p-0 rounded-3 mt-5 " style="background-color:blue;">
  <div class="d-flex justify-content-center ">
    <h1>OS Development</h1>
</div>


<div class="card-body p-4 pb-0 ">
    
    
    </div>
    <div class="d-flex justify-content-center " style="padding-top: 10px;">
        <button type="submit" name="veiw" class="btn btn-warning btn-lg m-1 submit ">Veiw Deatils</button>
        <button type="reset" name="edit" class="btn btn-warning btn-lg m-1 submit ">Edit quiz</button>
    </div>
</div>
<div class="card m-2 col-md-3 p-0 rounded-3 mt-5 " style="background-color:blue;">
    <div class=" d-flex justify-content-center ">
        <h1>OS Development</h1>
    </div>
    
    
    <div class="card-body p-4 pb-0 ">
        
        
        </div>
        <div class="d-flex justify-content-center " style="padding-top: 10px;">
            <button type="submit" name="veiw" class="btn btn-warning  btn-lg m-1 submit ">Veiw Deatils</button>
            <button type="reset" name="edit" class="btn btn-warning  btn-lg m-1 submit ">Edit quiz</button>
        </div>
    </div>
    <div class="card m-2 col-md-3 p-0 rounded-3 mt-5 " style="background-color:blue;">
        <div class=" d-flex justify-content-center ">
            <h1>OS Development</h1>
        </div>
        
        
        <div class="card-body p-4 pb-0 ">
            
            
            </div>
            <div class="d-flex justify-content-center " style="padding-top: 10px;">
                <button type="submit" name="veiw" class="btn btn-warning  btn-lg m-1 submit ">Veiw Deatils</button>
                <button type="reset" name="edit" class="btn btn-warning  btn-lg m-1 submit ">Edit Quiz</button>
            </div>
        </div>
        <div class="card m-2 col-md-3 p-0 rounded-3 mt-5 " style="background-color:blue;">
            <div class=" d-flex justify-content-center ">
                <h1>OS Development</h1>
            </div>
            
            
            <div class="card-body p-4 pb-0 ">
                
                
                
                </div>
                <div class="d-flex justify-content-center " style="padding-top: 10px;">
                    <button type="submit" name="veiw" class="btn btn-warning k btn-lg m-1 submit ">Veiw Deatils</button>
                    <button type="reset" name="edit" class="btn btn-warning  btn-lg m-1 submit ">Edit Quiz</button>
                </div>
            </div>
            
            
            
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>