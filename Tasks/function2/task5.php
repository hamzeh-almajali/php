<?php 
function arms($x){
$xl=(string )$x;
$sum=0;
for ($i= 0; $i<strlen($xl); $i++){
    $sum += pow((int)$xl[$i],strlen($xl));

}
if ($sum== $x){
    echo 'the number '.$x ."is armstrong ";



}
else{
    echo "the numberv".$x ." not armstrong ";
}
}

arms(8208);

?> 