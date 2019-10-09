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
            Browser Geolocation Detail
        </h1>
        <h3>
        Longitude : 
        </h3>
        <h4 id="longitude"></h4>
        <h3>
        Latitude : 
        </h3>
        <h4 id="latitude"></h4>
        <h3>
        Accuracy : 
        </h3>
        <h4 id="accuracy"></h4>
    </div>
</body>
</html>
<script>
    navigator.geolocation.getCurrentPosition(function(position){
        console.log(position.coords)
        document.getElementById("longitude").innerHTML = position.coords.longitude;
        document.getElementById("latitude").innerHTML = position.coords.latitude;
        document.getElementById("accuracy").innerHTML = position.coords.accuracy;


    })
</script>