<?php

$conn=mysqli_connect('localhost','root','','crud') or die('Connection failed');

$sql="INSERT INTO student (sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result=mysqli_query($conn,$sql) or die("Query Unsuccessful");
header('Location:http://localhost/phpcourse/crud_html/index.php');
mysqli_close($conn);

?>