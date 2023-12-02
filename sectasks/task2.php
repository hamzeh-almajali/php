<?php 
$last_modified_timestamp = filemtime('task1.php');
$last_modified_date = date('Y-m-d H:i:s', $last_modified_timestamp);
echo ''. $last_modified_date .'';
?>