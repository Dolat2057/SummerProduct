<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Register Product</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">

        <div id="product-registration-form" class="section-card">

    

    <form action="./phpActions/addRecord.php" method="POST" enctype="multipart/form-data">
    
        
        <div class="form-group">
            <label for="model_number">Model Number</label>
            
            <select id = "model_number" name="model_number" class="form-control">
               <?php 
               $sql= "select * from skproducts";
               $result = mysqli_query($conn , $sql);
                   while($row = mysqli_fetch_assoc($result)){
               
               
              echo" <option>".$row["model_number"]."</option>";
                   
                    } ?>
             </select>
        </div>
        <div class="form-group">
            <label for="serial_number">Serial Number</label>
            <input type="text" class="form-control" name="serial_number" id="serial_number" Required>
        </div>
        <div class="form-group">
            <label for="purchase_date">Purchase Date</label>
            <input type="date" class="form-control" name="purchase_date" id="purchase_date" Required>
        </div>
      
        <div class="form-group">
            <label>Invoice Image</label>
            <div class="image-upload-wrap">
                <input type="file" name="file" class="file-upload-input" id="invoice_image">
            </div>
        </div>
</div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-danger" name="submit-addRecord">Submit</button>
    </form>
      </div>
    </div>
  </div>
</div>


