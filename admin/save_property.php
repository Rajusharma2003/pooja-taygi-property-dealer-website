<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get POST data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $city = $_POST['city'];  // New field for the city
    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);

    // Validate inputs
    if (empty($title) || empty($description) || empty($type) || empty($price) || empty($status) || empty($city)) {
        echo "All fields are required.";
    } elseif (empty($image)) {
        echo "Please upload an image.";
    } else {
        // Move uploaded image to target directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            // Prepare SQL statement to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO properties (title, description, type, price, status, city, image_path) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?)");

            // Bind parameters to the prepared statement
            $stmt->bind_param("sssssss", $title, $description, $type, $price, $status, $city, $target);

            // Execute the query and check if successful
            if ($stmt->execute()) {
                echo "Property added successfully.";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Failed to upload image.";
        }
    }
}

?>
