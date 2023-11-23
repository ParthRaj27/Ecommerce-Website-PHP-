<?php
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "wd_project";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM plasticscrap";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plastic</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/messo.css">
    <style>
        .custom-card-img {
    max-width: 100%; /* Ensure the image doesn't exceed the parent element's width */
    height: 250px; /* Maintain the aspect ratio of the image */
}

        .custom-button {
    background-color: #00A699;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 10px; /* Adjust the margin-top as needed */
}

        .card {
            margin: 20px;
        }

        .card img {
            width: 100%;
        }

        .card-body {
            text-align: left;
        }
             
    .wrapper {
        max-width: 100%;
        background: rgb(255, 255, 255);
        height: 40px;
        text-align: right;
        overflow: hidden;
        margin-top: 20px; /* Add margin-top */
        margin-bottom: 20px; /* Add margin-bottom */
    }

    .marquee {
        background: rgb(255, 255, 255);
        white-space: nowrap;
        color: #00A699; /* Set text color to red */
        font-size: 25px; /* Set font size to 25px */
        animation: moveMarquee 4s linear infinite;
    }

    @keyframes moveMarquee {
        0% {
            transform: translateX(100%);
        }
        100% {
            transform: translateX(-100%);
        }
    }
    </style>
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
                <a href="about-us.php" style="text-decoration: none; color: black;">
                <p>About Us</p>
                </a>
            </div>

            <div class="becomeSupplierContainer">
                <a href="BecomeSupplier.php" style="text-decoration: none; color: black;">
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

    <!-- <nav> -->
        <!-- Navigation Menu Here -->
        <!-- <ul>
        <li>Plastic
                <div class="subMenu">
                    <div id="womenEthic" class="submenuList">
                        <ul>    
                            <li>PVC Plastic</li>
                            <li>LDPE Plastic</li>
                            <li>PP Plastic</li>
                            <li>Micron Based Classification</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>Metals
                <div class="subMenu">
                    <div id="womenWestern" class="submenuList">
                        <ul>    
                            <li>Iron</li>
                            <li>Steel</li>
                            <li>Brass</li>
                            <li>Copper</li>
                        </ul>
                    </div>

                </div>
            </li>
            <li>Paper
                <div class="subMenu">
                    <div id="men" class="submenuList">
                        <ul>    
                            <li>Newspaper</li>
                            <li>Magazine / Book</li>
                            <li>Recycled Paper</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>Wood
                <div class="subMenu">
                    <div id="kids" class="submenuList">
                        <ul>    
                            <li>Wooden Chips</li>
                            <li>Wooden Logs</li>
                            <li>Wooden Dust</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>Fabric
                <div class="subMenu">
                    <div id="HomeAndKitchen" class="submenuList">
                        <ul>    
                            <li>Hard Fiber</li>
                            <li>Soft Fiber</li>
                            <li>Packaging Material</li>
                            <li>Spools</li>
                            <li>Cordage</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>Ceramic
                <div class="subMenu">
                    <div id="beautyAndHealth" class="submenuList">
                        <ul>    
                            <li>Broken Ceramics</li>
                            <li>Dry Ceramic material</li>
                            <li>Waste Glaze</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>Glass
                <div class="subMenu">
                    <div id="JewelleryAndAccessories" class="submenuList">
                        <ul>    
                            <li>Size</li>
                            <li>Thickness</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>Electronics
                <div class="subMenu">
                    <div id="BagsFootWarId" class="submenuList">
                        <ul>    
                            <li>Battery</li>
                            <li>Computer</li>
                            <li>Leptop</li>
                            <li>Smart Phone</li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </nav> -->
    <div class="container">
    <div class="wrapper">
        <marquee behavior="scroll"><span class="marquee">Welcome To Plastic Shopping If Interested For Buy Then Contact Supplier </span></marquee>
    </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <?php
            // Loop through the database results and generate Bootstrap cards
            while ($row = $result->fetch_assoc()) {
            ?>
  <div class="col-md-4">
    <div class="card custom-card">
    <div class="card-header">
            <img src="<?php echo $row['imageFileName']; ?>" class="card-img-top custom-card-img" alt="Product Image">
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['productName']; ?></h5>
            <ul class="list-group">
                <li class="list-group-item"><strong>Price:</strong> <?php echo $row['pricePerKg']; ?> / KG</li>
                <li class="list-group-item"><strong>Color:</strong> <?php echo $row['color']; ?></li>
                <li class="list-group-item"><strong>Source:</strong> <?php echo $row['source']; ?></li>
                <li class="list-group-item"><strong>Thickness:</strong> <?php echo $row['thickness']; ?></li>
                <li class="list-group-item"><strong>Packaging Size:</strong> <?php echo $row['packagingSize']; ?></li>
                <li class="list-group-item"><strong>Material:</strong> <?php echo $row['material']; ?></li>
                <li class="list-group-item"><strong>Minimum Order Quantity:</strong> <?php echo $row['minOrderQuantity']; ?></li>
            </ul>
            <button class="custom-button">
    <a href="product_details_page/p_product_details.php?id=<?php echo $row['id']; ?>" style="text-decoration: none; color: white;">Explore Supplier</a>
</button>

        </div>
    </div>
</div>




            <?php
            }
            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>

    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
