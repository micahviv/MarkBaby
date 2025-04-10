<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/logo1.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="admin-style.css"> <!-- Create a separate CSS file for admin styles -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0; /* Reset default margin */
        }

        #admin-header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-left: 150px; /* Adjusted margin */
            width: calc(100% - 150px); /* Make header 100% wide */
        }

        #admin-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 220px;
            background-color: #333;
            padding-top: 150px;
            color: #fff;
        }

        #admin-content {
            float: left;
            width: calc(100% - 250px);
            min-height: 100vh;
            padding: 20px;
            margin-left: 250px; /* Adjusted margin */
        }

        #admin-sidebar a {
            display: block;
            padding: 10px;
            color: #fff;
            text-decoration: none;
            border-bottom: 1px solid #777;
        }

        #admin-sidebar a:hover {
            background-color: #088178;
        }

        #admin-content h2 {
            color: #333;
        }

        #admin-profile {
            margin-left: 10px; /* Adjusted margin */
            text-align: center;
        }

        #admin-profile img {
            max-width: 80px;
            max-height: 80px;
            border-radius: 50%;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div id="admin-header">
        <h1>Admin Dashboard</h1>
        <p>Welcome to the admin dashboard. You can manage your website's content here.</p>
    </div>

    <div id="admin-sidebar">
        <div id="admin-profile">
            <img src="images/pic/roy.png" alt="Profile Image">
            <p>Royett Darrel Bacolod</p>
        </div>
        <a href="#">Dashboard</a>
        <a href="#">Products</a>
        <a href="#">Orders</a>
        <a href="#">Users</a>
        <a href="#">Log Out</a>
    </div>

    <script src="admin-script.js"></script>
</body>

</html>
