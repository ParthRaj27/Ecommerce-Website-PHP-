<!-- w_product_details.php -->
<?php
// Database Connection (same as in index.php)
$servername = "localhost";
$username = "root";
$password = "";
$database = "wd_project";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve product ID from the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Query to retrieve product details based on $id
    $productQuery = "SELECT * FROM glassscrap WHERE id = $id";
    $productResult = $conn->query($productQuery);

    if ($productResult && $productResult->num_rows > 0) {
        $productDetails = $productResult->fetch_assoc();

        // Get supplier ID from product details
        $supplierId = $productDetails['supplier_id'];

        // Query to retrieve supplier details based on $supplierId
        $supplierQuery = "SELECT * FROM suppliers WHERE id = $supplierId";
        $supplierResult = $conn->query($supplierQuery);

        if ($supplierResult && $supplierResult->num_rows > 0) {
            $supplierDetails = $supplierResult->fetch_assoc();
        } else {
            // Handle the case where supplier ID is not found
            echo "Supplier not found for this product.";
        }
    } else {
        // Handle the case where the product ID is not found
        echo "Product not found.";
    }
} else {
    // Handle invalid or missing product ID
    echo "Invalid product ID.";
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/messo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="messoo.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            margin-bottom: 20px;
        }

        .card-img-top {
            max-height: 300px;
            object-fit: cover;
        }

        .card-title {
            font-size: 24px;
        }

        .card-text {
            font-size: 16px;
        }

        .amount {
            font-weight: bold;
            color: green;
        }

        .contact-button {
            text-align: right;
        }
    </style> <!-- Include your CSS and Bootstrap links here -->
</head>

<body>
<div>
        <img src="./img/header.png" alt="">
    </div>        <br>
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
                <a href="http://localhost/WD/index.php" style="text-decoration: none; color: black;">
                <p>Home</p>
                </a>
            </div>

            <div class="becomeSupplierContainer">
                <a href="http://localhost/WD/about-us.php" style="text-decoration: none; color: black;">
                <p>About Us</p>
                </a>
            </div>

            <div class="becomeSupplierContainer">
                <a href="http://localhost/WD/BecomeSupplier.php" style="text-decoration: none; color: black;">
                <p>Become a Supplier</p>
                </a>
            </div>

            <div class="profileAndCart">
                
            </div>
        </div>
    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
            <div class="card">
    <!-- Product Details -->
    <img class="card-img-top" src="<?php echo $productDetails['imageFileName']; ?>" alt="Product Image">
    <div class="card-body">
        <h2 class="card-title"><?php echo $productDetails['productName']; ?></h2>
        <p class="card-text amount"><?php echo $productDetails['pricePerKg']; ?>₹/KG</p>
        <hr>
        <p class="card-text">Color: <?php echo $productDetails['color']; ?></p>
        <p class="card-text">Scrap Source: <?php echo $productDetails['source']; ?></p>
        <p class="card-text">Thickness(mm/cm): <?php echo $productDetails['thickness']; ?> mm</p>
        <p class="card-text">Packaging Size: <?php echo $productDetails['packagingSize']; ?> Kg</p>
        <p class="card-text">Material: <?php echo $productDetails['material']; ?></p>
        <p class="card-text">Minimum Order Quantity: <?php echo $productDetails['minOrderQuantity']; ?> tonne</p>
    </div>
</div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <!-- Supplier Details -->
                    
<div class="card">
    <!-- Supplier Details -->
    <div class="card-body">
        <h1 class="card-title">Seller Contact Details</h1>
        <h2 class="card-subtitle mb-2"><?php echo $supplierDetails['companyName']; ?></h2>
        <p class="card-text"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp; <?php echo $supplierDetails['city']; ?></p>
        <p class="card-text"><a href="<?php echo $supplierDetails['website']; ?>"><i class="fa fa-globe" aria-hidden="true"></i> &nbsp;&nbsp; <?php echo $supplierDetails['website']; ?></a></p>
        <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;&nbsp; <?php echo $supplierDetails['contactNo']; ?></p>
        <!-- Add more fields from the suppliers table as needed -->
        <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;&nbsp; <?php echo $supplierDetails['email']; ?></p>
        <p class="card-text"><i class="fa fa-id-card" aria-hidden="true"></i> &nbsp;&nbsp; GSTIN: <?php echo $supplierDetails['gstin']; ?></p>
        <p class="card-text"><i class="fa fa-industry" aria-hidden="true"></i> &nbsp;&nbsp; Industry Type: <?php echo $supplierDetails['industryType']; ?></p>
        <p class="card-text"><i class="fa fa-building" aria-hidden="true"></i> &nbsp;&nbsp; Company Type: <?php echo $supplierDetails['companyType']; ?></p>
        <!-- ... (display other fields as needed) ... -->
        <div class="contact-button">
            <a href="#" class="btn btn-primary">Contact Supplier</a>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
