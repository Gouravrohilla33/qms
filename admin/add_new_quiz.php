<?php
include '../header.php';
?>
    <div class="mycontainer">
    <?php
      include 'navbar.php';
      ?>


<div class="container card m-auto col-md-6 p-0 rounded-3 mt-5 ">
            <div class="card-header d-flex justify-content-center ">
            <h1>Add New Quiz</h1>
        </div>
        <div class="card-body p-4 pb-0 ">

            <form action="" method="post">
            
            <input type="phone" name="subject" class="form-control" id="exampleInputresult_by_roll" placeholder="Enter Number of Subjects">

            <hr>
            
            
            <div class="d-flex justify-content-center " style="padding-top: 10px;">
                
            <button type="submit" name="login" class="btn btn-success btn-lg m-1 submit ">First enter numbers of subject above</button>
            
        </div>
        <hr>
        <h5>Quiz details:</h5>
        <input type="text" name="quiz_name" class="form-control" id="exampleInputquiz_name" placeholder="Enter Quiz Name">
        <textarea name="quiz_rules" id="rules" cols="72" rows="5" style ="margin-top: 10px; margin-bottom:10px;" placeholder="Enter Quiz Rules"></textarea>
        <input type="number" name="quiz_time" class="form-control" id="exampleInputtime" placeholder="Enter Quiz Time in Minutes">
        <hr>
        <input type="date" name="quiz_date" class="form-control" id="exampleInputquiz_date">
        <hr>
        <h5>Quiz starts at:</h5>
        <select name="course" style="padding-right:85%; margin-bottom:10px" >
            <option value="Btech">Btech</option>
            <option value="Btech(CS)">Btech (CS)</option>
            <option value="MCA">MCA</option>
            <option value="BCA">BCA</option>
        </select>
        <select name="year" style="padding-right:92%; margin-bottom:10px;" >
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
            <option value="3rd">3rd</option>
            <option value="4th">4th</option>
        </select>
        <div class="d-flex" style="padding-left:88%">

            <button type="submit" name="login" class="btn btn-outline-dark btn-lg m-1 submit ">ALL</button>
        </div>
       
        <div class="d-flex" style="padding-left:88%">

<button type="submit" name="login" class="btn btn-danger btn-lg m-1 submit ">Abort</button>
</div>
<div class="d-flex justify-content-center " style="padding-top: 10px;">
                
                <button type="submit" name="login" class="btn btn-success btn-lg m-1 submit "style = "padding-left:40%; padding-right:40%;">Add Quiz</button>
                
            </div>
    </form>
</div>
</div>
    </div>



    </div>      

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>