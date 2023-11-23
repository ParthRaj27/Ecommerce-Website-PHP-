<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .marquee {
            background: rgb(255, 255, 255);
            white-space: nowrap;
            color: red;
            font-size: 25px;
            animation: moveMarquee 10s linear infinite;
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
            <div class="col-md-12">
                <div class="marquee">Welcome To Product Upload Page</div>
            </div>
        </div>
        <h2 class="mb-4">Product Form</h2>
        <form action="/WD/supplier/ProdUp.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
                        <label for="category">Industry:</label>
                        <select class="form-control" id="category" name="category">
                            <option value="">--Select Industry--</option>
                            <option value="Plastic">Plastic</option>
                            <option value="Rubber">Rubber</option>
                            <option value="Wood">Wood</option>
                            <!-- Add more options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product_name">Product Name:</label>
                        <input type="text" class="form-control" id="product_name" name="product_name"
                            placeholder="Enter Product Name Here">
                    </div>
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter City Here">
                    </div>
                    <div class="form-group">
                        <label for="min_order_quantity">Minimum Order Quantity:</label>
                        <input type="text" class="form-control" id="min_order_quantity" name="min_order_quantity"
                            placeholder="Enter Minimum Order Quantity Here">
                    </div>
                    <div class="form-group">
                        <label for="scrap_source">Scrap Source:</label>
                        <input type="text" class="form-control" id="scrap_source" name="scrap_source"
                            placeholder="Enter Scrap Source Here">
                    </div>
                    <div class="form-group">
                        <label for="packaging_size">Packaging Size:</label>
                        <input type="text" class="form-control" id="packaging_size" name="packaging_size"
                            placeholder="Enter Packaging Size Here">
                    </div>
                    <div class="form-group">
                        <label for="material">Material:</label>
                        <input type="text" class="form-control" id="material" name="material"
                            placeholder="Enter Material Here">
                    </div>
                    <div class="form-group">
                        <label for="thickness">Thickness(mm/cm):</label>
                        <input type="text" class="form-control" id="thickness" name="thickness"
                            placeholder="Enter Thickness Here">
                    </div>
                    <div class="form-group">
                        <label for="color">Color:</label>
                        <input type="text" class="form-control" id="color" name="color"
                            placeholder="Enter Color Here">
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" id="price" name="price"
                            placeholder="Enter Price Here">
                    </div>
                    <div class="form-group">
                        <label for="delivery_by">Delivery By:</label>
                        <select class="form-control" id="delivery_by" name="delivery_by">
                            <option value="">Delivery By</option>
                            <option value="Buyer">Buyer</option>
                            <option value="Seller">YOU(Seller)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product_info">Product Info:</label>
                        <textarea class="form-control" id="product_info" name="product_info"
                            placeholder="Enter Product Info Here"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="product_image">Product Image:</label>
                        <input type="file" class="form-control-file" id="product_image" name="product_image">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
