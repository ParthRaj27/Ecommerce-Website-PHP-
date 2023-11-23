<?php
// phpinfo();
// Debugging: Print received data
echo "POST Data: ";
print_r($_POST);
echo "Files Data: ";
print_r($_FILES);


// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "wd_project";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Image Upload Configuration
$targetDir = "ProdCatFormImages/";
$targetFile = $targetDir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
    // Image uploaded successfully, now insert data into the database
    $productName = $_POST['productName'];
    $pricePerKg = $_POST['pricePerKg'];
    $color = $_POST['color'];
    $source = $_POST['source'];
    $thickness = $_POST['thickness'];
    $packagingSize = $_POST['packagingSize'];
    $material = $_POST['material'];
    $minOrderQuantity = $_POST['minOrderQuantity'];

    // SQL Insert Query
    $sql = "INSERT INTO plasticscrap (productName, pricePerKg, color, source, thickness, packagingSize, material, minOrderQuantity, imageFileName)
        VALUES ('$productName', '$pricePerKg', '$color', '$source', '$thickness', '$packagingSize', '$material', '$minOrderQuantity', '$targetFile')";

    if ($conn->query($sql) === TRUE) {
        // Record created successfully
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Sorry, there was an error uploading your file.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Product Details</h2>
                <form action="ProdCatForm.php" method="post" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="productName" name="productName" placeholder="Product Name" required>
                        <label for="productName">Product Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="pricePerKg" name="pricePerKg" placeholder="Price per KG" required>
                        <label for="pricePerKg">Price per KG</label>
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
                        <input type="text" class="form-control" id="thickness" name="thickness" placeholder="Thickness (mm/ cm)" required>
                        <label for="thickness">Thickness (mm/ cm)</label>
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
                        <input type="text" class="form-control" id="minOrderQuantity" name="minOrderQuantity" placeholder="Minimum Order Quantity" required>
                        <label for="minOrderQuantity">Minimum Order Quantity</label>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Product Image</label>
                        <input class="form-control" type="file" id="image" name="image" accept=".jpg" required> 
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
