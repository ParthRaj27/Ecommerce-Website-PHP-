<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start(); // Start the session

$servername = "localhost";
$username = "root";
$password = "";
$database = "wd_project";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user is logged in and has a valid supplier_id in the session
if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page or handle the case where the user is not logged in
    header("Location: login.php");
    exit();
}

$supplier_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['productName'];
    $pricePerKg = $_POST['pricePerKg'];
    $color = $_POST['color'];
    $source = $_POST['source'];
    $thickness = $_POST['thickness'];
    $packagingSize = $_POST['packagingSize'];
    $material = $_POST['material'];
    $minOrderQuantity = $_POST['minOrderQuantity'];
    $image = $_POST['imageFileName'];

    $sql = "INSERT INTO WoodScrap (supplier_id, productName, pricePerKg, color, source, thickness, packagingSize, material, minOrderQuantity, image) 
            VALUES ('$supplier_id', '$productName', '$pricePerKg', '$color', '$source', '$thickness', '$packagingSize', '$material', '$minOrderQuantity', '$image')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
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
            <main>
            <div class="container mt-5">
    <h2 class="mb-4">Wood Scrap Form</h2>
    <form action="WoodScrapForm.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="productName" name="productName" placeholder="Product Name" required>
                    <label for="productName">Product Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="pricePerKg" name="pricePerKg" placeholder="Price Per Kg" required>
                    <label for="pricePerKg">Price Per Kg</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="color" name="color" placeholder="Color" required>
                    <label for="color">Color</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="source" name="source" placeholder="Source" required>
                    <label for="source">Source</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="thickness" name="thickness" placeholder="Thickness" required>
                    <label for="thickness">Thickness</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="packagingSize" name="packagingSize" placeholder="Packaging Size" required>
                    <label for="packagingSize">Packaging Size</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="material" name="material" placeholder="Material" required>
                    <label for="material">Material</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="minOrderQuantity" name="minOrderQuantity" placeholder="Min Order Quantity" required>
                    <label for="minOrderQuantity">Min Order Quantity</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="file" class="form-control" id="imageFileName" name="imageFileName" placeholder="Image File Name" required>
                    <label for="imageFileName">Image File Name</label>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
