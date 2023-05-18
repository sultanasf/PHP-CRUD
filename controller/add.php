<?php
include("../config/connect.php");
if (isset($_POST['submit'])) {
    $Nama = $_POST['Nama'];
    $NRP = $_POST['NRP'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $Prodi = $_POST['Prodi'];

    $result = mysqli_query($conn, "INSERT INTO mhs (`Nama`, `NRP`, `JenisKelamin`, `Prodi`) VALUES ('$Nama','$NRP','$jenisKelamin','$Prodi')");

    header("Location:../listMahasiswa.php");
    exit();
}
