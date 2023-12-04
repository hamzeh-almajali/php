<?php 
function prime($x){
for($i = 2; $i < $x; $i++){
    $r='prime';
    if($x %$i == 0){
        $r= 'the number not prime ';
        break;
    }
    
}
return $r;


}
echo prime(13);

?>