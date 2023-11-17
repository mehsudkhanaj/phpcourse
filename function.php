<?php 
echo "___________________ Functions ___________________________ <br>";

function hello(){
    $sum=2;
    for($i=0;$i<=10;$i++){
       $result= "$sum"."*"."$i"."= ".$sum*$i;
        echo $result ,"<br>";
    }
}
hello();
echo "________________________________________________________________ <br>";

function whileloop($sum, $i){
    
    while($sum<=10){
        $result= "$sum"."*"."$i"."= ".$sum*$i;
        echo $result ."<br>";
        $sum++;

    }

}
whileloop(2,1);


function swtichcase($weekday){
    
    switch($weekday){
        case 1:
            echo "Weekday is Monday";
        break;
        case 2:
            echo "Weekday is Tuesday";
        break;
        case 3:
            echo "Weekday is Wednesday";
        break;
        case 4:
            echo "Weekday is Thursday";
        break;
        case 5:
            echo "Weekday is Friday";
        break;
        default:
        echo "Weekday is Sunday";
    }
}
swtichcase(3);
echo "________________________________________________________________<br>";
echo "________________________________________________________________<br>";

function hello1($fname="First",$lname="Last"){
    $v="$fname $lname";
    return $v;
    
}
$name=hello1("Muhammad","Jamshed");

echo "Hello ",$name ;
echo "<br>";
function sum($math,$english,$science){
    $s=$math+$english+$science;
    return $s;
    
}
function percentage($st){
    $per=($st*100)/300;
    echo $per;
}

$total=sum(50,90,67);
percentage($total);
echo "<br>";
echo "____function by reference____ ";
echo "<br>";


function function1(&$string){
    $string.=" and something like";

}
$str="This function string";
function1($str);
echo $str;


?>

