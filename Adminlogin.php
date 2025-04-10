<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/logo1.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #DDDDDD;
            width: 400px;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 8px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #088178;
            color: #088178;
            font-weight: bold;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #088178;
            color: #ffffff;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Admin Log In</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <div class="pro" onclick="window.location.href='index.html';">
                    <input type="submit" value="LOG IN">
                </div>
            </div>
        </form>

        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Hardcoded admin credentials for demonstration purposes
            $adminUsername = "admin";
            $adminPassword = "adminpassword";

            // Get user input
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Check if entered credentials match admin credentials
            if ($username === $adminUsername && $password === $adminPassword) {
                // Redirect to admin dashboard or perform other admin actions
                header("Location: admin-dashboard.php");
                exit();
            } else {
                // Invalid credentials, display an error message
                echo "<p style='color: red;'>Invalid username or password</p>";
            }
        }
        ?>
    </div>

</body>

</html>
