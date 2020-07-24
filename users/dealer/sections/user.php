<?php
   require('../../common/dbconnection.php');
   
   
    $user_name=$_SESSION['username'];
    //$user_id=$_SESSION['user_id'];
   $sql="SELECT * FROM  dealerlogin where username='$user_name'";
   $result = mysqli_query($conn , $sql);
   
   if(mysqli_num_rows ($result) > 0){
   
   $row = mysqli_fetch_assoc($result);
   
   }
   
   ?>

<section>
   <div class="row">
      <div class="col-md-6git a section-card">
         <h1><img class="img-fluid" src="../../images/logo.png" alt="Summerking Logo"></h1>
      </div>
      <div class="col-md-3 offset-md-3 ">
         <h3 class="user_name"><span class="muted">Welcome</span> <?php echo  $row['first_name'] ;?>  </h3>
      
        <button class="btn btn-danger" data-toggle="collapse" data-target="#userDeatilsTable"> Profile <i class="fas fa-info"></i></button>
        <a href="logout.php"><button type="logout" class="btn btn-danger">Logout <i class="fas fa-user"></i> </button></a>
          
         
         <table  class="table table-hover  table-responsive collapse " id="userDeatilsTable"  >
           
         <tr>
               <td>Username</td>
               <td><?php echo $row['username']?></td>
            </tr>         
            <tr>
               <td>Email</td>
               <td><?php echo $row['email']?></td>
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
               <td>State</td>
               <td><?php echo  $row['state'];?> </td>
            </tr>
            <td colspan="2">
               <a href="./sections/updateProfile.php" type="button" class="btn btn-danger" > Update Profile <i class="fas fa-user-edit"></i></a>
            </td>
            
            </tr>
         </table>
      </div>
   </div>
</section>