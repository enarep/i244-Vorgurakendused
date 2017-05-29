<?php
   include("db_config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
      
      $sql = "SELECT password FROM 10162695_login WHERE username = '$myusername'";
      $result = mysqli_query($db, $sql);
      $retrieved_hash = mysqli_fetch_assoc($result);
      $pw_ok = password_verify($mypassword, $retrieved_hash["password"]);
      
      if($pw_ok == 1) {
         
         $_SESSION['login_user'] = $myusername;
		 
         
         header("location: index.php");
      }else {
         
		
        echo "Vale kasutajanimi/parool!";
        echo "<br>";
        echo '<a href="login.php">Proovi uuesti</a>';
      }
   }
?>