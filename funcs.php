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
    
    $new = '';
    for ($char = 0; $char < strlen($bin); $char++){     //eemalda tühikud
        
        if ($bin[$char] != ' '){
            $new .= $bin[$char];
        } 
    }
    
    $out = base_convert($new, 2, 16);
    return $out;
    
}

?>