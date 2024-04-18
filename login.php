<?php 
include 'config.php';
include 'header.php';

if(isset($_SESSION['id'])){
    header("location: index.php");
}
else if (isset($_SESSION['admin'])){
    header("location: admin/index.php");
}

?>


    <div class="mycontainer">
        <div class="logo" style="height: 100px;" >
            <img src="images/geeta univesity logo.jpeg" alt="geeta university logo" >
        </div>

        <div class="container card m-auto col-md-6 p-0 rounded-3  ">
            <div class="card-header d-flex justify-content-center ">
            Login Form
        </div>
        <div class="card-body p-4 pb-0">

            <form action="callback.php" method="post">
            
            <div class="mb-3 p-2">
                    <input type="email" name="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Enter Your Email">
              
            </div>
            <div class="mb-3 p-2">
              <input type="password" name="password" class="form-control" id="exampleInputPassword1"  placeholder="Enter Your Password">
            </div>
            <div class="d-flex justify-content-center " style="padding-top: 10px;">
            
            <button type="submit" name="login" class="btn btn-outline-dark btn-lg m-1 submit ">Login</button>
        </div>
        <h4 class="color" style="text-align: center;">Create an Account !&nbsp;&nbsp;&nbsp;<a href="registration.php"
        class="login" id="login2">Registration</a></h4>
          </form>
        </div>
    </div>
    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>