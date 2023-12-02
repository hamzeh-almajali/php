<?php

$string1 = 'dragonball';
$string2 = 'dragonboll';

// Find the first differing character and its position
$differencePosition = -1;
$differenceChar1 = '';
$differenceChar2 = '';

for ($i = 0; $i < min(strlen($string1), strlen($string2)); $i++) {
    if ($string1[$i] !== $string2[$i]) {
        $differencePosition = $i + 1;
        $differenceChar1 = $string1[$i];
        $differenceChar2 = $string2[$i];
        break;
    }
}



if ($differencePosition !== -1) {
    echo "Expected Result: First difference between two strings at position $differencePosition: \"$differenceChar1\" vs \"$differenceChar2\"\n";
} else {
    echo "Expected Result: The strings are identical.\n";
}

?>