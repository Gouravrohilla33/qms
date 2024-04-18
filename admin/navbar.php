<?php

// include "../config.php";

?>
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
    <form class="d-flex"  method="post">
     
      <button class="btn btn-outline-danger" type="submit" name="logout">Logout</button>
    </form>
  </div>
</div>
</nav>