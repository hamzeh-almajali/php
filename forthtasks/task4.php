<?php


$url = 'http://www.orange.com/index.php';


$filename = pathinfo($url, PATHINFO_BASENAME);



echo $filename;

?>