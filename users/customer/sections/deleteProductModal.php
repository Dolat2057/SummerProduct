


<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden=
    "true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirm Deletion ?</h5><button type="button" class=
                    "close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form action="./phpActions/deleteRecord.php" method="post">
                    <div class="modal-body">
                    <div class="form-group">
                             <input type="hidden" name="product_registration_id" id="product_registration_id2" >
                
                        </div>
                        <div class="form-group">
                            <label>Serial Number</label> <input type="text" name="serialnumber" id="serialnumber2" 
                            class="form-control" placeholder="Enter your serial number" readonly>
                        </div>
                        <div class="form-group">
                            <label>Purchase Date</label> <input type="date" name="purchasedate" id="purchasedate2"
                            class="form-control" placeholder="Enter your purchase date" readonly>
                        </div>
                        <div class="form-group">
                            <label>Modal Number</label> <input type="text" name="model_number" id="model_number2" class=
                            "form-control" placeholder="Enter modal number" readonly>
                        </div>
                        <div class="form-group">
                            <div class="image-upload-wrap">
                               
                                <input type="file" name="productimage" class="btn btn-outline-danger file-upload-input" id="productimage2" readonly>
                            </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="deletedata" class="btn btn-outline-danger">Delete Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>

    $(document).ready(function (){
        $('.deletebtn').on('click',function(){
             $('#deletemodal').modal('show');
          $tr = $(this).closest('tr');
              var data =$tr.children("td").map(function(){
                return $(this).text();
                }).get();
                console.log(data);
    $('#product_registration_id2').val(data[0]);            
    $('#serialnumber2').val(data[3]);
    $('#purchasedate2').val(data[4]);
    $('#model_number2').val(data[2]);
    $('#productimage2').val(data[0]); 

        
    });
    });
    </script>

