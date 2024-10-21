<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Makanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <header>
        <h1>Pemesanan Makanan Online</h1>
        <p>Pesan makanan favoritmu dengan mudah dan cepat!</p>
    </header>

    <form action="proses_pesanan.php" method="POST">
        <input type="text" name="nama" placeholder="Nama Pemesan" required>
        <select name="makanan" required>
            <option value="">-- Pilih Makanan --</option>
            <option value="Ayam Goreng">Ayam Goreng - Rp25.000</option>
            <option value="Nasi Goreng">Nasi Goreng - Rp20.000</option>
            <option value="Bakso">Bakso - Rp15.000</option>
        </select>
        <input type="number" name="jumlah" placeholder="Jumlah" required min="1">
        <button type="submit">Pesan</button>
    </form>

    <h2>Daftar Pesanan</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Makanan</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Tanggal</th>
        </tr>
        <?php
        $query = "SELECT * FROM pesanan ORDER BY tanggal_pesanan DESC";
        $result = mysqli_query($koneksi, $query);
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['makanan'] . "</td>";
            echo "<td>" . $row['jumlah'] . "</td>";
            echo "<td>Rp" . $row['total_harga'] . "</td>";
            echo "<td>" . $row['tanggal_pesanan'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <footer>
        &copy; 2024 Pemesanan Makanan Online
    </footer>
</div>

</body>
</html>
