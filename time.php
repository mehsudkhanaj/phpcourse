<?php
echo "_______ Time in PHP ______<br>";



echo date("i"). "<br>";
echo date("g"). "<br>";
echo date("a"). "<br>";
echo date("h:i:sa"). "<br>";
echo date("d-m-Y"). "<br>";
date_default_timezone_set("Asia/Karachi");
echo date("h:i:sa"). "<br>";
echo date_parse("d-M-y");
$date=date_create('2015-12-01');
date_time_set($date,12,57, 01);
echo date_format($date,'d-m-Y H:i:sa');


?>