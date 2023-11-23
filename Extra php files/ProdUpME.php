<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MSME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- styles.css -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="messo.css">

</head>

<body>
    <div>
        <img src="./img/header.png" alt="">
    </div>
        <br>
    <header class="header">
        <div class="headerLeft">
            <!-- <div class="logoContainer">
                <img src="./img/meesho.png" />
            </div> -->

            <!--seach box-->
            <!-- <div class="searchInputContainer">
                <div class="searchIcon">
                    <img src="./img/search.png" />
                </div>
                <form action="" id="inputForm">
                    <input type="text" placeholder="Plastic ,Industrial Waste or Search by Product Code" class="inputSearch" />
                </form>
                <div class="inputCloseSearch">
                    <i class="fa-solid fa-xmark" id="closeSearch"></i>
                </div>

                <div class="searchRecentModal">
                    <h3>Recent Searches</h3>
                    <div class="listofRecent">

                    </div>
                </div>
            </div> -->
        </div>

        <div class="headerRight">
            <!-- <div class="downloadContainer">
                <div class="mobileIcon">
                    <img src="./img/mobile.png" />
                </div>
                <p>Download App</p>

                <div class="downloadHoverBtnContainer">
                    <h3>Download From</h3>

                    <a href="" class="downloadBtn">
                        <img src="https://images.meesho.com/images/pow/playstore-icon-big.webp" />
                    </a>
                    <a href="" class="downloadBtn">
                        <img src="https://images.meesho.com/images/pow/appstore-icon-big.webp" />
                    </a>
                </div>
            </div> -->

            <div class="becomeSupplierContainer">
                <a href="index.php" style="text-decoration: none; color: black;">
                <p>Home</p>
                </a>
            </div>

            <div class="becomeSupplierContainer">
                <a href="about-us/about-us.php" style="text-decoration: none; color: black;">
                <p>About Us</p>
                </a>
            </div>

            <div class="becomeSupplierContainer">
                <a href="/" style="text-decoration: none; color: black;">
                <p>Become a Supplier</p>
                </a>
            </div>

            <div class="profileAndCart">
                <div class="profileContainer">
                    <div class="profileIcon">
                        <img src="./img/user.png" />
                    </div>
                    <a href="/" style="text-decoration: none; color: black;">
                        <p>Profile</p>
                        </a>
                    
                </div>

                <div class="CartContainer">
                    <div class="CartIcon">
                        <img src="./img/cart.png" />
                    </div>
                    <a href="/" style="text-decoration: none; color: black;">
                        <p>My Orders</p>
                        </a>
                    
                </div>
            </div>
        </div>
    </header>
    <!-- <a href="/supplier/supplier.php"><button class="btn btn-primary">click here to suplier admin panel</button></a> -->
  <div class="container"> 
    <h1>Upload Product Details Here</h1>
 <form>
     <div class="form-group">
       <label for="exampleInputPassword1">Product Type/material</label>
       <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Type/material">
     </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Product Color</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Color">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Product ThickNess</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product ThickNess">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Minimum Order Quantity</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Minimum Order Quantity">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Product Packaging Size</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Packaging Size">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Upload Material/Product Photo</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Packaging Size">
  </div>
  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/supplier/supplier.php"><button class="btn btn-primary">click here to suplier admin panel</button></a>
</form></div>
    </body>

</html>
