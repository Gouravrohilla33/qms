<?php

include "../config.php";
include '../header.php';

if(!isset($_SESSION['admin'])){
    header("location: ../login.php");
}

?>
<div class="container-fluid p-0">

    
    
    <?php
      include 'navbar.php';
      ?>
      </div>
        <div class="container card me-auto col-ld-6 p-0 rounded-3 mt-5 ">
            <div class="card-header d-flex justify-content-center ">
            <h1>Quiz Managment System</h1>
        </div>
        <div class="card-body p-4 pb-0 ">
         <div class="welcome">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nam sunt consequatur assumenda ipsa repellat animi inventore dolorem ut. Necessitatibus enim officia cumque cum numquam quidem, labore suscipit consequuntur aut exercitationem neque voluptatum, est nisi, quibusdam inventore beatae! Rerum, voluptate!</p>
            <hr>
            <h4>Key Features:</h4>
            <ul>
                <li><p></p><b>Lorem ipsum dolor sit amet.</b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est voluptatum sint dolorem dolorum ducimus, obcaecati nihil, necessitatibus aspernatur rerum voluptatibus vero amet ullam beatae atque quos architecto quaerat magnam, quasi ipsum id. Perferendis ex ducimus sunt. Perspiciatis, aperiam minus?</p></li>
            </ul>
            <ul>
                <li><p></p><b>Lorem ipsum dolor sit amet.</b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est voluptatum sint dolorem dolorum ducimus, obcaecati nihil, necessitatibus aspernatur rerum voluptatibus vero amet ullam beatae atque quos architecto quaerat magnam, quasi ipsum id. Perferendis ex ducimus sunt. Perspiciatis, aperiam minus?</p></li>
            </ul>
            <ul>
                <li><p></p><b>Lorem ipsum dolor sit amet.</b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est voluptatum sint dolorem dolorum ducimus, obcaecati nihil, necessitatibus aspernatur rerum voluptatibus vero amet ullam beatae atque quos architecto quaerat magnam, quasi ipsum id. Perferendis ex ducimus sunt. Perspiciatis, aperiam minus?</p></li>
            </ul>
            <ul>
                <li><p></p><b>Lorem ipsum dolor sit amet.</b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est voluptatum sint dolorem dolorum ducimus, obcaecati nihil, necessitatibus aspernatur rerum voluptatibus vero amet ullam beatae atque quos architecto quaerat magnam, quasi ipsum id. Perferendis ex ducimus sunt. Perspiciatis, aperiam minus?</p></li>
            </ul>
            <ul>
                <li><p></p><b>Lorem ipsum dolor sit amet.</b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est voluptatum sint dolorem dolorum ducimus, obcaecati nihil, necessitatibus aspernatur rerum voluptatibus vero amet ullam beatae atque quos architecto quaerat magnam, quasi ipsum id. Perferendis ex ducimus sunt. Perspiciatis, aperiam minus?</p></li>
            </ul>
            <hr>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat ab hic ipsam aut voluptatem architecto repellendus soluta, consequuntur sequi maiores quia natus sit laboriosam reiciendis velit, aliquam quae! Eveniet qui similique eius vitae, labore, fuga dolor minus repudiandae minima architecto possimus ipsum cum omnis exercitationem accusantium? Vitae eius sit quidem.
            </p>
         </div>
        </div>
    </div>
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>