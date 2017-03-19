
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registreerumine</title>
		<link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    
    <body>
        
        <div  align="center">
            <form action="signup.php" method="post">
                <table>
                    <tbody>
                        <tr>
                            
                            <td><input name="username" type="text" id="user" placeholder="Soovitav kasutajanimi" required></td>
                        </tr>
						
						<tr>
                            
                            <td><input name="email" type="text" id="email" placeholder="E-mail" required></td>
                        </tr>
						
                        <tr>
                            
                            <td><input name="password" type="password" id="pass" placeholder="Parool" required></td>
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