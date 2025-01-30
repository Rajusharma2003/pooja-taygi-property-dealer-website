<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "INSERT INTO properties (title, description, type, price, status, image_path)
                VALUES ('$title', '$description', '$type', '$price', '$status', '$target')";

        if ($conn->query($sql) === TRUE) {
            echo "Property added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Failed to upload image.";
    }
}
?>
