<?php 
echo "Md 5 <br>";
$name="Hello";
echo "The string in : ". $name . "<br><br>";
echo "md5 Binary: " .md5($name,true) . "<br><br>";
echo "md5 HEX: " .md5($name) . "<br><br>";
echo "sha1 Binary: " .sha1($name,true) . "<br><br>";
echo "Sha1 HEX: " .sha1($name) . "<br><br>";


?>