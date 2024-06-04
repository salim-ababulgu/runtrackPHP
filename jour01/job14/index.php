<?php
function leetSpeak($str) {
    $leet = [
        'A' => '4', 'a' => '4',
        'E' => '3', 'e' => '3',
        'L' => '1', 'l' => '1',
        'T' => '7', 't' => '7',
        'O' => '0', 'o' => '0'
    ];
    
    return strtr($str, $leet);
}

echo leetSpeak("Bonjour La Plateforme");
?>
