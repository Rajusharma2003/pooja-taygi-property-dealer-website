<?php
// Database connection details
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'property_management';

$conn = new mysqli($host, $user, $pass);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Create the database
$sql = "CREATE DATABASE IF NOT EXISTS $db_name";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists.<br>";
} else {
    die("Error creating database: " . $conn->error);
}

// Select the database
$conn->select_db($db_name);

// Create the properties table
$properties_table = "
CREATE TABLE IF NOT EXISTS properties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    type VARCHAR(100),
    price VARCHAR(50),
    status ENUM('Sale', 'Rent') DEFAULT 'Sale',
    image_path VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($properties_table) === TRUE) {
    echo "Table 'properties' created successfully or already exists.<br>";
} else {
    die("Error creating table 'properties': " . $conn->error);
}

// Create the admin_users table
$admin_users_table = "
CREATE TABLE IF NOT EXISTS admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($admin_users_table) === TRUE) {
    echo "Table 'admin_users' created successfully or already exists.<br>";
} else {
    die("Error creating table 'admin_users': " . $conn->error);
}

// Insert a default admin user if not exists
$default_admin = "SELECT * FROM admin_users WHERE username = 'admin'";
$result = $conn->query($default_admin);
if ($result->num_rows === 0) {
    $password_hash = md5('admin'); // Use stronger hashing (e.g., password_hash) for production
    $insert_admin = "
        INSERT INTO admin_users (username, password) 
        VALUES ('admin', '$password_hash')
    ";
    if ($conn->query($insert_admin) === TRUE) {
        echo "Default admin user created (username: admin, password: admin).<br>";
    } else {
        die("Error creating default admin user: " . $conn->error);
    }
} else {
    echo "Default admin user already exists.<br>";
}

echo "Setup completed successfully!";
$conn->close();
?>
