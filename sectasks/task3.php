<?php


$file_path = 'C:/Users/SMC/Downloads/message.txt';


    $file_lines = file($file_path);
    $line_count = count($file_lines);

   
    echo "File: $file_path\n";
    echo "Number of Lines: $line_count\n";


?>