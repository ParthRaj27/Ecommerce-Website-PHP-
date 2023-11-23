<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>404 Error - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="layoutError">
            <div id="layoutError_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mt-4">
                                    <img class="mb-4 img-error" src="assets/img/error-404-monochrome.svg" />
                                    <p class="lead">This requested URL was not found on this server.</p>
                                    <a href="index.html">
                                        <i class="fas fa-arrow-left me-1"></i>
                                        Return to Dashboard
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutError_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

<!-- sasta product upload page -->
<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wd_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the required POST variables are set
if(isset($_POST['category'], $_POST['product_name'], $_POST['city'], $_POST['min_order_quantity'], $_POST['scrap_source'], $_POST['packaging_size'], $_POST['material'], $_POST['thickness'], $_POST['color'], $_POST['price'], $_POST['delivery_by'], $_POST['product_info'])) {
    
    $category = $_POST['category'];
    $productName = $_POST['product_name'];
    $city = $_POST['city'];
    $minOrderQuantity = $_POST['min_order_quantity'];
    $scrapSource = $_POST['scrap_source'];
    $packagingSize = $_POST['packaging_size'];
    $material = $_POST['material'];
    $thickness = $_POST['thickness'];
    $color = $_POST['color'];
    $price = $_POST['price'];
    $deliveryBy = $_POST['delivery_by'];
    $productInfo = $_POST['product_info'];

    // SQL query with correct column names
    $sql = "INSERT INTO products (industry, product_name, city, min_order_quantity, scrap_source, packaging_size, material, thickness, color, price, delivery_by, other_details) 
            VALUES ('$category', '$productName', '$city', '$minOrderQuantity', '$scrapSource', '$packagingSize', '$material', '$thickness', '$color', '$price', '$deliveryBy', '$productInfo')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} else {
    echo "Error: Missing POST data.";
}

// Close the database connection
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="css/messo.css">
    <link rel="stylesheet" href="css/upload.css">    
    <head>
    <style>
        
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
        color: red; /* Set text color to red */
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
<body >
    <div>
        <img src="./img/header.png" alt="">
    </div>
    <!-- nav bar -->
    <div class="container">
    <div class="wrapper">
        <marquee behavior="scroll"><span class="marquee">Welcome To Product Upload page </span></marquee>
    </div>
    </div>

    <!--navigation-->


    <!-- nav end -->
    <div class="detailsecoton" style="background-color: #e2e7e6; width: 100%; padding-top: 40px;">
    <form id="productForm" action="WD/supplier/ProdUp.php" method="post">
    <div class="uprod">
        <h2>Add Product Details Here</h2>
        <div class="contain">
            <select name="category" id="cat">
                <option value="">--Select Industry--</option>
                <option value="Plastic">Plastic</option>
                <option value="Rubber">Rubber</option>
                <option value="Wood">Wood</option>
                <option value="Metal">Metal</option>
                <option value="DrugsPharma">Drugs & Pharma</option>
                <option value="Paper">Paper</option>
                <option value="Fabric">Fabric</option>
                <option value="Electronics">Electronics</option>
                <option value="Other">Other</option>
            </select>
            <input type="text" id="proname" name="product_name" placeholder="Enter Product Name Here">

            <div class="form-group">
                <br><br>
                <label for="city">City :</label><br>
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter here">
                <br><br>
                <label for="minOrderQty">Minimum Order Quantity :</label><br>
                <input type="text" class="form-control" id="minOrderQty" name="min_order_quantity" placeholder="Enter here"><br><br>
                <label for="scrapSource">Scrap Source :</label><br>
                <input type="text" class="form-control" id="scrapSource" name="scrap_source" placeholder="Enter here">
                <br><br>
                <label for="packagingSize">Packaging Size :</label><br>
                <input type="text" class="form-control" id="packagingSize" name="packaging_size" placeholder="Enter here"><br><br>
                <label for="material">Material :</label><br>
                <input type="text" class="form-control" id="material" name="material" placeholder="Enter here"><br><br>
                <label for="thickness">Thickness(mm/ cm) : </label><br>
                <input type="text" class="form-control" id="thickness" name="thickness" placeholder="Enter here"><br><br>
                <label for="color">Colour :</label><br>
                <input type="text" class="form-control" id="color" name="color" placeholder="Enter here"><br>
                <br>
                <label for="price">Price :</label><br>
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter here"><br><br>
                <label for="productImage">Product Image</label><br>
                <input type="file" id="productImage" name="product_image">
                <br><br>
                <select name="delivery_by" id="deliveryBy" style="margin-left: 20%; font-size: medium; height: 30px;">
                    <option value="">Delivery    By</option>
                    <option value="Buyer">Buyer</option>
                    <option value="Seller">YOU(Seller)</option>
                </select>
            </div>
            <h2 style="margin-left: 20%; text-align: left;">Enter Other Details About Product Here</h2>
            <div>
                <textarea name="product_info" id="pinfo" style="margin-left: 18%; height: 250px;width: 500px;border: 1px black solid;"></textarea>
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<!-- <button   onclick="alert('Product Upload Succesfully!!')" 
id ="bttn" style="margin-left: 37%; background-color: #00A699;margin-top: 10px; height: 30px;width: 150px; margin-bottom: 20px;border-radius: 4px;"><a  style="color: white; font-size: large;text-decoration: none;" href="index.html">Submit</a></button> -->


</body>
</html>