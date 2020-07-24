
    <div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden=
    "true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Product </h5><button type="button" class=
                    "close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form action="./phpActions/service.php" method="post">
                    <div class="modal-body">
                    
                       <!-- <div class="form-group">
                            <label>Product Registration Id</label> <input type="text" name="product_registration_id" id=
                            "product_registration_id4"
                            class="form-control" placeholder="Enter your registration number" readonly>
                        </div> -->
                        <div class="form-group">
                            <label>User Name</label> <input type="text" name="user_name" id= "user_name4"
                            class="form-control" placeholder="Enter your user number" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label>Model Number</label> <input type="text" name="model_number" id="model_number4" class=
                            "form-control" placeholder="Enter model number">
                        </div>
                        <div class="form-group">
                            <label>Serial number</label> <input type="text" name="serial_number" id="serial_number4" class=
                            "form-control" placeholder="Enter model number">
                        </div>
                        <div class="form-group">
                            <label>Purchase Date</label> <input type="date" name="purchase_date" id="purchase_date4"
                            class="form-control" placeholder="Enter your purchase date">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label> <input type="text" name="phone_number" id="phone_number"
                            class="form-control" placeholder="Enter your phone number">
                        </div>
                        <div class="form-group">
                            <label>Service Required</label> <input type="text" name="service" id="service" class=
                            "form-control" placeholder="Enter service required">
                        </div>
                    
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submitForm" class="btn btn-outline-danger">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>

    $(document).ready(function (){
        $('.servicebtn').on('click',function(){
             $('#serviceModal').modal('show');

              $tr = $(this).closest('tr');
              var data =$tr.children("td").map(function(){
                return $(this).text();
                }).get();
                console.log(data);

    $('#product_registration_id4').val(data[0]);
    $('#user_name4').val(data[1]);
    $('#model_number4').val(data[2]);
    $('#serial_number4').val(data[3]);
    $('#purchase_date4').val(data[4]);
    $('#invoice_image4').val(data[5]);
    });
    });
    </script>

