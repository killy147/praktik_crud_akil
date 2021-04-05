<?php
$conn = mysqli_connect("localhost", "root", "", "data_siswa");
function query ($query) {
global $conn;
$result = mysqli_query ($conn, $query);
$rows = [];
while( $row = mysqli_fetch_assoc($result)) {
$rows[] = $row;
}
return $rows;
}

function tambah($data) {
global $conn;
$NIS = htmlspecialchars($data["NIS"]);
$Nama = htmlspecialchars($data["Nama"]);
$Email = htmlspecialchars($data["Email"]);
$Jurusan = htmlspecialchars($data["Jurusan" ]) ;
$Gambar = htmlspecialchars($data["Gambar"]);
$query = "INSERT INTO tabel_siswa
VALUES
('', '$NIS', '$Nama', '$Email', '$Jurusan', '$Gambar')
";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}
function hapus($ID) {
global $conn;
mysqli_query($conn, "DELETE FROM tabel_siswa WHERE ID = $ID");
return mysqli_affected_rows($conn);
}

    function ubah($data) {
    global $conn;
    $ID = $data["ID"];
    $NIS = htmlspecialchars($data["NIS"]);
    $Nama = htmlspecialchars($data["Nama" ]);
    $Email = htmlspecialchars($data["Email"]);
    $Jurusan = htmlspecialchars($data[ "Jurusan" ]);
    $Gambar = htmlspecialchars($data["Gambar"]);
    $query =
    "UPDATE tabel_siswa SET
    NIS = '$NIS',
    Nama = '$Nama',
    Email = '$Email',
    Jurusan = '$Jurusan',
    Gambar = '$Gambar'
    WHERE ID = $ID
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    }

    function cari($keyword){
        $query = "SELECT * FROM data_siswa WHERE Nama LIKE '$%keyword%' OR NIS LIKE '$%keyword%' OR Email LIKE '$%keyword%' OR 
        Jurusan LIKE '$%keyword%' OR ";
        return query($query);
    }