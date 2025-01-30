<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1d2671, #c33764);
            color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .admin-panel {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        .admin-panel h2 {
            margin-bottom: 20px;
        }

        .admin-panel p {
            margin: 15px 0;
        }

        .admin-panel a {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background: #ff6f61;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        .admin-panel a:hover {
            background: #e65c50;
        }
    </style>
</head>
<body>
    <div class="admin-panel">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?>!</h2>
        <p><a href="add_property.php">Add Property</a></p>
        <p><a href="manage_properties.php">Manage Properties</a></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
