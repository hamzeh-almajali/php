<?php 
$url="hamzehhhhh@gmail.com";
$name="";
for ($i= 0; $i<strlen($url); $i++){
if($url[$i] == "@"){
    break;
}else{
    $name = $name.$url[$i];
}

}
echo $name;

?>