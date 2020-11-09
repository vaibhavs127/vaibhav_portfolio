<html>
    <head>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    </head>
<body>
    
<?php

session_start();

$conn=mysqli_connect("localhost","id15321693_vshinde","Contactinfo#127","id15321693_vaibhavs");

    $e = mysqli_real_escape_string($conn, $_POST['email']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);
    $sql = "insert into contact (email,message) values ('$e','$msg')";

$query=mysqli_query($conn,$sql);
if($query){
    echo '<script>
    setTimeout(function() {
        swal({
            title: "Good!",
            text: "Message Sent.!",
            type: "success"
        }, function() {
            window.location = "..//index.html";
        });
    }, 500);
</script>';
    
} else {
    echo '<script>
    setTimeout(function() {
        swal({
            title: "Opps!",
            text: "Try Again.!",
            type: "error"
        }, function() {
            window.location = "..//index.html";
        });
    }, 500);
</script>';
}

// $to = "vaibhavshinde0127@gmail.com";
// $subject = "Welcome";
// $message = "$e send this message to you. $msg";
// $headers ="From:vaibhavshinde@vaibhav.000webhostapp.com";

// if(mail($to,$subject,$message,$headers))
// {
//    echo '<script>alert("Thank You for using our service the Message is sent successfully... We will get in touch with you very soon")</script>';
// }
// else
// {
//    echo "Not sent";
// }

?>

</body>
</html>