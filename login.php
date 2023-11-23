<!-- <link rel="stylesheet" href="messo.css">
<link rel="stylesheet" href="login.css"> -->
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
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM suppliers WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($id, $hashedPassword);
    $stmt->fetch();
    $stmt->close();

    if (password_verify($password, $hashedPassword)) {
        $_SESSION['user_id'] = $id;
        header("Location: /WD/supplier/SuppIndex.php");
        exit();
    } else {
        $_SESSION["error"] = "Invalid email or password. Please try again.";
        header("Location: login.php");
        exit();
    }
}

$conn->close();
ob_end_clean();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>   
     <link rel="stylesheet" href="css/messo.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .login-container {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-submit {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn-submit:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: #4caf50;
        }

        a:hover {
            color: #45a049;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>

<body>
<div>
        <img src="./img/header.png" alt="">
    </div>
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
                </div> -->
            <!-- </div> --> 
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
                <a href="about-us/about-us.php" style="text-decoration: none; color: black;">
                <p>About Us</p>
                </a>
            </div>

            <div class="becomeSupplierContainer">
                <a href="BecomeSupplier.php" style="text-decoration: none; color: black;">
                <p>Become a Supplier</p>
                </a>
            </div>

            <!-- <div class="profileAndCart">
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
            </div> -->
        </div>
    </header>
    <div class="login-container">
        <h2>Login</h2>
        <?php
        if (isset($_SESSION["error"])) {
            echo "<p class='error-message'>" . $_SESSION["error"] . "</p>";
            unset($_SESSION["error"]);
        }
        ?>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="btn-submit">Login</button>

            <p>Don't have an account? <a href="BecomeSupplier.php">Register here</a></p>
        </form>
    </div>
</body>

</html>
