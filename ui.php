

<!DOCTYPE php>
<php lang="en">

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
        }

        #admin-header {
            background-color: #333;
            color: #fff;
            padding: 50px;
            text-align: center;
        }

        #admin-sidebar {
            float: left;
            width: 250px;
            height: 100vh;
            background-color:#333;
            padding-top: 20px;
            color: #fff;
        }

        #admin-content {
            float: left;
            width: calc(100% - 250px);
            min-height: 100vh;
            padding: 20px;
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
    </div>

    <div id="admin-sidebar">
    <div id="admin-profile">
            <img src="images/pic/roy.png" alt="Profile Image">
        </div>
        <a href="#">Dashboard</a>
        <a href="#">Products</a>
        <a href="#">Orders</a>
        <a href="#">Users</a>
        <a href="#">Log Out</a>

        <!-- Add more links based on your requirements -->
    </div>

    <div id="admin-content">
        <h2>Dashboard</h2>
        <p>Welcome to the admin dashboard. You can manage your website's content here.</p>
        <!-- Add more content based on your requirements -->
    </div>

    <script src="admin-script.js"></script> <!-- Create a separate JS file for admin scripts -->
</body>

</php>
