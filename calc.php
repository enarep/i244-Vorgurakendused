<?php 
	session_start();
?>

<!DOCTYPE html>
<?php

include("funcs.php");

if(empty($radiovalue)){
    $radiovalue = 'hexplain';
}

if (isset($_POST['sub'])) {
    
    
    
    $input = strtolower($_POST['sisend']);
    $radio = $_POST['convert'];
    
    if($input == strtolower('game')){
        header("location: gameoflife.html");
    }
    
    if ($radio == 'hexplain'){
        
        if(validateHex($input)) {
            $result = hex2plain($input);
        } else {
            $err = "Ma ei oska seda sisendit tõlgendada";
        }
        
        
    } elseif ($radio == 'plainhex') {
        
        $result = plain2hex($input);
        
    } elseif ($radio == 'hexdec') {
        
        if(validateHex($input)) {
            $result = hex2decimal($input);
        } else {
            $err = "Ma ei oska seda sisendit tõlgendada";
        }
        
        
    } elseif ($radio == 'dechex') {
        
        if(isInteger($input)){
            $result = dec2hexadec($input);
        } else {
            $err = "Siin peaks täisarv olema";
        }
        
    } elseif ($radio == 'hexbin') {
        
        if(validateHex($input)) {
            $result = hex2binary($input);
        } else {
            $err = "Ma ei oska seda sisendit tõlgendada";
        }
         
    } elseif ($radio == 'binhex') {
        $input = remSpaces($input);
        if (preg_match('~^[01]+$~', $input)) {
            $result = binary2hex($input);
        } else {
            $err = "Siia paluks nullid ja ühed ainult";
        }        
    }
    
} elseif (isset($_POST['swap'])) {
    
    $swap = $_POST['valjund'];
    
}

if(isset($_POST['convert'])){               //et raadionupp samas kohas püsiks peale uuesti laadimist
    $radiovalue = $_POST['convert'];
}
 

?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>HEX teisendi</title>
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
        
    </head>
    
    <body>
        <p align="center">
            <a href="jah.html">Kas selle jaoks pidi tõesti sisse logima?</a>
        </p>
        
        <div  align="center">
            <form action="calc.php" method="post" enctype="multipart/form-data" id="vorm">
                <table>
                    <tbody>
                        
                        <tr>

                            <label><input type="radio" name="convert" value="hexplain" id="hexplain" <?php if($radiovalue == "hexplain") { echo 'checked';} ?>>HEX -> Plaintext</label><br />

                        </tr>
                        <tr>

                            <label><input type="radio" name="convert" value="plainhex" id="plainhex" <?php if($radiovalue == "plainhex") { echo 'checked';} ?>>Plaintext -> HEX</label><br />

                        </tr>
                        <tr>

                            <label><input type="radio" name="convert" value="hexdec" id="hexdec" <?php if($radiovalue == "hexdec") { echo 'checked';} ?>>HEX -> DEC</label><br />

                        </tr>
                        <tr>

                            <label><input type="radio" name="convert" value="dechex" id="dechex" <?php if($radiovalue == "dechex") { echo 'checked';} ?>>DEC -> HEX</label><br />

                        </tr>
                        <tr>

                            <label><input type="radio" name="convert" value="hexbin" id="hexbin" <?php if($radiovalue == "hexbin") { echo 'checked';} ?>>HEX -> BIN</label><br />

                        </tr>
                        <tr>

                            <label><input type="radio" name="convert" value="binhex" id="binhex" <?php if($radiovalue == "binhex") { echo 'checked';} ?>>BIN -> HEX</label><br />
                         </tr>

                    
                        <tr>
                            <td>Sisesta siia:</td>
                            <td><input type="text" autofocus="autofocus" name="sisend" value="<?php if (isset($swap)) echo $swap; ?>"></td>
                           
                        </tr> 
                        <tr>
                            <td></td>
                            <td><em><?php if(!empty($err)) { echo $err; $err = '';} ?></em></td>
                        </tr>
                        <tr>
                            <td>Tulemus:</td>
                                <td>
                                    <textarea rows="3" name="valjund"><?php if (isset($result)) echo $result; ?></textarea>
                                </td>
                            <td><input type="submit" value="&uarr;" name="swap"></td>
                        </tr>
                        
                        <tr>
                            <td></td>
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