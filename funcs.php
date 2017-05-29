<?php

function hex2plain($hex){
    
    $plain = pack('H*', $hex);
    return $plain;    
    
}

function plain2hex($plain){
    
    $hex = unpack('H*', $plain);
    return $hex[1];
    
}

function hex2decimal($hex){
    
    $dec = hexdec($hex);
    return sprintf('%03d', $dec);
    
}

function dec2binary($dec){
    
    $bin = decbin($dec);
    return sprintf('%08d', $bin);
    
}

function bin2decimal($bin){
    
    $dec = bindec($bin);
    return $dec;
    
}

function dec2hexadec($dec){
    
    $hex = dechex($dec);
    return $hex;
    
}

function hex2binary($hex){
    
    $max = strlen($hex);
    $out = '';
    
    for ($i = 0; $i < $max; $i += 2){
        
        $byte = substr($hex, $i, 2);        //tõlgendab stringi tükkhaaval
        $bin = decbin(hexdec($byte));
        $out .= sprintf('%08d', $bin)." ";
        
    }
    return $out;
    
}

function binary2hex($bin){
    
    $out = base_convert($bin, 2, 16);
    return $out;
    
}

function validateHex($hex){
    
    $hexchars = '0123456789abcdef';
    $arr = str_split($hexchars);
    $check = 0;
    
    for ($i = 0; $i < strlen($hex); $i++){                  //käib kõik läbi ja kontrollib ega
        foreach ($arr as $char){                            //ei esine sümboleid mida ei ole
            if($hex[$i] == $char){                          //eelnevalt deklareeritud nimistus
                $check++;
            }
        }
        
        if($check == 0){
            return false;
        }
        $check = 0;
    }
    return true;
}

function isInteger($input){
    if(ctype_digit(strval($input)) == 1){
        return true;
    }
}

function remSpaces($input){
    
    $new = '';
    for ($char = 0; $char < strlen($input); $char++){
        
        if ($input[$char] != ' '){
            $new .= $input[$char];
        } 
    }
    return $new;
}
?>