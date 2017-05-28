<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Sisselogimine</title>
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
        
    </head>
    
    <body>
        
        <div  align="center">
            
                <table>
                    <tbody>
                        <form name="loginform" method="post" action="checklogin.php">
                            <tr>

                                <td><input name="username" type="text" id="user" placeholder="Kasutajanimi" required></td>
                            </tr>
                            <tr>

                                <td><input name="password" type="password" id="pass" placeholder="Parool" required></td>
                            </tr>
                            <tr>
                                <td align = "center"><input name="submit" type="submit" value="Logi sisse"></td>
                             
                            </tr>
                            
                        </form>
                            
                    </tbody>
                </table>
            
        </div>
        
        <p align="center">
            <a href="forgot.html">Unustasin parooli</a>
            <br>
            <a href="index.php">Tagasi </a>
        </p>
        
    </body>
</html>