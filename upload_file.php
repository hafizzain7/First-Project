<?php
 if(isset($_FILES['img'])){
   echo "<pre>";
   print_r($_FILES);
    $file_name=$_FILES['img']['name'];
    $file_size=$_FILES['img']['size'];
    $file_tmp=$_FILES['img']['tmp_name'];
    $file_type=$_FILES['img']['type'];

   move_uploaded_file($file_tmp,'media/'.$file_name);
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
  <input type="file" name="img">
  <input type="submit" name="submit">
</form>
</body>
</html>