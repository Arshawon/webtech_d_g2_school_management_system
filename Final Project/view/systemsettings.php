
		
			
         <?php
    //session starts
    session_start();
    include ('../model/db.php');
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
    }else {
        header("location:login.php");
    }
    
?>
<!DOCTYPE html>
<html>
<head>
<title>Teacher Page</title>
</head>
<body style="background-color:powderblue;">
    <center>
        <table border="1" cellspacing="0" width="50%" >
            <tr>
                    <td colspan="2" align="center"><h1>
                    Welcome <?php 
                        echo $_COOKIE['userName']; 
                    ?><br>
                    <?php echo $id; ?>!
                    </h1></td>
            </tr>   
            <tr>    
                <td width="200px">

                    <ul>

                         <li>   
                            <a href="admin_home.php">Admin home</a>
                            <br>
                         </li>

                       
                         
                         <li>
                            <a href="../php/logout.php">logout</a>
                            <br>
                         </li>

                    </ul>
                    
                    
                </td>
               
            </tr>   
         </table>  <br> <br>   

	  
            
            <td align="center">
                


                <table style="width:50%">
  <h2 align="center"> General settings</h2>   
  <form>
    
  <fieldset>

    
    Startup: 
     <input type="radio" name="Startup"  > launch on Startup 
        <input type="radio" name="Startup"  > Root<br><br>
       

  Language:
      <select id="Language" name="lanaguage">
    <option value="English">English</option>
    <option value="Bangla">Bangla</option>
    
     </select><br><br>
       
        
        Prompt Settings:

  
        <input type="checkbox" name="Prompt Settings"> Performance optimization tips
      <input type="checkbox" name="Prompt Settings"> Ballontips notification
    <br><br>
    

    


    
  </fieldset>

<fieldset >

      <button type="reset" value="Reset">Reset now</button> 
       <button type="Save" value="Save">Save settings</button> 

</fieldset>
  </form>
  </table>
               


               


			</td>
		</tr>
				
	</table>
</body>
</html>

