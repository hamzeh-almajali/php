<?php

function generate($characters, $length) {
    $shuffledCharacters = str_shuffle($characters);
    return substr($shuffledCharacters, 0, $length);
}

$Characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
echo  str_shuffle($Characters);
echo'<br> 1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

$Length = 8; 

// Generate random password
$randomPassword = generate($Characters, $Length);

echo "<br> $randomPassword";

?>