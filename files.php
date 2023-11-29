<?php
echo "______ File in PHP______<br>";

if(isset($_FILES['eimage'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    $file_name=$_FILES['eimage']['name'];
    $file_size=$_FILES['eimage']['size'];
    $file_tmp=$_FILES['eimage']['tmp_name'];
    $file_type=$_FILES['eimage']['type'];
    if(move_uploaded_file($file_tmp,'upload/'.$file_name)){
        echo "successfully upload";
    }else{
        echo "error while uploading";
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>

   <form action="" method="post" enctype="multipart/form-data">

   <input type="file" name="eimage"><br><br>
   <input type="submit" value="submit">
   </form>
    
</body>
</html>