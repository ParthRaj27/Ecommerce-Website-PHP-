<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $database = "WD project";

    // Create connection
    $conn = new mysqli($servername, $username, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT email, password FROM supplier WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($dbEmail, $dbPassword);
    $stmt->fetch();

    if ($email == $dbEmail && password_verify($password, $dbPassword)) {
        // Login successful
        echo "Login successful!";
        // Redirect to a dashboard or home page
        // header("Location: dashboard.php");
    } else {
        // Login failed
        echo "Invalid email or password. Please try again.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<form action="/WD/supplier/login.php" method="post"></form>
<body style="background-color: #e2e7e6;">
    <div class="detailsecoton" style=" width: 100%; padding-top: 40px;">
        <div class="uprod" >
            <h2 style="font-weight: bold; font-size: 35px; ">Login </h2>
            
            <div class="img"  style="  border-radius: 70%;
            border: 2px solid black;height: 150px;width: 150px; margin-left: 37%;" ><img  src="images/ashok.png" style="height: 120px;margin-left: 27%; margin-top: 14px;" alt=""></div>
          
            
    
            <div class="form-group">
                <br><br>
                <label for="formGroupExampleInput">Email :</label><br>
                <input type="text" class="form-control" class="formGroupExampleInput" name="email" placeholder="Enter here">
                <br><br>
                <label for="formGroupExampleInput">Password</label><br>
                <input type="password" name="password" class="form-control" class="formGroupExampleInput" placeholder="Enter here"><br><br>
                
            <!-- <br>
            <label for="">Company Type : </label>
           
            
            <div class="contain"  style="margin-left: 6%; "> <select  style="  border: 2px #00A699 solid; "  name=""  id="cat" >   
                <option value="">MSME</option>
                <option value="">NON MSME</option>
               
                
               
                </div> -->
            
            </select>

           
        </div>

           
        </div>
        <br>
        <button   onclick="alert('Your Details Are Submitted Succesfully !! \n We Will Verify Your Details And Send Password Within 48 working Hours!!')" 
        id ="bttn" style="margin-left: 42%; background-color: #00A699;margin-top: 10px; height: 30px;width: 150px; margin-bottom: 20px;border-radius: 4px;"><a  style="color: white; font-size: large;text-decoration: none;" href="index.php">Submit</a></button>
        <p style="text-align: right;margin-right: 30px;">Don't Have Account <a  href="Register.html" style="color: green;"> Signup</a></p>
        

    </div>
  
</body>
</html>