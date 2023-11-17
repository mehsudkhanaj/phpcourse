<?php 
echo "___________________for loop___________________________ <br>";
// for ($i=0; $i < 11; $i++) { 
//     echo " $i. Hello World <br>";
// }
// $mul=2;
// for($i=0; $i < 11; $i++) {
//     $result="$mul". "*". "$i". "=". $mul*$i;
//     echo "<h1>".$result ."</h1>"."<br>";
// }
$mul=2;
for($i=10; $i >= 1; $i--) {
    $result="$mul". "*". "$i". "=". $mul*$i;
    echo"<b>". $result ."</b>"."<br>";
}

?>