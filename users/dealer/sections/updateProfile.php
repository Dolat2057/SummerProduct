
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../../../css/bootstrap.min.css">
      <link rel="stylesheet" href="../../../css/style.css">
      <link rel="stylesheet" href="../css/dealerhome.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

      <title>Summerking</title>
   </head>
   <body>


<div class="container">

<div class="card">

<h1 class="white-text">Update Information</h1>
</div>
<div class="clearfix"></div>
        <div id="product-registration-form" class="card">
        <form action="../phpActions/updateProfile.php" method="POST" enctype="multipart/form-data">
    
        <div class="form-group">
                <label>User Name</label> <input type="text" name="user_name" id="user_name_u"class="form-control" readonly  >
             </div>

             <div class="form-group">
                <label>First Name</label> <input type="text" name="first_name" id="first_name_u"class="form-control" placeholder="Enter your first name" >
             </div>           
                        
             <div class="form-group">
                <label>Last Name</label> <input type="text" name="last_name" id="last_name_u"class="form-control" placeholder="Enter your last name">
             </div>      
                   
             <div class="form-group">
                <label>Email</label> <input type="text" name="email" id="email_u"class="form-control" placeholder="Enter your email">
             </div>
             <div class="form-group">
                <label>Phone</label> <input type="text" name="mobile_number" id="mobile_number_u"class="form-control" placeholder="Enter your phone no">
             </div>
             <div class="form-group">
                <label>Address</label> <input type="text" name="address" id="address_u"class="form-control" placeholder="Enter your Address">
             </div>
             <div class="form-group">
                <label>City</label> <input type="text" name="city" id="city_u"class="form-control" placeholder="Enter your City">
             </div>
             <div class="form-group">
                <label>State</label> <input type="text" name="state" id="state_u"class="form-control" placeholder="Enter your state">
             </div>
             <button type="button" class="btn btn-secondary" onclick="goBack()">Close</button>
         <button type="submit" class="btn btn-danger" name="submit-updateProfile">Submit</button>
        
      </div>
    
         
    
    </form>
    

</div>

 <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../js/jquery-3.4.1.js" ></script>
      <script src="../../js/popper.min.js" ></script>
      <script src="../../js/bootstrap.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
      
   
      
       



   </body>
</html>
<script>
function goBack() {
window.history.back();
}
</script> 


<script>

$(document).ready(function (){

              $tr = $(this).closest('tr');
              var data =$tr.children("td").map(function(){
                return $(this).text();
                }).get();
                console.log(data);

    $('#user_name_u').val(data[0]);
    $('#first_name_u').val(data[1]);
    $('#last_name_u').val(data[2]);
    $('#email_u').val(data[3]);
    $('#address_u').val(data[4]);
    $('#city_u').val(data[5]);
    $('#state_u').val(data[6]);

    });
   
    </script>