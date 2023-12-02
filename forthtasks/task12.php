<?php

$String = 'The brown fox';
$ins = 'quick';


$Position = 4;

$mod = substr_replace($String, $ins . ' ', $Position, 0);

echo "Expected Output: '$mod'\n";

?>