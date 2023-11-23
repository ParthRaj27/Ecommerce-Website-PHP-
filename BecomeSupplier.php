<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_start();
session_start();

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user inputs
    $companyName = mysqli_real_escape_string($conn, $_POST['companyName']);
    $gstin = mysqli_real_escape_string($conn, $_POST['gstin']);
    $contactNo = mysqli_real_escape_string($conn, $_POST['contactNo']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $industryType = mysqli_real_escape_string($conn, $_POST['industryType']);
    $city = mysqli_real_escape_string($conn, $_POST['City']);
    $companyType = mysqli_real_escape_string($conn, $_POST['Company_Type']);
    $website = mysqli_real_escape_string($conn, $_POST['website']);
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // SQL query with prepared statement to insert user data
    $stmt = $conn->prepare("INSERT INTO suppliers (companyName, gstin, contactNo, email, industryType, city, companyType, password, website) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Check if the prepared statement is valid
    if (!$stmt) {
        $_SESSION["error"] = "Error in SQL query preparation: " . $conn->error;
        header("Location: /WD/BecomeSupplier.php");
        exit();
    }

    // Bind parameters to the prepared statement
    $stmt->bind_param("sssssssss", $companyName, $gstin, $contactNo, $email, $industryType, $city, $companyType, $hashedPassword, $website);

    // Execute the prepared statement
    if ($stmt->execute()) {
        $_SESSION["success"] = "Registration successful! You can now login.";
        header("Location: /WD/BecomeSupplier.php");
        exit();
    } else {
        $_SESSION["error"] = "Error executing SQL statement: " . $stmt->error;
        header("Location: /WD/BecomeSupplier.php");
        exit();
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
ob_end_clean();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... (head content remains unchanged) ... -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="css/messo.css">
    <!-- <link rel="stylesheet" href="reg.css"> -->
<style>.form-group {
    margin-bottom: 20px;
 }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .btn-submit {
        background-color: #4caf50;
        color: white;
        border: none;
        padding: 12px 20px;
        cursor: pointer;
        border-radius: 5px;
        font-size: 18px;
    }

    .btn-submit:hover {
        background-color: #45a049;
    }

    a {
        text-decoration: none;
        color: #4caf50;
        font-weight: bold;
    }

    a:hover {
        color: #45a049;
    }
    .uprod {
        margin-bottom: 20px;
        max-width: 400px; /* Set maximum width for the form */
        margin-left: auto;
        margin-right: auto;
    }

    /* Rest of your existing CSS */


</style>
</head>

<body>
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
                <!-- <div class="profileContainer">
                    <div class="profileIcon">
                        <img src="./img/user.png" />
                    </div>
                    <a href="/" style="text-decoration: none; color: black;">
                        <p>Profile</p>
                        </a>
                    
                </div> -->

                <!-- <div class="CartContainer">
                    <div class="CartIcon">
                        <img src="./img/cart.png" />
                    </div>
                    <a href="/" style="text-decoration: none; color: black;">
                        <p>My Orders</p>
                        </a>
                    
                </div> -->
            </div>
        </div>
    </header>
    <div class="detailsection" style="background-color: #e2e7e6; width: 100%; padding-top: 40px;">
        <div class="uprod">
            <?php
            // Display success message if available
            if (isset($_SESSION["success"])) {
                echo "<p style='color:green;'>" . $_SESSION["success"] . "</p>";
                unset($_SESSION["success"]);
            }
            
            // Display error message if available
            if (isset($_SESSION["error"])) {
                echo "<p style='color:red;'>" . $_SESSION["error"] . "</p>";
                unset($_SESSION["error"]);
            }
            ?>
            <form action="/WD/BecomeSupplier.php" method="POST">
                <div class="form-group">
                    <h2>Enter Your Details Here</h2>
                    <label for="companyName">Company Name:</label><br>
                    <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Enter here" required><br>

                    <label for="gstin">GSTIN / UDYAN No. (Enter if Applicable):</label><br>
                    <input type="text" class="form-control" id="gstin" name="gstin" placeholder="Enter here"><br>

                    <label for="contactNo">Contact No:</label><br>
                    <input type="text" class="form-control" id="contactNo" name="contactNo" placeholder="Enter here" required><br>

                    <label for="email">Email Id:</label><br>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter here" required><br>

                    <label for="industryType">Industry Type (Sector):</label><br>
                    <input type="text" class="form-control" id="industryType" name="industryType" placeholder="Enter here" required><br>

                    <label for="City">City:</label><br>
                    <select class="form-control" id="city" name="City" required>
                        <option value="">-- Select City --</option>
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Vadodara">Vadodara</option>
                        <option value="Surat">Surat</option>
                        <option value="Nadiad">Nadiad</option>
                        <option value="Mehsana">Mehsana</option>
                        <option value="Gandhinagar">Gandhinagar</option>
                        <option value="Other">Other</option>
                    </select><br>

                    <label for="CompanyType">Company Type:</label><br>
                    <select class="form-control" id="companyType" name="Company_Type" required>
                        <option value="MSME">MSME</option>
                        <option value="Non-MSME">Non-MSME</option>
                    </select><br>
                    
                    <!-- ... (previous form fields) ... -->
<label for="website">Website (Optional):</label><br>
<input type="text" class="form-control" id="website" name="website" placeholder="Enter here"><br>


                    <label for="password">Set Password:</label><br>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter here" required><br>

                    <button type="submit" class="btn-submit">Submit</button>
                </div>
            </form>
            <a href="login.php">Already have an account? Login here</a>
        </div>
    </div>
</body>
</html>
