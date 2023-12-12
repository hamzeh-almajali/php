<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo chr(65 + $i) . " ";
    }
    echo "\n";
}
?>
