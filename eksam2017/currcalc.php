<!DOCTYPE html>
<?php
	
	$exrate = 0.886324457;
	if(empty($radiovalue)){
    	$radiovalue = 'usdeur';
	}
	
	if (isset($_POST['sub'])) {
		
		$input = $_POST['sisend'];
		$radio = $_POST['radio'];
		
		if($radio == 'usdeur'){
			$result = $input * $exrate;
		} else {
			$result = $input / $exrate;
		}
			
	}
	if(isset($_POST['radio'])){
   	$radiovalue = $_POST['radio'];
	}

?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Valuutakalkulaator</title>
   </head> 
    
    <body onload="showCurr()">
    	<form action="currcalc.php" method="post" id="vorm">
    		<table>
    		<tr>
    		<td>
    		<label>
    			<input type="radio" name="radio" value="usdeur" id="r1" <?php if($radiovalue == "usdeur") { echo 'checked';} ?>>
    			USD -> EUR
    		</label>	
    		</td>
    		</tr>
    		<tr>
    		<td>
    		<label>
    			<input type="radio" name="radio" value="eurusd" id="r2" <?php if($radiovalue == "eurusd") { echo 'checked';} ?>>
    			EUR -> USD
    		</label>
    		</tr>
    		</td>
    		<tr>
         	<td>Sisesta siia:</td>
         	<td><input type="text" name="sisend" onclick="showCurr()"></td>
         	<td><p id="p1"></p></td>                 
         </tr> 
         <tr>
         <td></td>
         </tr>
         <tr>
         	<td>Tulemus:</td>
         	<td>
            	<input type="text" name="valjund" id="valjund" <?php if(isset($_POST['sisend'])) {echo "value='$result'";}?>>
         	</td>
         	<td><p id="p2"></p></td>
         </tr>
                        
         <tr>
         <td></td>
         <td><input type="submit" value="Teisenda" name="sub"></td>
                            
         </tr>
    		</table>
    	</form> 
    	<script>
    		function showCurr(){
    			if(document.getElementById('r1').checked){
    				document.getElementById('p1').innerHTML='USD';
    				document.getElementById('p2').innerHTML='EUR';
    			} else {
    				document.getElementById('p2').innerHTML='USD';
    				document.getElementById('p1').innerHTML='EUR';
    			}
    		}

    	</script> 
    </body>
</html>