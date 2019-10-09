<?php 
    include_once('./common/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Screen</title>
</head>
<body>
    <div class="container">
        <h1>
            Browser Location Detail
        </h1>
        <h3>
            Origin : 
        </h3>
        <h4 id="origin"></h4>
        <h3>
            Href : 
        </h3>
        <h4 id="href"></h4>
        <h3>
            Hostname : 
        </h3>
        <h4 id="hostname"></h4>
        <h3>
            Pathname : 
        </h3>
        <h4 id="pathname"></h4>
        <h3>
            Protocol : 
        </h3>
        <h4 id="protocol"></h4>
    </div>
</body>
</html>
<script>
    console.log(location)
    document.getElementById("origin").innerHTML = location.origin ;
    document.getElementById("href").innerHTML = location.href ;
    document.getElementById("hostname").innerHTML = location.hostname ;
    document.getElementById("pathname").innerHTML = location.pathname ;
    document.getElementById("protocol").innerHTML = location.protocol ;
</script>