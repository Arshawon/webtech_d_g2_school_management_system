<?php
global $name;
include('../php/logincheck.php');
//session_start();
if(isset($_SESSION['id']))

{
	header('Location:admin_home.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
	  <title>Login</title>
	  <link rel="stylesheet" href="../assets/css/loginstyle.css">
   </head>
   <body>
      <div class="center">
	     <h1>Login</h1>
		 <form method="post">
		    <div class="txt_field">
			   <input type="text" value="" name="id" required>
			   <span></span>
			   <label>UserId</label>
			</div>
			<div class="txt_field">
			   <input type="password" value="" name="password" required>
			   <span></span>
			   <label>Password</label>
			</div>
		
			<input type="submit" name="submit" value="Login"><br><br />

			<a style="padding: 10px;
			text-decoration: none;
    font-size: 15px;
  width:42px;height:42px;
  right:10%;
    background: #2691d9;
    border: none;
    border-radius: 5px;color:white;text-align:center;" href="../view/registration.php">Sign up</a>
		 </form>
	  </div>
   </body>
</html>