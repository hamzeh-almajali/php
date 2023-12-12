<?php
$rows = 5;

// Print the top half of the pattern
for ($i = 1; $i <= $rows; $i++) {
    // Print spaces
    for ($j = $rows - $i; $j > 0; $j--) {
        echo " ";
    }

    // Print letters
    for ($k = 0; $k < $i; $k++) {
        echo chr(65 + $k) . " ";
    }

    echo "\n";
}

// Print the bottom half of the pattern
for ($i = $rows - 1; $i > 0; $i--) {
    // Print spaces
    for ($j = 0; $j < $rows - $i; $j++) {
        echo " ";
    }

    // Print letters
    for ($k = 0; $k < $i; $k++) {
        echo chr(65 + $k) . " ";
    }

    echo "\n";
}
?>
