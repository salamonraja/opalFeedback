<?php
$var1 = $_POST['firstName'];
$var2 = $_POST['lastName'];


$fileHandle = fopen("myDataFile", 'w');
fwrite($fileHandle, $var1);
fwrite($fileHandle, $var2);
fclose($fileHandle);

$fileHandle = fopen("myDataFile", 'r');

echo $theInfo;

?>
