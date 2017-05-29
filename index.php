<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Koduleht</title>
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
			
	</head>

<body>
    <div class='circleBase outer'>
        <div class='circleBase inner'>
            <table class="index">
                <tr>
                    <td>
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
                                echo '<a href="reg.php">';
								echo '<h3 class="curve">Registreeru</h3>';
								echo "</a>";
							}
						?>
						
						<?php
							if(isset($_SESSION['login_user'])){
                                echo '<a href="calc.php"><h3 class="curve">HEX teisendi</h3></a>';
								echo '<a href="logout.php"><h3 class="curve">Logi välja</h3></a>';
							}
						?>	
				    </td>
                </tr>
            </table>
        </div>
     </div>
        

        <div class="center">
            <p>
                <a href="http://validator.w3.org/check?uri=referer">
                    <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
                </a>
            </p>
            <p>
                <a href="http://jigsaw.w3.org/css-validator/check/referer">
                    <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
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

