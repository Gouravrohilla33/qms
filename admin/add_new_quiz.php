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

        <form action="">
        <div class="mb-3 p-2">

            <select name="course" class="form-select" id="course">
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
        <div class="mb-3 p-2">

        <select name="sem" id="sem" class="form-select">
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
    </form>
    

    <div id="users"></div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
$(document).ready(function() {
    function fetchusers() {
    let course = $('#course').val();
    let sem = $('#sem').val();
    
    $.ajax({
        url: 'allotment.php', // Adjust the path if your PHP file is in a different directory.
        type: 'POST',
        data: {
            course: course,
            sem: sem
        },
        success: function(response) {
            $('#users').html(response);
        }
    });
}

// Trigger fetchUsers function whenever the selects change
$('#course, #sem').change(fetchusers);

// Optionally, call fetchUsers on page load if you want to display some default data
fetchusers();
});
</script>
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