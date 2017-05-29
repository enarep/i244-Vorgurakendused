<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registreerumine</title>
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
        
    </head>
    
    <body>
        
        <div  align="center">
            <form action="signup.php" method="post">
                <table>
                    <tbody>
                        <tr><td>Kasutajanimi: </td></tr>
                        <tr>
                            
                            <td><input name="username" type="text" id="user" placeholder="Soovitav kasutajanimi" required></td>
                        </tr>
				        <tr><td>Email: </td></tr>
						<tr>
                            
                            <td><input name="email" type="text" id="email" placeholder="E-mail" required></td>
                        </tr>
						
                        <tr><td>Parool: </td></tr>
                        <tr>
                            
                            <td><input name="password" type="password" id="pass" placeholder="Parool" required></td>
                        </tr>
                        
                        <tr><td>Parool uuesti: </td></tr>
                        <tr>
                            
                            <td><input name="password2" type="password" id="pass2" placeholder="Parool" required></td>
                        </tr>
                    
                        <tr>
                            <td align="center"><input type="submit" value="Registreeru"></td>
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