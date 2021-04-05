<?php

require 'function.php';

$siswa = query("SELECT * FROM tabel_siswa");

if(isset($_POST["cari"])) {
    $siswa = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <a href="tambah.php">Tambah Data Siswa</a>

    <br><br>

    <form action="" method = "post">
        <input type="text" name ="keyword" size = "35" autofocus placeholder = "masukan keyword pencarian...." autocomplete = "off">
        <button type = "submit" name = "cari">Cari!</button>
    
    </form>
    <br><br>

    <table border="1" cellpadding= "10" cellspacing="0">
    
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    

    <?php $i = 1; ?>
    <?php foreach( $siswa as $row) : ?>

    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?ID=<?= $row ["ID"]; ?>">Ubah</a>
            <a href="hapus.php?ID=<?= $row ["ID"]; ?>" onclick = "return confirm ('yaqin ? ')";>hapus</a>
        </td>
        <td><img src="img/<?= $row ["Gambar"]; ?>" width = "50" alt=""></td>
        <td><?= $row["NIS"]; ?></td>
        <td><?= $row["Nama"]; ?></td>
        <td><?= $row["Email"]; ?></td>
        <td><?= $row["Jurusan"]; ?></td>
    </tr>
    
    <?php $i++ ?>
    <?php endforeach ;?>
    
    
    
</table>
</tr>
</body>
</html>