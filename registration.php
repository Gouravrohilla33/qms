<?php
include 'header.php';
?>
    <div class="mycontainer">
        <div class="logo" style="height: 10px;" >
            <img src="images/geeta univesity logo.jpeg" alt="geeta university logo" >
        </div>

        <div class=" card m-auto col-md-6 p-0 rounded-3 ">
            <div class="card-header d-flex justify-content-center ">
            Registration Form
        </div>
        <div class="card-body p-4 pb-0">

            <form action="callback.php" method="post">

                <div class="mb-3 p-2">
                    <input type="name" name="name" class="form-control " id="exampleInputname" placeholder="Enter Your Name">
                    </div>
                <div class="mb-3 p-2">
                    <input type="phone" name="roll" class="form-control " id="exampleInputroll"   placeholder="Enter Your Roll Number">
                    </div>
                <div class="mb-3 p-2">
                    <input type="text" name="course" class="form-control " id="exampleInputcourse" placeholder="Enter Your course" >
                    </div>
                <div class="mb-3 p-2">
                <select name="sem" class="form-select" id="" >
                    <option value="0">Select Your Course Semester</option>
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
                <div class="mb-3 p-2">
                    <input type="email" name="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Enter Your Email">
              
            </div>
            <div class="mb-3 p-2">
              <input type="password" name="password" class="form-control" id="exampleInputPassword1"  placeholder="Enter Your Password">
            </div>
            <div class="mb-3 p-2">
                <input type="password" name="cpassword" class="form-control" id="exampleInputPassword2"  placeholder="Confirm Your Password">
               
            </div>
             
        </div>
          
            <div class="d-flex justify-content-center " style="padding-top: 10px;">
            
            <button type="submit" name="submit" class="btn btn-outline-dark btn-lg m-1 submit ">Submit</button>
        </div>
        <h5 class="color" style="text-align: center;">Already a member ?&nbsp;&nbsp;&nbsp;<a href="login.php" class="login" id="login2">Log in</a></h5>
          </form>
        </div>
    </div>
    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>