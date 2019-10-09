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
            Browser Screen Detail
        </h1>
        <h3>
            Height : 
        </h3>
        <h4 id="height"></h4>
        <h3>
            Width : 
        </h3>
        <h4 id="width"></h4>
        <h3>
            Available Height : 
        </h3>
        <h4 id="availHeight"></h4>
        <h3>
            Available Width : 
        </h3>
        <h4 id="availWidth"></h4>
        <h3>
            Color Depth : 
        </h3>
        <h4 id="colorDepth"></h4>
        <h3>
            Pixel Depth : 
        </h3>
        <h4 id="pixelDepth"></h4>
    </div>
</body>
</html>
<script>
    console.log(screen)
    document.getElementById("width").innerHTML = screen.width + " px";
    document.getElementById("height").innerHTML = screen.height + " px";
    document.getElementById("availHeight").innerHTML = screen.availHeight + " px";
    document.getElementById("availWidth").innerHTML = screen.availWidth + " px";
    document.getElementById("colorDepth").innerHTML = screen.colorDepth + " bits";
    document.getElementById("pixelDepth").innerHTML = screen.pixelDepth + " bits";
</script>