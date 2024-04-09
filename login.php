<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
          </form>
        </div>
    </div>
    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>