<?php
echo "___________String_________<br>";
$str="Hello I am 'Muhammad Jamshed'";
// $new=str_ireplace("PHP","nodejs",$str);
// echo "<pre>";
// echo $new;
// echo "</pre>";
// $newa=substr_replace($str,"python and laravel",0,10);
// echo "<pre>";
// echo $newa;
// echo "</pre>";
// $strrr=strtr($str,"ov","hello");
// echo "<pre>";
// echo $strrr;
// echo "</pre>";
// $rev=strrev($str);
// $shuf=str_shuffle($str);
// echo "<pre>";
// echo $shuf;
// echo "</pre>";
// echo trim($str,);
// echo str_pad($str,100,"........",STR_PAD_BOTH);
// echo substr($str,-3);

echo "<pre>";
$newslash=addslashes($str);
echo $newslash;
echo "____<br>";
$newstr=stripslashes($newslash);
echo $newstr;
echo "</pre>";
echo "____<br>";
// $newstr=addcslashes($str,"Jam");
$newstr=addcslashes($str,"a..z");
echo $newstr;





?>