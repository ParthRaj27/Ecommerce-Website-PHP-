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
    // Sanitize user input
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $productName = mysqli_real_escape_string($conn, $_POST['product_name']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $minOrderQuantity = mysqli_real_escape_string($conn, $_POST['min_order_quantity']);
    $scrapSource = mysqli_real_escape_string($conn, $_POST['scrap_source']);
    $packagingSize = mysqli_real_escape_string($conn, $_POST['packaging_size']);
    $material = mysqli_real_escape_string($conn, $_POST['material']);
    $thickness = mysqli_real_escape_string($conn, $_POST['thickness']);
    $color = mysqli_real_escape_string($conn, $_POST['color']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $deliveryBy = mysqli_real_escape_string($conn, $_POST['delivery_by']);
    $productInfo = mysqli_real_escape_string($conn, $_POST['product_info']);

    // File upload handling
    $targetDirectory = __DIR__ . DIRECTORY_SEPARATOR . "prod_image" . DIRECTORY_SEPARATOR;
    $targetFile = $targetDirectory . basename($_FILES["product_image"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check file size (limit to 5MB)
    if ($_FILES["product_image"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats (you can modify this as needed)
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk) {
        if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $targetFile)) {
            // SQL query with correct column names including the file path and other_details
            $sql = "INSERT INTO products (industry, product_name, city, min_order_quantity, scrap_source, packaging_size, material, thickness, color, price, delivery_by, other_details, product_image_path) 
                    VALUES ('$category', '$productName', '$city', '$minOrderQuantity', '$scrapSource', '$packagingSize', '$material', '$thickness', '$color', '$price', '$deliveryBy', '$productInfo', '$targetFile')";

            if ($conn->query($sql) === TRUE) {
                // Successfully inserted into the database
                echo "success";
            } else {
                // Error in SQL query
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            // Error uploading the file
            echo "Error uploading the file.";
        }
    } else {
        // File upload error
        echo "File upload error.";
    }
} else {
    // Missing POST data error
    echo "Error: Missing POST data.";
}

// Close the database connection
$conn->close();
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "wd_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT companyName, email FROM suppliers WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($companyName, $email);
$stmt->fetch();
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Supplier</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Supplier Panel</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="Suppindex.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Product Details</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Products
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/WD/supplier/SupProdView.php">View Products</a>
                                    <a class="nav-link" href="/WD/supplier/ProdUp.php">Create Product</a>
                                    <a class="nav-link" href="/WD/supplier/PlasticScrapForm.php">Create Plastic Scrap</a>
                                    <a class="nav-link" href="/WD/supplier/CeraScrapForm.php">Create Ceramic Scrap</a>
                                    <a class="nav-link" href="/WD/supplier/ElectroScrapForm.php">Create Electronics Scrap</a>
                                    <a class="nav-link" href="/WD/supplier/FabricScrapForm.php">Create Fabric Scrap</a>
                                    <a class="nav-link" href="/WD/supplier/GlassScrapForm.php">Create Glass Scrap</a>
                                    <a class="nav-link" href="/WD/supplier/MetalsScrapForm.php">Create Metals Scrap</a>
                                    <a class="nav-link" href="/WD/supplier/PaperScrapForm.php">Create papers Scrap</a>
                                    <a class="nav-link" href="/WD/supplier/WoodScrapForm.php">Create Woods Scrap</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Product Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Received Orders
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <!-- <a class="nav-link" href="login.php">Chart</a>
                                            <a class="nav-link" href="register.php">Graphs</a>
                                            <a class="nav-link" href="password.php">DataTable</a> -->
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Something Else
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.php">Update</a>
                                            <a class="nav-link" href="404.php">Delete</a>
                                            <a class="nav-link" href="500.php">Etc.</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
    <div class="small">Logged in as:</div>
    <?php echo $email; ?>
</div>

                </nav>
            </div>
            <div id="layoutSidenav_content">
            <div>
        <img src="./img/header.png" alt="">
    </div>
    <div class="container mt-5">
    <div class="row">
    <div class="container">
    <div class="wrapper">
        <marquee behavior="scroll"><span class="marquee">Welcome To Product Upload page </span></marquee>
    </div>
    </div>
        </div>
        <h2 class="mb-4">Product Form</h2>
        <form action="/WD/supplier/ProdUp.php" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <select class="form-control" id="category" name="category" required>
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
                    <!-- Add more options here -->
                </select>
                <label for="category">Industry:</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="product_name" name="product_name"
                    placeholder="Enter Product Name Here" required>
                <label for="product_name">Product Name:</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter City Here" required>
                <label for="city">City:</label>
            </div>

            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="min_order_quantity" name="min_order_quantity"
                    placeholder="Enter Minimum Order Quantity Here" required>
                <label for="min_order_quantity">Minimum Order Quantity:</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="scrap_source" name="scrap_source"
                    placeholder="Enter Scrap Source Here" required>
                <label for="scrap_source">Scrap Source:</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="packaging_size" name="packaging_size"
                    placeholder="Enter Packaging Size Here" required>
                <label for="packaging_size">Packaging Size:</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="material" name="material"
                    placeholder="Enter Material Here" required>
                <label for="material">Material:</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="thickness" name="thickness"
                    placeholder="Enter Thickness Here" required>
                <label for="thickness">Thickness(mm/cm):</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="color" name="color" placeholder="Enter Color Here"
                    required>
                <label for="color">Color:</label>
            </div>

            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price Here"
                    required>
                <label for="price">Price:</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-control" id="delivery_by" name="delivery_by" required>
                    <option value="">Delivery By</option>
                    <option value="Buyer">Buyer</option>
                    <option value="Seller">YOU(Seller)</option>
                </select>
                <label for="delivery_by">Delivery By:</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" id="product_info" name="product_info"
                    placeholder="Enter Product Info Here" required></textarea>
                <label for="product_info">Product Info:</label>
            </div>

            <div class="form-floating mb-3">
                <input type="file" class="form-control" id="product_image" name="product_image" required>
                <label for="product_image">Product Image:</label>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
