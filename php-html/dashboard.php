<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

echo "Selamat datang! Anda sudah berhasil login.";
?>

<a href="logout.php">Logout</a>
