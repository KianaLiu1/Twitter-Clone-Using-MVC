<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="http://kianaliuwebdeveloper.com/cwd/twitter-clone/style5.css">
  </head>
  <body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://kianaliuwebdeveloper.com/cwd/twitter-clone/">Twitter</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="?page=timeline">Your Timeline</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=yourtweets">Your Tweets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=publicprofiles">Public Profile</a>
        </li>
      </ul>
      <div class="d-flex">
          
          <?php if ($_SESSION['id']){?>
          <a class="btn btn-outline-success" href="?function=logout">Logout</a> 
          <?php
    
} else { ?>
          <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#myModal">Login/Signup</button>
        <?php } ?>
    
      </div>
    </div>
  </div>
</nav>