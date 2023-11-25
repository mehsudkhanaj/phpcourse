<?php
echo "___________String_________<br>";
$str="I love php and we love python also";
$new=str_ireplace("PHP","nodejs",$str);
echo "<pre>";
echo $new;
echo "</pre>";
$newa=substr_replace($str,"python and laravel",0,10);
echo "<pre>";
echo $newa;
echo "</pre>";
$strrr=strtr($str,"ov","hello");
echo "<pre>";
echo $strrr;
echo "</pre>";
// echo substr($str,-3);


?>