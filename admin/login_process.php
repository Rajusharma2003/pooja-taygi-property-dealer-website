<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Match with stored MD5 hash.

    $sql = "SELECT * FROM admin_users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        header('Location: admin_panel.php');
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>
