<?php 
$string="helllo";
$string2= "hello how are you";

$uppercase = strtoupper($string);
$lowercase = strtolower($string);
$firstUppercase = ucfirst($string);
$firstLetterCapitalized = ucwords($string2);
echo $uppercase."<br>".$lowercase ."<br>".$firstUppercase ."<br>".$firstLetterCapitalized ."<br>" ;

?>