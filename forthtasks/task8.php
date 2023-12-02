<?php

$sentence = 'That new trainee is so genius.';
$replacementWord = 'Our';

$firstSpacePos = strpos($sentence, ' ');


$newSentence = substr_replace($sentence, $replacementWord, 0, $firstSpacePos);



echo $newSentence;

?>