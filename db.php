<?php
$var1 = $_POST['field1'];
$var2 = $_POST['field2'];


 
$myfile = fopen("textdata.txt", "w") or die("Unable to open file!");

fwrite($myfile, $var1);
fwrite($myfile, $var2);
fclose($myfile);
 

?>