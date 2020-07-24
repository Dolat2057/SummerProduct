<div class="modal fade" id="updateProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">update profile</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div id="update-profile-form" class="section-card">

    

    <form action="./phpActions/updateProfile.php" method="POST" enctype="multipart/form-data">
    
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
                <label>Email</label> <input type="text" name="email" id="email"class="form-control" placeholder="Enter your email">
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

</div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-danger" name="submit-updateProfile">Submit</button>
    </form>
      </div>
    </div>
  </div>
</div>

<script>

$(document).ready(function (){
        $('.updateprof').on('click',function(){
             $('#updateProfile').modal('show');

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
    });
    </script>