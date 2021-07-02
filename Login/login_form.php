<?php
     $conn = new mysqli("localhost","root","","nadra");
     
     if(isset($_REQUEST['username'])){
       
      $name=$_REQUEST['username'];
      $password=$_REQUEST['password'];

      $sql="SELECT name, password FROM islamabad WHERE name='".$name."' AND password='".$password."'";
      $conn->query($sql);
      echo "<script>location.href='/Junaid Shoes/welcome/index.html'</script>";

     };


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
	<section id="content">
		<form action="">
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="username" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" name="password"/>
			</div>
			<div>
				<input type="submit" value="Login" name="login" />
				<a href="#">Lost your password?</a>
				<a href="#">Register</a>
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
