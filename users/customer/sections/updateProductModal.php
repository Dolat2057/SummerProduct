
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden=
    "true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Product </h5><button type="button" class=
                    "close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form action="./phpActions/editRecord.php" method="post">
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <label>Product Registration Id</label> <input type="text" name="product_registration_id" id=
                            "product_registration_id3"
                            class="form-control" placeholder="Enter your registration number" readonly>
                        </div>
                        <div class="form-group">
                            <label>User Name</label> <input type="text" name="user_name" id= "user_name3"
                            class="form-control" placeholder="Enter your user number" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label>Model Number</label> <input type="text" name="model_number" id="model_number3" class=
                            "form-control" placeholder="Enter model number">
                        </div>
                        <div class="form-group">
                            <label>Serial number</label> <input type="text" name="serial_number" id="serial_number3" class=
                            "form-control" placeholder="Enter model number">
                        </div>
                        <div class="form-group">
                            <label>Purchase Date</label> <input type="date" name="purchase_date" id="purchase_date3"
                            class="form-control" placeholder="Enter your purchase date">
                        </div>
                        <div class="form-group">
                            <div class="image-upload-wrap">
                               
                                <input type="file" name="invoice_image" class="btn btn-outline-danger file-upload-input" id="invoice_image">
                            </div>
                        </div>
                    
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-outline-danger">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>

    $(document).ready(function (){
        $('.editbtn').on('click',function(){
             $('#editmodal').modal('show');

              $tr = $(this).closest('tr');
              var data =$tr.children("td").map(function(){
                return $(this).text();
                }).get();
                console.log(data);

    $('#product_registration_id3').val(data[0]);
    $('#user_name3').val(data[1]);
    $('#model_number3').val(data[2]);
    $('#serial_number3').val(data[3]);
    $('#purchase_date3').val(data[4]);
    
    });
    });
    </script>

