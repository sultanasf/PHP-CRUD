<?php
include("./config/connect.php");
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $Nama = $_POST['Nama'];
    $NRP = $_POST['NRP'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $Prodi = $_POST['Prodi'];

    $result = mysqli_query($conn, "UPDATE mhs SET Nama='$Nama',NRP='$NRP',`JenisKelamin`='$jenisKelamin',Prodi='$Prodi' WHERE id=$id");
    header("Location: listMahasiswa.php");
    exit();
} else {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM mhs WHERE id=$id");
    while ($d = mysqli_fetch_array($result)) {
        $Nama = $d['Nama'];
        $NRP = $d['NRP'];
        $jenisKelamin = $d['JenisKelamin'];
        $Prodi = $d['Prodi'];
    }
}
