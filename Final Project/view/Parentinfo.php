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


            
            <td align="center">
                
                <form action="">
                    
                    <table border="1" width="100%">
                        
                        <tr><th colspan="8"> Parents Information</th></tr>
                        <tr>
                            <th>User ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>User type</th>
      
                         <th>Child name</th>
                         <th>class</th>
                         <th>Mobile No</th>
                    </tr>
                        
                        
                        <tr>
                            <td>888</td>
                            <td><input type="data" name="gaffar" value="gaffar"></td>
                            <td><input type="data" name="gaffer" value="gaffar73"></td>
                            <td><input type="data" name="gaffer73@gmail.com" value="gaffer73@gmail.com"></td>
                            <td><input type="data" name="parents" value="parents"></td>
         
                            <td><input type="data" name="Sabbir" value="Sabbir"></td>
                               <td><input type="data" name="8" value="8"></td>
                                  <td><input type="data" name="01934540901" value="01934540901"></td>
                        </tr>
                        
                        <tr>
                        <td>n</td>
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

