<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="messo.css">
    <link rel="stylesheet" href="reg.css">
    

</head>
<body >
    <div>
        <img src="./img/header.png" alt="">
    </div>
    <!-- nav bar -->
    <header class="header">
        <div class="headerLeft">
            <!-- <div class="logoContainer">
                <img src="./img/meesho.png" />
            </div> -->

            <!--seach box-->
            <div class="searchInputContainer">
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
            </div>
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
                <a href="index.html" style="text-decoration: none; color: black;">
                <p>Home</p>
                </a>
            </div>

            <div class="becomeSupplierContainer">
                <a href="about-us/about-us.html" style="text-decoration: none; color: black;">
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

    <!--navigation-->


    <!-- nav end -->
    <div class="detailsecoton" style="background-color: #e2e7e6; width: 100%; padding-top: 40px;">
        <div class="uprod" >
            <h2>Enter Your Details Here</h2>
          
            
            <form action="submit_details.php" method="post">
            <div class="form-group">
                <br><br>
                <label for="formGroupExampleInput">Company Name :</label><br>
                <input type="text" class="form-control" class="formGroupExampleInput" placeholder="Enter here">
                <br><br>
                <label for="formGroupExampleInput">GSTIN / UDYAN No.(Enter Which is Apllicable) :</label><br>
                <input type="text" class="form-control" class="formGroupExampleInput" placeholder="Enter here"><br><br>
                <label for="formGroupExampleInput">Contact No:</label><br>
                <input type="number" class="form-control" class="formGroupExampleInput" placeholder="Enter here">
    <br><br>
                <label for="formGroupExampleInput">Email Id :</label><br>
                <input type="email" class="form-control" class="formGroupExampleInput" placeholder="Enter here"><br><br>
                <label for="formGroupExampleInput">Industry Type (Sector) :</label><br>
                <input type="text" class="form-control" class="formGroupExampleInput" placeholder="Enter here"><br><br>
                
                <label  for="">City</label>
                <div class="contain"  style="margin-left: 6%;  "> <select  style="  border: 2px #00A699 solid; "name=""  id="cat" >   
                    <option value="">--City--</option>
                    <option value="">Ahemdabad</option>
                    <option value="">Vadodara</option>
                    <option value="">Surat</option>
                    <option value="">Nadiad</option>
                    <option value="">Mehsnana</option>
                    <option value="">Gandhinagar</option>
                    
                    <option value="">Other</option>
                    </div>
                
                </select>

               
            </div>
            <br>
            <label for="">Company Type : </label>
           
            
            <div class="contain"  style="margin-left: 6%; "> <select  style="  border: 2px #00A699 solid; "  name=""  id="cat" >   
                <option value="">MSME</option>
                <option value="">NON MSME</option>
               
                
               
                </div>
            
            </select>

           
        </div>

           
        </div>
        <br>
        <button   onclick="alert('Your Details Are Submitted Succesfully !! \n We Will Verify Your Details And Send Password Within 48 working Hours!!')" 
        id ="bttn" style="margin-left: 45%; background-color: #00A699;margin-top: 10px; height: 30px;width: 150px; margin-bottom: 20px;border-radius: 4px;"><a  style="color: white; font-size: large;text-decoration: none;" href="index.html">Submit</a></button>
        

    </div>
    
   
</form>

</body>
</html>