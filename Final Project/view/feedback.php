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
                    
                    <table cellspacing="2" border="1" width="10">
                        
                        <tr><th colspan="7" >Feedback</th></tr>
                        <tr><th >User Id </th>
                        <th>Name</th>
                              <th>User Type</th>
                        <th colspan="3">Feedback Massages</th>
                         <th>Delete</th>
                         
                            

                
                       
                    </tr>
                        
                        
                        <tr>
                            <td>888</td>
            
                            <td><input type="data" name="Sabbir" value="Sabbir"></td>
                             
                                
                                     <td width="1"><input type="data" name="Student" value="Student" ></td>
                                      <td colspan="3"><input type="data" name="feedback" value="This a very Experimental School" ></td>
                                                       <td> <input type="button" name="Delete" value="Delete"></td>
                        </tr>
                        
                        <tr>
                        <td>n</td>
                            <td>n</td>
                            <td>n</td>
                            <td>n</td>
                       


                        <tr>
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
                 
                        </tr>


                        <tr>
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
              
                        </tr>


        
                </form>

                
                
                
            



            </td>
        </tr>
                
    </table>
</body>
</html>