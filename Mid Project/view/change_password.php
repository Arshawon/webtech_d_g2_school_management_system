	

<?php
	session_start();
	if(isset($_SESSION['flag'])){

        $myfile = fopen("../view/test.txt", "r");
        $readfile = fread($myfile, filesize("../view/test.txt"));
        $data = explode("|", $readfile);
        }else{
		header('location: ../view/login.php?msg=login_first');
	}

?>
<html>
<head>
	<title>Admin_home</title>
</head>
<body>

	<table width="1100px" height="300" border="1" align="center">
		<tr colspan="3">
			<td  align="center">
				<img src="../assets/SMS.jpg" width="200px" height="130px" >
			</td>

			<td align="right">

                <a href="../view/profile.php"><?php echo $data[0];?></a>|

				 <a href="../view/change_password.php">Change Password</a>|	
	             <a href="../php/logout.php">Logout</a></b>

			</td>
		
		</tr>
		
		<tr width="200px" height="300">
			<td width="200px">
<h3>Welcome <?php echo $data[5];?></h3>
				
		<a href="../view/Stu.php">Student</a></br>
				<a href="../view/Tea.php">Teacher</a></br>
				<a href="../view/Pa.php">Parents</a></br>
			    <a href="../view/Marks.php">Marks</a></br>
			        <a href="../view/Confirm Registration.php">Confirm Registration</a></br>
			     <a href="../view/Notice.php">Notice</a></br>
				<a href="../view/Feedb.php">Feedback</a></br>
				<a href="../view/sms.php">Massage</a></br>
				<a href="../view/System settings.php">System settings</a></br>
				
				
		

<td>
				<form>
			<fieldset>
			<legend><h2><b>Change Password</b></h2></legend>
	    	
	    	 Current Password:<input type="Password" name="password" value=""><br>
	    	  <br>
	       
	    	 New Password:<input type="Password" name="npassword" value="" > <br>
              <br>
	    	Confirm New Password: <input type="Password" name="confirm password" value="" > 
	    	 <hr>
				<input type="submit" name="submit" value="Change Password">
				
		       
      </fieldset>
	</form>	
			</td>






		</tr>
				
	</table>
</body>
</html>








