<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <input type="text" class="form-control" name="serial_number" id="serial_number" >
        </div>

        <div class="form-group">
            <label for="OR">OR</label> 
        </div>
        <div class="form-group">
            <label for="qrCodeScanner">Scan Qr Code</label> <br>
            <input type=text size=16 placeholder="Click to Scan" class=qrcode-text>
            <label class=qrcode-text-btn>
                <input type="file" 
                        accept="image/*" 
                        capture="environment" 
                        name="serial_number"
                        onchange="openQRCamera(this);"
                        onclick="return showQRIntro();"
                        tabindex=-1>
            </label>
        </div>

        <div class="form-group">
            <label for="purchase_date">Purchase Date</label>
            <input type="date" class="form-control" name="purchase_date" id="purchase_date" Required>
        </div>
      
        <div class="form-group">
            <label>Invoice Image</label>
             <div class="form-group">
                       <input class="form-control" type="file" name="file">
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


<style>
         

body, input {font-size:14pt}
input, label {vertical-align:middle}
.qrcode-text {padding-right:1.7em; margin-right:0}
.qrcode-text-btn {display:inline-block; background:url(//dab1nmslvvntp.cloudfront.net/wp-content/uploads/2017/07/1499401426qr_icon.svg) 50% 50% no-repeat; height:1em; width:1.7em; margin-left:-1.7em; cursor:pointer}
.qrcode-text-btn > input[type=file] {position:absolute; overflow:hidden; width:1px; height:1px; opacity:0}


        </style>


