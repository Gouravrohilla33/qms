

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
<div class="container-fluid">
  <a class="navbar-brand" href="#">Quiz Manager</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="all_pools.php">Question Pools</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="result_by_roll.php">Result by Roll</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Admin Action
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="add_new_quiz.php">Create New Quiz</a></li>
          <li><a class="dropdown-item" href="all_quiz.php">All Quiz</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="add_pool.php">Add New Question Pool</a></li>
        </ul>
      </li>
   
    </ul>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Upload Question
</button>
<form class="d-flex "  method="post">
 
  <button class="btn btn-outline-danger mx-2" type="submit" name="logout">Logout</button>
</form>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Upload Question</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">   
        <form action="../uploadcsv_callback.php"method="post" enctype="multipart/form-data">
          <div class="mb-2 p-2">
            <select name="question_pool" class="form-select" id="" >
              <option value="0">Select Your Question Pool</option>
              
        <?php 
        include '../config.php';
$sql="SELECT*FROM question_pool";
$result = $con->query($sql);
while($row = $result->fetch_assoc()){
  
  ?>
              <option value="<?php echo $row['subject']; ?>"><?php echo $row['subject']; ?></option>
        <?php }?>                  </select>
          </div>
          <div class="mb-2 p-2">
            <input type="file" name="file" class="form-control" id="exampleInputfile" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
            <button type="submit" class="btn btn-primary" name="upload">upload</button>
          </div>
      </form>
      
    </div>
  </div>
</div>
</nav>