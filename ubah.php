<?php
require 'function.php';
 //ambil data di url
$ID = $_GET["ID"];
//QUERY DATA SISWA BERDASARKAN ID
$mhs = query("SELECT * FROM tabel_siswa WHERE ID = $ID")[0];
//cek apakah tombol submit sudah ditekan apa belum
if(isset($_POST["submit"])) {
//AMBIL DATA DARI TIAP ELEMEN DALAM FORM
//query insert data
//cek apakah data berhasil diubah/tidak
if( ubah($_POST) > 0) {
echo "
<script>
alert('data berhasil diubah!');
document.location.href = 'index.php';
</script>
";
}else{
echo "
<script>
alert('data tidak berhasil diubah!');
document.location.href = 'index.php';
</script>
";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
</head>
<h1>Ubah Data Siswa</h1>

<form action="" method = "post">
<input type="hidden" name="ID" value="<?= $mhs["ID"]; ?>">

<ul>
    <li>
    <label for="NIS">NIS : </label>

    <input type="text" name = "NIS" ID ="NIS" required

value = "<?= $mhs["NIS"]; ?>">
</li>

<li>

<label for="Nama">Nama : </label>

<input type="text" name = "Nama" ID ="Nama" value = "<?= $mhs["Nama"]; ?>">
</li>

<li>

<label for="Email">Email : </label>

<input type="text" name = "Email" ID ="Email" value = "<?= $mhs["Email"]; ?>">
</li>

<li>

<label for="Jurusan">Jurusan : </label>

<input type="text" name =
"Jurusan" ID ="Jurusan" value = "<?= $mhs["Jurusan"]; ?>">
</li>

</li>

<label for="Gambar">Gambar : </label>

<input type="text" name = "Gambar" ID ="Gambar" value = "<?= $mhs["Gambar"]; ?>">

</li>

<li>

<button type = "submit" name ="submit">ubah</button>
</li>


</form>
</body>
</html>