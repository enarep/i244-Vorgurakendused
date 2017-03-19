<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Sisselogimine</title>
		<link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    
    <body>
        
        <div  align="center">
            <form name="loginform" method="post" action="checklogin.php">
                <table>
                    <tbody>
                        <tr>
                         
                            <td><input name="username" type="text" id="user" placeholder="Kasutajanimi" required></td>
                        </tr>
                        <tr>
                           
                            <td><input name="password" type="password" id="pass" placeholder="Parool" required></td>
                        </tr>
                        <tr>
                            <td align = "center"><input name="submit" type="submit" value="Saada"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        
        <p align="center">
            <a href="index.php">Tagasi</a>
        </p>
        
    </body>
</html>