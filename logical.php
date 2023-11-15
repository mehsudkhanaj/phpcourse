<?php 
echo "____________________________Logical Operator__________ <br>";
$day="Monday";
$day2="Sunday";
// if($day=="Monday" || $day2=="Sunday"){
//     echo "________done__________ <br>";
// } 
// $age=18;
// if ($age>=18 && $age<=21){
//     echo "You are now eligible for website <br>";
// }
//LOGICAL NOT
// if (!($age>=18 ) ){
//     echo "You are now eligible for website with OR <br>";
// }else{
//     echo "You are not eligible for website <br>";
// }
// if ($age>=18 xor $age<19){
//     echo "You are now using XOR <br>";
// }else{
//     echo "XOR True /false";
// }
// $age=18;
// if($age>=18){
//     echo "Adults <br>";
// }else if($age<18){
//     echo "Not adult <br>";
// } else{
//     echo "please give your correct age";
// }
$grad=85;
if($grad>=80 && $grad<=100){
    echo "You are in marit";
}elseif($grad>=70 && $grad<=80){
    echo "your are in second division";

}elseif($grad>=70 && $grad<=80){
    echo "your are in good";

}else {
    echo "your are just in good";
}


?>