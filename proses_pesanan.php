<?php
include('koneksi.php');

// Ambil data dari form
$nama = $_POST['nama'];
$makanan = $_POST['makanan'];
$jumlah = $_POST['jumlah'];

// Tentukan harga per item
$harga = 0;
if ($makanan == "Ayam Goreng") $harga = 25000;
else if ($makanan == "Nasi Goreng") $harga = 20000;
else if ($makanan == "Bakso") $harga = 15000;

// Hitung total harga
$total_harga = $jumlah * $harga;

// Simpan ke database
$query = "INSERT INTO pesanan (nama, makanan, jumlah, total_harga) 
          VALUES ('$nama', '$makanan', $jumlah, $total_harga)";

if (mysqli_query($koneksi, $query)) {
    echo "Pesanan berhasil disimpan! <a href='index.php'>Kembali</a>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
?>
