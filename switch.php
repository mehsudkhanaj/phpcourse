<?php 
echo "___________________Switch___________________________ <br>";
$weekday=8;
switch($weekday){
    case 1:case 8: //for multiple cases
        echo "Today is Monday";
        echo "___________________Multiple cases________________________";
    break;
    case 2:
        echo "Today is Tuesday";
    break;
    case 3:
        echo "Today is Wednesday";	
    break;
    case 4:
        echo "Today is Thursday";
    break;
    case 5:
        echo "Today is Friday";
    break;
    case 6:
        echo "Today is Saturday";
    break;
    case 7:
        echo "Today is Sunday";
    break;
    default:
    echo "Please enter a valid day";


}
echo "<br/>";

$age=28;
switch (true) {
    case ($age>=15 && $age<20):
        echo "You are eligible";
        break;
    case ($age>=20 && $age<30):
        echo "You are not eligible";
        break;
    
    default:
        echo "please enter a valid age";
        
}


?>