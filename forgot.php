<?php
    include("db_config.php");
    session_start();
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $myusername = mysqli_real_escape_string($db,$_POST['f_username']);
        $sql = "SELECT email FROM 10162695_login WHERE username = '$myusername'";
        $result = mysqli_query($db, $sql);
        $result_array = mysqli_fetch_assoc($result);
        $result = $result_array["email"];
        
        $message = "Line 1\r\nLine 2\r\nLine 3";
        $headers = 'From: webmaster@example.com';
        // Send
        if (mail($result, 'My Subject', $message, $headers)){
            echo "Mail sent.";
        } else {
            echo "Error";
        }
    }

?>