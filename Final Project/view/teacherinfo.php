    
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
                
                <form action="">
                    
                    <table border="1" width="100%">
                        
                        <tr><th colspan="7"> Teacher Information</th></tr>
                        <tr><th>User ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>User type</th>
                        <th>Gender</th>
                         <th>payment(monthly)</th>
                    </tr>
                        
                        
                        <tr>
                            <td>888</td>
                            <td><input type="data" name="omi" value="omi"></td>
                            <td><input type="data" name="omi" value="omi73"></td>
                            <td><input type="data" name="omi73@gmail.com" value="omi73@gmail.com"></td>
                            <td><input type="data" name="Teacher" value="Teacher"></td>
                            <td><input type="data" name="Male" value="Male"></td>
                            <td><input type="data" name="20000" value="20000"></td>
                        </tr>
                        
                        <tr>
                        <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                             <td>n</td>
                        </tr>


                        <tr>
                        <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                             <td>n</td>
                        </tr>
                        

                        <tr>
                        <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                             <td>n</td>
                        </tr>


                        <tr>
                        <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                             <td>n</td>
                        </tr>


                        <tr>
                        <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                             <td>n</td>
                        </tr>




                    </table> <br> <br> 
                    <input type="button" name="add" value="Add">
                    <input type="button" name="delete" value="Delete">
                    <input type="button" name="update" value="Update">
        
                </form>

                
                
                
            



      </td>
    </tr>
        


    </table>
</body>
</html>

