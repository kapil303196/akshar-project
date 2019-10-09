<?php 
    $msg = $_POST["name"] . " Has sent you message, Message is : " . $_POST["message"];
    // echo $msg;

    mail("kapil303196@gmail.com","From Contact Us",$msg);
    if(mail("kapil303196@gmail.com","From Contact Us",$msg)){
        echo '<script>alert("Mail Sent");</script>';
    }
    else{
        echo '<script>alert("Error Sending Mail");</script>';
    }
    echo '<script>window.location.href = "contact.php";</script>';
?>