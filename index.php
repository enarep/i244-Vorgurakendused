<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Koduleht</title>
		<link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script>
			 $(document).ready(function () {
                setInterval(function(){
                    var back = ["#ff0000","blue","gray","#ffff00","#ff00ff"];
                    var rand = back[Math.floor(Math.random() * back.length)];
                    $('body').css('background', rand);
                    });
                }, 500);
                
             $(document).ready(function () {
                setInterval(function(){
                    var back = ["#ff0000","blue","gray","#ffff00","#ff00ff"];
                    var rand = back[Math.floor(Math.random() * back.length)];
                    $('div').css('background', rand);
                    });
                }, 500);
		</script>
		
	</head>

<body>
    
    <div align="right">
		<table>
            <tr>
                <th><a href="login.html">Logi sisse</a></th>
                <th><a href="register.html">Registreeru</a></th>
            </tr>
        </table>
	</div>
    
        
	<h1>
		test
	</h1>
    
    <div align="center">
		<table>
            <tr width="640">
                <th><a href="galerii.php">Galerii</a></th>
                <th>Tühi</th>
                <th>Tühi</th>
                <th>Tühi</th>
            </tr>
        </table>
	</div>
	
	
	
    
	<div align="center">
		<img src="silm.gif" alt="pilt" width="640" height="427"/>
	</div>
	
	<div align="center">
		<?php
			echo 'Praegune PHP versioon' . phpversion();
		?>
	</div>
	
	<div align="center">
		<p>
			<a href="http://validator.w3.org/check?uri=referer">
				<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
			</a>
		</p>

	</div>
	
	
</body>

</html>

