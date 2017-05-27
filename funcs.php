<?php

function hex2plain($hex){
    
    $plain = pack('H*', $hex);
    return $plain;    
    
}

function plain2hex($plain){
    
    $hex = unpack('H*', $plain);
    return $hex[1];
    
}



?>