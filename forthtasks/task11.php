<?php

$string="hello  how are you";
$char='a';
for ($i= 0; $i< strlen($string); $i++){
if ($string[$i]== $char){
    echo $string[$i +1];
    break;

}
}



?>
