
    
      
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
<title>Marks</title>
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
                    
                    <table cellspacing="2" border="1" width="10">
                        
                        <tr><th colspan="14" > Marks</th></tr>
                        <tr><th >class </th>
                        <th>Name</th>
                              <th>Roll no</th>
                        <th>Sub1</th>
                         <th>Sub2</th>
                          <th>Sub3</th>
                           <th>Sub4</th>
                            <th>Sub5</th>
                             <th>Sub6</th>
                              <th>Sub7</th>
                               <th>Sub8</th>
                                <th>Sub9</th>
                                 <th>Sub10</th>
                            

                
                         <th>Total Marks</th>
                    </tr>
                        
                        
                        <tr>
                            <td>8</td>
            
                            <td><input type="data" name="Sabbir" value="Sabbir"></td>
                             
                                
                                     <td width="1"><input type="data" name="05" value="05" ></td>
                                      <td width="1"><input type="data" name="90" value="90" ></td>
                                       <td><input type="data" name="90" value="90" ></td>
                                       <td><input type="data" name="90" value="90" ></td>
                                     <td><input type="data" name="90" value="90" ></td>
                                      <td><input type="data" name="90" value="90" ></td>
                                       <td><input type="data" name="90" value="90" ></td>
                                       <td><input type="data" name="90" value="90" ></td>
                                     <td><input type="data" name="90" value="90" ></td>
                                      <td><input type="data" name="90" value="90" ></td>
                                       <td><input type="data" name="90" value="90" ></td>
                                        <td><input type="data" name="900" value="900" ></td>
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

