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

				    <h3>Welcome</h3>
				
				<a href="../view/Stu.php">Student</a></br>
				<a href="../view/Tea.php">Teacher</a></br>
				<a href="../view/Pa.php">Parents</a></br>
			    <a href="../view/Marks.php">Marks</a></br>
			        <a href="../view/Confirm Registration.php">Confirm Registration</a></br>
			     <a href="../view/Notice.php">Notice</a></br>
				<a href="../view/Feedb.php">Feedback</a></br>
				<a href="../view/sms.php">Massage</a></br>
				<a href="../view/System settings.php">System settings</a></br>
				
			</td>
			<td   align="center" >
		<form method="" align = "center">
					<fieldset>
					<h1>Notice</h1>
		
			
			<textarea name="notice" id="" cols="100" rows="20" placeholder="notice"></textarea><br><br><br>
			<input type="submit" name="notice" value="Post">

					
						
					</fieldset>
				</form>
			</td>
		</tr>
				
	</table>
</body>
</html>

