<?php

$String = 'The quick brown fox jumps over the lazy dog';

$words = explode(' ', $String);


$selectedWords = implode(' ', array_slice($words, 0, 5));


echo  $selectedWords;

?>
