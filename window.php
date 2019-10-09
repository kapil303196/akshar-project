<?php 
    include_once('./common/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Window</title>
</head>
<body>
    <div class="container">
        <h1>
            Browser window Detail
        </h1>
        <h3>
            Inner Height : 
        </h3>
        <h4 id="height"></h4>
        <h3>
           Inner Width : 
        </h3>
        <h4 id="width"></h4>
    </div>
</body>
</html>
<script>
    console.log(window)
    document.getElementById("width").innerHTML = window.innerWidth + " px";
    document.getElementById("height").innerHTML = window.innerHeight + " px";
</script>