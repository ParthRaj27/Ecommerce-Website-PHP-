<!-- supplier.produp.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
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
<body>
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

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
