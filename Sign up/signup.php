<?php

$conn = new mysqli("localhost","root","","nadra");

 if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $password=$_POST['password'];

      $sql="INSERT INTO islamabad (name,email,password)
      VALUES ('$name','$email','$password')";
      $conn->query($sql);
      echo "<script>location.href='/Junaid Shoes/Login/login_form.php'</script>";
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
  Name:- <input type="text" name="name" placeholder="name"><br><br>
  Email:- <input type="email" name="email" placeholder="email"><br><br>
  Password:- <input type="password" name="password" placeholder="password"><br><br>
  <input type="submit" name="submit">
</form>
</body>
</html>