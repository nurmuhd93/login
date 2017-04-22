
    <html>  
    <head>  
        
        <title>View Users</title>  
    </head>  
   
    <body>  
      
    <div >  
        <h1 align="center">All the Users</h1>  
      
    <div >
      
      
        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
            <thead>  
      
            <tr>  
    
                <th>Username</th>  
                <th>E-mail :</th>  
                <th>Pass :</th>  
                 
            </tr>  
            </thead>  
      
            <?php  
            $con = mysqli_connect("localhost","root","","user");  
           $username = $_GET['username'];
           $password = $_GET['password'];
      
	$query="select * from register where $username='$username' and $password='$password'";
$run = mysqli_query($con,$query);
            while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
            {  
                $username=$row[0];  
  $email=$row[1]; 
                $password=$row[2];  

mysqli_close($con);
            ?>  

      
            <tr>  
    <!--here showing results in the table -->  
                
                <td><?php echo $username;  ?></td>  
                <td><?php echo $email;  ?></td>  
                <td><?php echo $password;  ?></td>  
			<?php }?>
            </tr>  
      
        </table>  
            </div>  
    </div>  
      
      
    </body>  
      
    </html>  

