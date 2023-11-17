<?php 
echo "__________________Foreach Loop In PHP_______________________<br>";


$weekday=["Monday", "Tuesday", "Wednesday","Thursday","Friday","Saturday","Sunday"];
$appdev=[
    "bill"=>25,
    "mark"=>28,
    "elon"=>21,
    "stev"=>250,   
    
];
foreach($weekday as $wk){
    echo $wk ."<br>";
}
echo "_________other method________<br>";
echo "<ul>";
foreach($appdev as $key=> $app){
    echo "<li>".$key. "=" . $app."</li>";
}
echo "</ul>";
?>