<?php
$file_handle = fopen(time() . ".txt", 'w') or die("can't open file");
fclose($file_handle);
?>