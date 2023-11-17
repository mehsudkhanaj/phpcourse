<?php 
echo "___________________Nested Loop___________________________ <br>";

// for ($i = 1; $i <=100; $i+=10) {
//     for($j=$i; $j <$i+10; $j++) {
//         echo $j . ' ';  
// }
// echo '<br />';
// }
for ($i=0; $i <10 ; $i++) { 
    if($i==3){
        continue;
        // break;
    }
    echo "Number: ".$i. ' <br />';
}
?>