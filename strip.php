<?php 
echo "_________ _____________<br>";
$a="Hello this is world beautiful";
echo wordwrap($a,1,"<br>",true);
echo "<br>";

$b="Hello <b> World , Hello <i>Earth </i>";
echo strip_tags($b);

?>
