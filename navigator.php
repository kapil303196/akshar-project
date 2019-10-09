<?php 
    include_once('./common/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navigator</title>
</head>
<body>
    <div class="container">
        <h1>
            Browser Navigator Detail
        </h1>
        <h3>
        Application Name : 
        </h3>
        <h4 id="appName"></h4>
        <h3>
        Version : 
        </h3>
        <h4 id="appVersion"></h4>
        <h3>
        Agent : 
        </h3>
        <h4 id="userAgent"></h4>
        <h3>
        Platform : 
        </h3>
        <h4 id="platform"></h4>
        <h3>
        Language : 
        </h3>
        <h4 id="language"></h4>
    </div>
</body>
</html>
<script>
    console.log(navigator)
    document.getElementById("appName").innerHTML = navigator.appName;
    document.getElementById("appVersion").innerHTML = navigator.appVersion;
    document.getElementById("userAgent").innerHTML = navigator.userAgent;
    document.getElementById("platform").innerHTML = navigator.platform;
    document.getElementById("language").innerHTML = navigator.language;
</script>