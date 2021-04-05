<?php

require 'function.php';
//koneksi
//cek apakah tombol submit sudah ditekan apa belum
 if( isset($_POST["submit"])) {
//cek apakah data berhasil ditambahkan/tidak
if( tambah($_POST) > 0) {
echo "
<script>
alert('data berhasil ditambahkan!');
document.location.href = 'index.php';
</script>
";
}else{
echo "
<script>
alert('data tidak berhasil ditambahkan!');
document.location.href = 'index.php';
</script>
";
}
}
?>

<html lang="en">
<head>
<title>Document</title>
</head>
<body>

<h1>Tambah Data Siswa</h1>

<form action="" method = "post">

<ul>
    <li>
        <label for="NIS">NIS : </label>
        <input type="text" name = "NIS" ID ="NIS" required>
    </li>

    <li>
        <label for="Nama">Nama : </label>
        <input type="text" name = "Nama" ID ="Nama" required>
    </li>

    <li>
        <label for="Email">Email : </label>
        <input type="text" name ="Email" ID ="Email" required>
    </li>

    <li>
        <label for="Jurusan">Jurusan : </label>

        <input type="text" name = "Jurusan" ID ="Jurusan" required>
    <li>
        <label for="Gambar">Gambar : </label>
        <input type="text" name ="Gambar" ID ="Gambar" required>
    </li>
    <li>
<button type = "submit" name ="submit">Tambah</button>
</li>
</ul>
</form>
</body>
</html>