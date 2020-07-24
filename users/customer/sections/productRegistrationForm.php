<div id="product-registration-form" class="section-card">

     <h4>Register Your Product </h4>

    <form action="../phpActions/addRecord.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="product_registration_id">Product Registration Id</label>
    <input type="text" class="form-control" name="product_registration_id" id="product_registration_id" Required>
        </div>
        <div class="form-group">
            <label for="user_name">User Name</label> 
            <input type="date" class="form-control" name="user_name"
            id="user_name">
        </div>
      
        <div class="form-group">
            <label for="model_number">Model Number</label> <input type="text" class="form-control" name="model_number"
            id="model_number">
        </div>
        <div class="form-group">
            <label for="serial_number">Serial Number</label> <input type="text" class="form-control" name=
            "serial_number" id="serial_number">
        </div>
        <div class="form-group">
            <label for="purchase_date">Purchase_date</label> 
            <input type="date" class="form-control" name="purchase_date"
            id="purchase_date">
        </div>
        <div class="form-group">
            <div class="image-upload-wrap">
                <input type="file" name="invoice_image" class="file-upload-input" id="invoice_image">
            </div>
        </div>
        

        <button type="submit" class="btn btn-danger" name="submit-addRecord">Submit</button>
    </form>

</div>
