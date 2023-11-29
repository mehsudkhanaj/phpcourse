<?php

echo "______ Cookie in PHP _____<br>";
$c_name="user";
$c_value="jimi khan";
setcookie($c_name,$c_value,time()+(86400 * 30 ),'/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE[$c_name])){
        echo "Cookie is not set";
        
    }else{
        echo $_COOKIE[$c_name];

    }

    ?>
    
</body>
</html>