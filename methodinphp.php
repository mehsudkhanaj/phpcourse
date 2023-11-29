<?php
echo "______ Methods in PHP _____<br>";
echo "___________________________________<br>";
echo "____________Get Method_____________<br>";
echo "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" <?php echo $_SERVER['PHP_SELF']?>" method="post">
        Name: <Input type="text" name="fname"></Input><br><br>
        Age: <Input type="text" name="age"></Input><br><br>
        <input type="submit" name='save' value="submit">
    </form>
    <?php
    if(isset($_POST['save'])){
        echo $_POST['fname'].'<br>';
        echo $_POST['age'].'<br>';
    }
    
    ?>


</body>
</html>


echo "___________________________________<br>";
<?php
echo "___________POST Method__________<br>";

?>


echo "___________________________________<br>";
<?php
echo "__________Server Method______________<br>";



?>