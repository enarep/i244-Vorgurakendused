<!DOCTYPE html>
<?php

include("funcs.php");

if(empty($radiovalue)){
    $radiovalue = 'plainhex';
}

if (isset($_POST['sub'])) {
    
    $input = $_POST['sisend'];
    $radio = $_POST['convert'];
    
    if ($radio == 'hexplain'){
        
        $result = hex2plain($input);
        
    } elseif ($radio == 'plainhex') {
        
        $result = plain2hex($input);
        
    } elseif ($radio == 'hexdec') {
        
        $result = hex2decimal($input);
        
    } elseif ($radio == 'dechex') {
        
        $result = dec2hexadec($input);
        
    } elseif ($radio == 'hexbin') {
        
        $result = hex2binary($input);
        
    } elseif ($radio == 'binhex') {
        
        $result = binary2hex($input);
        
    }
    
} elseif (isset($_POST['swap'])) {
    
    $swap = $_POST['valjund'];
    
}

if(isset($_POST['convert'])){               //et raadionupp samas kohas püsiks peale refreshi
    $radiovalue = $_POST['convert'];
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

                            <label><input type="radio" name="convert" value="plainhex" id="plainhex" <?php if($radiovalue == "plainhex") { echo 'checked';} ?>>Plaintext -> HEX</label><br />

                        </tr>
                        <tr>

                            <label><input type="radio" name="convert" value="hexplain" id="hexplain" <?php if($radiovalue == "hexplain") { echo 'checked';} ?>>HEX -> plaintext</label><br />

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
                            <td><input type="text" name="sisend" value="<?php if (isset($swap)) echo $swap; ?>"></td>
                        </tr>
                        <tr>
                            <td>Tulemus:</td>
                                <td>
                                    <textarea rows="3" name="valjund"><?php if (isset($result)) echo $result; ?></textarea>
                                </td>
                            <td><input type="submit" value="Sisendiks" name="swap"></td>
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