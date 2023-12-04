<?php 
$x=10;
$y=12;
function swap(&$x, &$y){
$z=$x;
$x=$y;

$y=$z;
}
swap( $x, $y);
echo $x;
echo $y;
?>