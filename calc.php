<!DOCTYPE html>
<?php
include("funcs.php");
if(isset($_POST['sub'])) {
    
    $input = $_POST['sisend'];
    $radio = $_POST['convert'];
    if($radio == 'hexplain'){
        $result = hex2plain($input);
    } elseif($radio == 'plainhex') {
        $result = plain2hex($input);
    }
    
}

?>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    
    <body>
        
        <div  align="center">
            <form action="calc.php" method="post" enctype="multipart/form-data">
                <table>
                    <tbody>
                        <tr>
                            <label><input type="radio" name="convert" value="plainhex" id="plainhex" checked>Plaintext -> HEX</label>
                            <label><input type="radio" name="convert" value="hexplain" id="hexplain">HEX -> plaintext</label>
                        </tr>
                        <tr>
                            <td>Sisesta siia:</td>
                            <td><input type="text" name="sisend"></td>
                        </tr>
                        <tr>
                            <td>Tulemus:</td>
                            <td><input type="text" name="valjund" value="<?php if (isset($result)) echo $result; ?>"></td>
                        </tr>
                        
                        <tr>
                            <td><input type="submit" value="Teisenda" name="sub"></td>
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