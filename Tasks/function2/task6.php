<?php 

function palindorm($x){

$r=trim($x);
if ($r== strrev($r))
{
    echo "the string is palindorm ";




}
else{
    echo 'the string is not palidorm ';
}
}
palindorm('dad');
palindorm('dade');

?>