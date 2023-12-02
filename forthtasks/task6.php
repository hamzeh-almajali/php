<?php

$url="hamzeh@gmail.net";
$name="";
for($i= strlen($url) -1;$i>=0;$i--){
if( $url[$i] == "."){
    break;
}else{
    $name = $name.$url[ $i ];
}
}
echo strrev($name);





?>
