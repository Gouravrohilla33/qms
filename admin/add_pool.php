<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result by roll</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="mycontainer">
    <?php
      include 'navbar.php';
      ?>
        <div class="container card m-auto col-md-6 p-0 rounded-3 mt-5 ">
            <div class="card-header d-flex justify-content-center ">
            <h1>Add New Question Pool</h1>
        </div>
        <div class="card-body p-4 pb-0 ">

            <form action="" method="post">
                <div class="mb-2 p-2">
                    <label for="exampleInputsubject" class="form-label">Subject</label>
                    <input type="text" name="subject" class="form-control" id="exampleInputsubject" placeholder="Enter Subject Name">
                </div>
              
                <div class="mb-1 p-2">
                    <label for="exampleInputdescription" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Enetr Description"></textarea>
                </div>
                    
                    
                </div>
                
                
                <div class="d-flex  " style="padding-top: 10px; padding-left: 85%;">
                    
                    <button type="submit" name="login" class="btn btn-outline-dark btn-sg m-1 submit ">Add</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>