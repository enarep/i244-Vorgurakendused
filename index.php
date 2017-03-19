<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Koduleht</title>
		<link rel="stylesheet" type="text/css" href="style.css">
			
	</head>

<body>
    <div class='circleBase outer'>
        <div class='circleBase inner'>
            <table align='center'>
                <tr>
                    <th>
						<?php
							if (isset($_SESSION['login_user'])){
								
								echo '<h3 class="curve">';
								echo "Tere, ";
								echo $_SESSION['login_user'];
								echo '</h3>';
							
							} else {
								echo '<a href="login.php">';
								echo '<h3 class="curve">Logi sisse</h3>';
								echo "</a>";
							}
						?>
						<a href="reg.php"><h3 class="curve">Registreeru</h3></a>
						<a href="galerii.php"><h3 class="curve">Galerii</h3></a>
						<?php
							if(isset($_SESSION['login_user'])){
								echo '<a href="logout.php"><h3 class="curve">Logi välja</h3></a>';
							}
						?>	
						</th>
                </tr>
            </table>
        </div>
     </div>
        
        <div align="center">
            <h4 class="curve2">
                <?php
                    echo 'Praegune PHP versioon' . phpversion();
                ?>
            </h3>
        </div>

        <div align="center">
            <p>
                <a href="http://validator.w3.org/check?uri=referer">
                    <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
                </a>
            </p>

        </div>
       
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/jquery.arctext.js"></script>
    <script>
        var $curve = $('.curve');
        var $curve2 = $('.curve2');
        $curve.arctext({radius: 450});
        $curve2.arctext({radius: 500, dir: -1});
    </script>
</body>

</html>

