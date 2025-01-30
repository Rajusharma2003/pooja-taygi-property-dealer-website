<?php
// Include database connection
include 'config.php';

// Get the property ID from the URL
$id = $_GET['id'];

// Fetch the property details
$sql = "SELECT * FROM properties WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "Property not found.";
    exit;
}

$property = $result->fetch_assoc();

// Handle the delete request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $deleteSql = "DELETE FROM properties WHERE id = ?";
    $deleteStmt = $conn->prepare($deleteSql);
    $deleteStmt->bind_param("i", $id);
    $deleteStmt->execute();

    // Redirect to the manage properties page after deletion
    header('Location: manage_properties.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Property</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .delete-card {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }
        .delete-card h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .delete-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .delete-card p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .delete-card button {
            background-color: #ff6f61;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .delete-card button:hover {
            background-color: #e65c50;
        }
        .delete-card a {
            display: inline-block;
            margin-top: 10px;
            color: #333;
            text-decoration: none;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="delete-card">
    <h2>Are you sure you want to delete this property?</h2>
    <img src="<?php echo $property['image_path']; ?>" alt="<?php echo $property['title']; ?>">
    <p><strong>Title:</strong> <?php echo $property['title']; ?></p>
    <p><strong>Price:</strong> <?php echo $property['price']; ?></p>
    <p><strong>Type:</strong> <?php echo $property['type']; ?></p>
    <p><strong>Status:</strong> <?php echo $property['status']; ?></p>
    
    <form method="POST">
        <button type="submit">Delete Property</button>
    </form>
    
    <a href="manage_properties.php">Cancel</a>
</div>

</body>
</html>
