<?php
   include("db_config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

		$myusername = $_POST['username'];
		$mypassword = $_POST['password']; 
		$myemail = $_POST['email'];
        $hash = password_hash($mypassword, PASSWORD_DEFAULT);

		$sql = "INSERT INTO 10162695_login (username, email, password) VALUES ('$myusername', '$myemail', '$hash')";
		$result = mysqli_query($db,$sql);

		header("location: login.php");
      
   }
?>

palunhässs