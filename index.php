<?php
require 'function.php';
$brg = query("SELECT * FROM daftar_barang")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Shavira Eka Yuniati</title>
    </head>
    <body>
        <h1>Daftar Barang Toko Borahae</h1>

        <a href="tambah.php">Tambah Data Barang</a>
        <br><br>
        
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kode Barang</th>
                <th>Harga Barang</th>
                <th>Stok Barang</th>
            </tr>
            <?php $i = 1;
            foreach ($brg as $row) : ?> 
            
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="ubah.php?no=<?= $row['no']; ?>">Ubah</a>
                    <a href="hapus.php?no= <?= $row["no"];?>" onclick="return confirm('APAKAH ANDA YAKIN UNTUK MENGHAPUS DATA?');">Hapus</a>
                </td>
                <td><img src="image/<?= $row['gambar']; ?>" width="50"></td>
                <td><?= $row["namabarang"]; ?></td>
                <td><?= $row["kodebarang"]; ?></td>
                <td><?= $row["hargajual"]; ?></td>
                <td><?= $row["stokbarang"]; ?></td>
            </tr>
            <?php 
            $i++; 
            endforeach;
            ?>
        </table>
    </body>
</html>
