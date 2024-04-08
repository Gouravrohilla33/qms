<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result by roll</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="mycontainer">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Quiz Manager</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Question Pools</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/admin/result_by_roll.php">Result by Roll</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Admin Action
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/admin/add_new_quiz.php">Create New Quiz</a></li>
                      <li><a class="dropdown-item" href="#">All Quiz</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/admin/add_pool.php">Add New Question Pool</a></li>
                    </ul>
                  </li>
               
                </ul>
                <form class="d-flex">
                 
                  <button class="btn btn-outline-danger" type="reset">Logout</button>
                </form>
              </div>
            </div>
          </nav>
        <div class="container card m-auto col-md-6 p-0 rounded-3 mt-5 ">
            <div class="card-header d-flex justify-content-center ">
            <h1>Student Progress</h1>
        </div>
        <div class="card-body p-4 pb-0 ">

            <form action="" method="post">
            
              <label for="exampleInputresult_by_roll" class="form-label"></label>
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