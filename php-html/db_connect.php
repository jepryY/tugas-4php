<?php
$servername = "localhost";  // Nama server
$username = "root";         // Username MySQL
$password = "";             // Password MySQL
$dbname = "login_system";   // Nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
