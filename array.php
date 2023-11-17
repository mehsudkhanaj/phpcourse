<?php 
echo "__________________Array in PHP_______________________<br>";
$color=array("red", "green", "blue", "alpha");
// echo "<pre>";
// print_r($color);
// echo "</pre>";
echo "<ol>";
for($i=0;$i<4;$i++) {
    
    echo "<li>$color[$i]</li>";

    
}
echo "</ol>";
echo "<br>";
echo "__________________PHP Associated Array_______________________<br>";
$age=[
    "bill"=>25,
    "steve"=>28,
    "elon"=>"musk",
    "mark"=>29];
$age["elon"]=50;
    echo "<pre>";
    print_r($age);
    echo "</pre>";
echo $age["bill"]."<br>";
echo $age["steve"]."<br>";
echo $age["elon"]."<br>";
echo $age["mark"]."<br>";
var_dump($age);

?>