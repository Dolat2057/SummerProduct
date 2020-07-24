<?php require_once('./common/dbconnection.php');?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top sknav" >
  <a class="navbar-brand" href="index.php">
    <img class="navbar-brand-logo" src="images/logo.png" alt="Summerking">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="products.php" id="navbarDropdown" role="button" data-toggle="dropdown"      aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="products.php?product_type=Ceiling%20Fan">Fans</a>
          <a class="dropdown-item" href="products.php?product_type=multipurpose%20fan">Multipurpose Fan</a>
          <a class="dropdown-item" href="products.php?product_type=Plastic Air%20Coolers">Coolers</a>
          <a class="dropdown-item" href="products.php?product_type=Water%20Heater">Water Heater</a>
          <a class="dropdown-item" href="products.php?product_type=Immersion%20Rod">Immersion Rod</a>
          <a class="dropdown-item" href="products.php?product_type=Room%20Heaters">Room Heaters</a>
          <a class="dropdown-item" href="products.php?product_type=Home%20Appliances">Home Appliances</a>
          <a class="dropdown-item" href="products.php?product_type=Accessories">Accessories</a>
        </div>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="products.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Downloads
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./images/downloads/products2020.pdf" download>Product Catalogue</a>
          <a class="dropdown-item" href="#">Others</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="products.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contact
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="contact.php" >Contact Us</a>
          <a class="dropdown-item" href="./users/customer/login.php">Customer Portal</a>
        </div>
      </li>
      <li>
        <div class="search-container">
          <form action="./products.php?id=<?php echo $row['product_type'];?>" method="GET">
            <input  type="text" placeholder="Search.." name="search" style="height:36px;">
            <button class="btn btn-outline-danger" type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </li>
    </ul>
    <a href="tel:123" class="btn btn-danger my-2 my-sm-0" > Call Now </a>
  </div>
</nav>
<div class="extra-space"></div>