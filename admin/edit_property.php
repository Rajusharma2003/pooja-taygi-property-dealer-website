<?php
include 'config.php';

// Check if ID is provided
if (!isset($_GET['id'])) {
    echo "Invalid request.";
    exit;
}

$id = intval($_GET['id']);
$property = $conn->query("SELECT * FROM properties WHERE id = $id")->fetch_assoc();

if (!$property) {
    echo "Property not found.";
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $type = $conn->real_escape_string($_POST['type']);
    $price = $conn->real_escape_string($_POST['price']);
    $status = $conn->real_escape_string($_POST['status']);
    $city = $conn->real_escape_string($_POST['city']);
    $description = $conn->real_escape_string($_POST['description']); // New field for description
    $imagePath = $property['image_path']; // Default to existing image

    // Handle file upload if a new image is provided
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $imagePath = $targetFile;
        } else {
            echo "Failed to upload image.";
            exit;
        }
    }

    // Update the property in the database including the description field
    $sql = "UPDATE properties SET 
            title = '$title', 
            type = '$type', 
            price = '$price', 
            status = '$status', 
            city = '$city',
            description = '$description',
            image_path = '$imagePath'
            WHERE id = $id";

    if ($conn->query($sql)) {
        echo "<script>alert('Property updated successfully!');</script>";
        echo "<script>window.location.href = 'manage_properties.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Property</title>
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
            /* height: 100vh; */
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 600px;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 28px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-size: 16px;
        }
        input, select, textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
        }
        input[type="file"] {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
        }
        button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #ff6f61;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background-color: #e65c50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Property</h2>

         <!-- This is the back button -->
         <button class="back-button" onclick="window.history.back()">≪-</button>
        <button class="back-button" style="background-color: #e65c50; color: white; margin-bottom:10px" onclick="window.location.href='admin_panel.php'">Home</button>
        
        <form method="POST" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?= htmlspecialchars($property['title']); ?>" required>

            <label for="type">Type:</label>
            <input type="text" id="type" name="type" value="<?= htmlspecialchars($property['type']); ?>" required>

            <!-- <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="<?= htmlspecialchars($property['price']); ?>" required> -->

            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="Sale" <?= $property['status'] === 'Sale' ? 'selected' : ''; ?>>Sale</option>
                <option value="Rent" <?= $property['status'] === 'Rent' ? 'selected' : ''; ?>>Rent</option>
                <option value="Sold" <?= $property['status'] === 'Sold' ? 'selected' : ''; ?>>Sold</option>
            </select>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" value="<?= htmlspecialchars($property['city']); ?>" required>

            <!-- New Description Field -->
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="5" required><?= htmlspecialchars($property['description']); ?></textarea>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image">
            <p>Current Image:</p>
            <img src="<?= htmlspecialchars($property['image_path']); ?>" alt="Current Image" style="width: 100px; border-radius: 5px;">

            <button type="submit">Update Property</button>
        </form>
    </div>
</body>
</html>
