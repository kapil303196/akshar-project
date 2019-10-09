<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" href="../css/main.css"> -->
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">HOME</a>
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle menu" type="button" id="Course" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Course
  </button>
  <div class="dropdown-menu" aria-labelledby="Course">
    <a class="dropdown-item" href="#">Zybook</a>
    <a class="dropdown-item" href="#">TopHat</a>
    <a class="dropdown-item" href="#">Google Drive</a>
    <a class="dropdown-item" href="#">w3schools</a>
  </div>
  
</div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle menu" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    About Us
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="developers.php">Developers</a>
    <a class="dropdown-item" href="contact.php">Contact Us</a>
  </div>
</div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle menu" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Browser 
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="navigator.php">Navigator</a>
    <a class="dropdown-item" href="window.php">Window</a>
    <a class="dropdown-item" href="screen.php">Screen</a>
    <a class="dropdown-item" href="location.php">Location</a>
    <a class="dropdown-item" href="geolocation.php">Geolocation</a>
  </div>
</div>
</nav>

</body>
<style>
.menu{
    background-color:transparent;
    color: black;
    font-size: 1em;
}
</style>
</html>
