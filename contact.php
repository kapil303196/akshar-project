<?php 
    include_once('./common/header.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Developers</title>
</head>
<body>
<form action="sendmail.php" method="post">
<div class="container w-50">
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp"   class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
  <label for="exampleFormControlTextarea2">Message</label>
  <textarea class="form-control rounded-0" name="message" placeholder="Enter Message" id="exampleFormControlTextarea2" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
  
</form>
</body>
</html>