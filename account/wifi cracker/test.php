<?php

$Data = file_get_contents('1.txt');
$Data = str_replace('\n', '<br>', $Data);
//$DataLength = strlen($Data);
//$DataPoint = strrpos($Data, '[');
echo $Data;

?>
