<?php require_once('./common/dbconnection.php')?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    <title>Contact Us</title>
  </head>

  <body>

    <?php include("./sections/nav.php");?>
    <img class="d-block w-100" src="images/website/slider2.jpg"alt="Banner Slide">
      
        
    <div class="container" style="padding-top:10px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <?php 
            require_once("./sections/heading.php");
            getSectionHeading("Contact Us");
          ?>
        </div>
      </div>
        
      <div class="row">
        <div class="col-12">
          <p>We are always here to help. If your have requirements/queries about our services; fill up the contact form
            below and we'll do our best to reply within 24 hours Alternatively simply pickup the phone and give us a
            call.</p>
          <hr />
        </div>
      </div>
    </div>
 

    <section class="form-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">

            <form action="" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="Full name *" name="full_name">

                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" placeholder="Email Address *" name="email">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="number" class="form-control" placeholder="Contact Number *" name="contact">

                </div>
                <div class="form-group col-md-6">
                  <select class="form-control"name="state">
                    <option selected>State</option>
                    <option>Delhi</option>
                    <option>UttarPradesh</option>
                    <option>Madhya Pradesh</option>
                    <option>Rajasthan</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <input type="text" class="form-control" placeholder="Subject *" name="subject">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Insert Your Message Here</label>
                    <textarea class="form-control" rows="4" name="message" >
                    </textarea>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12 text-center">
                  <a href="./index.php"><input type="submit" class="btn btn-outline-danger" value="Submit"name="submit"></a>
                </div>
              </div>

            </form>
          

          </div>
          <div class="col-md-6 address">
            <h5>Call Us / WhatsApp</h5>
            <p>
              <a href="tel:0120-4239758"><i style="font-size:18px" class="fa">&#xf095; </i> 0120-4239758 </a><br>
            </p>
            <h5>Email / Website</h5>
            <p>
              <a href="#"><i style="font-size:18px;" class="fa">&#xf268;</i> info@summerkingindia.com </a><br>
              <a href="http://www.summerkingindia.com/"><i style="font-size:18px;" class="fa">&#xf268;</i> www.summerking.com</a>
            </p>
            <h5>Working hours</h5>
            <p>
              Mon - Fri : 9am - 6pm(IST)
            </p>
            <h5>Address</h5>
            <p>
              Summerking Electricals (P) Ltd.
              E-183, Kavi Nagar Industrial Area, Ghaziabad, Uttar Pradesh 201002
            </p>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.958872592181!2d77.45433711456033!3d28.660950089546077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1efc0000001%3A0xbf4210d068a142f9!2sSummerking%20Electricals%20(P)%20Ltd.!5e0!3m2!1sen!2sin!4v1588395495914!5m2!1sen!2sin" 
          width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>
      </div>
    </section>
    <?php include("./sections/did-you-know.php");?>
    <?php include("./sections/footer.php");?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.4.1.js" ></script>
    <script src="./js/popper.min.js" ></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>

<?php
  if(isset($_POST['submit']))
  {
    $full_name= ($_POST['full_name']);
    $email= ($_POST['email']);
    $contact= ($_POST['contact']);
    $state= ($_POST['state']);
    $subject= ($_POST['subject']);
    $message= ($_POST['message']);

    $sql = "INSERT INTO contactus (full_name,email,contact,state,subject,message)
            VALUES('$full_name', '$email', '$contact','$state','$subject','$message')";
    $result = mysqli_query($conn , $sql);
    if($result)
    {
    
     echo "<script>alert('Your query is registered successfully');</script>";
 
    }
    else
    {
     
      echo "Query Registration failed ! try again";
  
    }
    
  
  }



?>
<script type="text/javascript">
  $('.section-heading').hover(function(){
      $(this).toggleClass("animate__animated animate__pulse");
      }); 
</script>
<?php if($conn){$conn -> close();}?>






