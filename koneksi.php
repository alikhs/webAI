<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_pemesanan";

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
