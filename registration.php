<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="mycontainer">
        <div class="logo" style="height: 10px;" >
            <img src="images/geeta univesity logo.jpeg" alt="geeta university logo" >
        </div>

        <div class="container card m-auto col-md-6 p-0 rounded-3  mycontainer1">
            <div class="card-header d-flex justify-content-center ">
            Registration Form
        </div>
        <div class="card-body p-4 pb-0">

            <form action="callback.php" method="post">
                <div class="mb-3 ">
                    <label for="exampleInputname" class="form-label">Name</label>
                    <input type="name" name="name" class="form-control" id="exampleInputname" >
                    <label for="exampleInputroll" class="form-label">Roll No.</label>
                    <input type="number" name="roll" class="form-control" id="exampleInputroll" >
                    <label for="exampleInputcourse" class="form-label">Course</label>
                    <input type="text" name="course" class="form-control" id="exampleInputcourse" >
                    <label for="exampleInputyear" class="form-label">Year</label>
                    <input type="text" name="year" class="form-control" id="exampleInputyear" >
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
          
            <div class="d-flex justify-content-center " style="padding-top: 10px;">
            
            <button type="submit" name="submit" class="btn btn-primary btn-lg m-1 submit ">Submit</button>
        </div>
          </form>
        </div>
    </div>
    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>