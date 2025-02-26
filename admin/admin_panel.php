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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome for social media icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTTXRMfV3b4CUu8zF1L6b6C0eB6bF1iW7+U5exOzP5jX0x4JD0ZXk7tEmx7dJrU3jrZHFS6M1g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
      body {
          font-family: Arial, sans-serif;
          /* Background image with a gradient overlay */
          background: linear-gradient(135deg, rgba(29,38,113,0.8), rgba(0, 0, 0, 0.16)), 
                      url('https://img.freepik.com/free-photo/house-loan-estate-sell-mortgage-concept_53876-125097.jpg?ga=GA1.1.332943406.1726205077&semt=ais_hybrid');
          background-size: cover;
          background-position: center;
          background-attachment: fixed;
          color: #ffffff;
          margin: 0;
          padding: 0;
      }
      .admin-panel {
          background: rgba(255, 255, 255, 0.1);
          backdrop-filter: blur(10px);
          padding: 30px;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
          text-align: center;
      }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
    <div class="admin-panel">
      <!-- Logo -->
      <img src="../img/plogo3.png" alt="Logo" class="img-fluid mb-3" style="max-height: 100px;">
      
      <h2>Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?>!</h2>
      
      <!-- Admin Links -->
      <div class="mb-3">
        <a href="add_property.php" class="btn btn-primary m-1">Add Property</a>
        <a href="manage_properties.php" class="btn btn-primary m-1">Manage Properties</a>
        <a href="logout.php" class="btn btn-danger m-1">Logout</a>
      </div>
      
      <!-- Social Media Links -->
      <div>
        <a href="https://facebook.com" target="_blank" class="text-white mx-2">
          <i class="fab fa-facebook fa-2x"></i>
        </a>
        <a href="https://twitter.com" target="_blank" class="text-white mx-2">
          <i class="fab fa-twitter fa-2x"></i>
        </a>
        <a href="https://instagram.com" target="_blank" class="text-white mx-2">
          <i class="fab fa-instagram fa-2x"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
