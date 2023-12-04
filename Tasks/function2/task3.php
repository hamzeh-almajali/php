<?php 

$string  = "hello";
$string2='HEllo';
function check( $string ) {
if (strtolower($string) == $string) {
    echo "ok ";

}else{
    echo "not ok ";
}
}
check($string);
check($string2);


?>