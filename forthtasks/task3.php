<?php


$sentence = 'I am a full stack developer at orange coding academy';


$wordToCheck = 'Orange';


if (stripos($sentence, $wordToCheck) !== false) {
    $output = 'Word Found!';
} else {
    $output = 'Word Not Found!';
}

echo $output;

?>
