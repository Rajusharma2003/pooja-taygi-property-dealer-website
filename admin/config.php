<?php
$host = 'localhost';
$db = 'property_management';
$user = 'root';
$pass = '';

// $host = 'localhost';
// $db = 'viralqls_pproperty';
// $user = 'viralqls_p_property';
// $pass = 'p_property@#123';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
