<?php

// echo "________Explode and Implode______<br>";

// $a="Hello jimi how are you.";
// $ex=explode(' ',$a,3);
// $b=array("THis","is","a ","book");
// $im=implode(" ",$b);

// echo "<pre>";
// print_r($ex);
// echo "</pre>";
// echo "<pre>";
// print_r($im);
// echo "</pre>";



echo "________string split______<br>";

$hello='hello jimi world jimi khan mehsud';
// $new=str_split($hello,3);
// $new=chunk_split($hello,2,'..');
// echo strlen($hello);
// echo "<br>";
// echo str_word_count($hello);
// echo "<br>";
// $new=str_word_count($hello,1);
// echo "<br>";
// echo substr_count($hello,"jimi",15);
$new=strpos($hello,'jimi');
echo "<pre>";
print_r($new);
echo "</pre>";  

?>