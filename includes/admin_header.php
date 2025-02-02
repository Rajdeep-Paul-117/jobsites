<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>jobwebsite</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./css/header.css">
</head>
<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light navc">
  <a class="navc" style="text-decoration: none;" href="index.php">HomePage</a>
  <button class="navbar-toggler" style="background:white " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="navc" style="text-decoration: none;" href="admin.php">Admin<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="navc" style="text-decoration: none;" href="post_jobs.php">Post Jobs<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="navc" style="text-decoration: none;" href="view_jobs.php">View Jobs<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="navc" style="text-decoration: none;" href="log_out.php">Log Out<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
   

  </div>
</nav>




</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>