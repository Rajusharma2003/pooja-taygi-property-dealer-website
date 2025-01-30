<?php 
include 'config.php';

// Handle search functionality
$searchQuery = '';
if (isset($_GET['search'])) {
    $searchQuery = $_GET['search'];
    $stmt = $conn->prepare("SELECT * FROM properties WHERE title LIKE ?");
    $searchTerm = "%{$searchQuery}%";
    $stmt->bind_param("s", $searchTerm);
} else {
    $stmt = $conn->prepare("SELECT * FROM properties");
}
$stmt->execute();
$result = $stmt->get_result();
?>
<!-- hi this is second commit -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Properties</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1d4350, #a43931);
            color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 80vh; */
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 90%;
            max-width: 1200px;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 28px;
        }

        .search-container {
            margin-bottom: 20px;
        }

        .search-container input {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            width: 300px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        td img {
            width: 100px;
            height: auto;
            border-radius: 5px;
        }

        a {
            width: 100%;
            text-decoration: none;
            color: #fff;
            background-color: #ff6f61;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        a:hover {
            background-color: #e65c50;
        }

        .action-links {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Manage Properties</h2>

        <!-- This is the back button -->
    <button class="back-button" onclick="window.history.back()">≪-</button>
      <button class="back-button" style="background-color: #e65c50; color: white; margin-bottom:10px" onclick="window.location.href='admin_panel.php'">Home</button>

        <!-- Search Bar -->
        <div class="search-container">
            <form action="manage_properties.php" method="get">
                <input type="text" name="search" placeholder="Search by title..." value="<?php echo htmlspecialchars($searchQuery); ?>">
            </form>
        </div>

        <table>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Type</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td><img src='{$row['image_path']}' alt='{$row['title']}'></td>
                        <td>{$row['title']}</td>
                        <td>{$row['type']}</td>
                        <td>{$row['price']}</td>
                        <td>{$row['status']}</td>
                        <td class='action-links'>
                            <a href='edit_property.php?id={$row['id']}'>Edit</a> 
                            <a href='delete_property.php?id={$row['id']}'>Delete</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No properties found.</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

