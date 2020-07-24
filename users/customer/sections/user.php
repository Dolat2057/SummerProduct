              <?php
              require('../../common/dbconnection.php');

              $user_name=$_SESSION['username'];
              //$user_id=$_SESSION['user_id'];
             $sql="SELECT * FROM  users where username='$user_name'";
             $result = mysqli_query($conn , $sql);
    
            if(mysqli_num_rows ($result) > 0){

	             $row = mysqli_fetch_assoc($result);
		
	         }

             ?>

         <section>

	           <div class="row">
                    <div class="col-md-4">
                    <h1><img src="../../images/logo.png" alt="Summerking Logo"></h1>
                    </div>
        

                    <div class="col-md-3 offset-md-5 ">
               
                    <h3 class="user_name"><?php echo  $row['first_name'] ." ". $row['last_name'] . " ";?><i class="fas fa-user"></i> 
                    <a href="logout.php"><button type="logout" class="btn btn-danger">Logout</button></a></h3>
                   
               <a  type="button" class="btn btn-link" data-toggle="collapse" data-target="#demo">   
						<h7 class="user_name">User Details</h7>		
               </a>
               
            
            
             
               
                <table  class="table  table-responsive collapse  " id="demo"  >
                            <td>Username</td>
                           <td><?php echo $row['username']?></td></tr>
 						   <tr>
						   <td>Email</td>
						   <td><?php echo $row['email']?></td>
						   </tr>

						   <tr>
						   <td>UserType</td>
						   <td><?php echo $row['usertype']?></td>
						   </tr>

               		        <tr>
               				<td>Phone</td>
               				<td><?php echo  $row['mobile_number'];?> </td>
               			    </tr>
						    <tr>

                           <td>Address</td>
                           <td><?php echo  $row['address'];?> </td>
                           </tr>
                           <tr>

                          <td>City</td>
                          <td><?php echo  $row['city'];?> </td>
                         </tr>
                         <tr>

                        <td>state</td>
                        <td><?php echo  $row['state'];?> </td>
                        </tr>

      
               				
        <td><button type="button" class="btn btn-outline-danger updatepro" data-toggle="modal" data-target="#updateProfile">
         <i class="fas fa-user-edit"></i> Update Profile</button></td>
               			</tr>

               	</table>
 
               </div>
         </div>

</section>