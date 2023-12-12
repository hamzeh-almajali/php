<?php
$num = 1;
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j == $i) {
            echo $num . " ";
        } else {
            echo "0 ";
        }
    }
    $num++;
    echo "\n";
}
?>
