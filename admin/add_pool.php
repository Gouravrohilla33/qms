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
        <div class=" card m-auto col-md-6 p-0 rounded-3 mt-5 ">
            <div class="card-header d-flex justify-content-center ">
            <h1>Add New Question Pool</h1>
        </div>
        <div class="card-body p-4 pb-0 ">

            <form action="../qpcallback.php" method="post">
                <div class="mb-2 p-2">
                    <label for="exampleInputsubject" class="form-label">Subject</label>
                    <input type="text" name="subject" class="form-control" id="exampleInputsubject" placeholder="Enter Subject Name">
                </div>
                <div class="mb-2 p-2">
                    <label for="exampleInputcourse" class="form-label">Course</label>
                    <select name="course" class="form-select" id="">
                        <option value="0">Select your cousre</option>
                        <option value="btech">Btech</option>
                        <option value="bca">BCA</option>
                        <option value="mtech">Mtech</option>
                        <option value="ba">BA</option>
                        <option value="bba">BBA</option>
                        <option value="mca">MCA</option>
                        <option value="ma">MA</option>
                        <option value="bcom">BCOM</option>
                    </select>
                </div>
                <div class="mb-2 p-2">
                    <label for="exampleInputsubject" class="form-label">Semester</label>
                    <select name="sem" class="form-select" id="">
                        <option value="1">1st</option>
                        <option value="2">2nd</option>
                        <option value="3">3rd</option>
                        <option value="4">4th</option>
                        <option value="5">5th</option>
                        <option value="6">6th</option>
                        <option value="7">7th</option>
                        <option value="8">8th</option>
                    </select>
                </div>
              
                <div class="mb-1 p-2">
                    <label for="exampleInputdescription" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="5" placeholder="Enter Description"></textarea>
                </div>
                    
                    
                </div>
                
                
                <div class="d-flex  " style="padding-top: 10px; padding-left: 85%;">
                    
                    <button type="submit" name="submit" class="btn btn-outline-dark btn-sg m-1 submit ">Add</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>