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
<title>Student Page</title>
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
         </table> <br> <br>   

<table>
            
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

