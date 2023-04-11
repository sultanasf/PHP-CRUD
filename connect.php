<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "biodata";

// $conn = mysqli_connect($hostname, $username, $password, $database);
// if ($conn->error) {
//     echo "<script>alert(Koneksi db gagal)</script>" . $conn->error;
// }

try {
    $conn = mysqli_connect($hostname, $username, $password, $database);
} catch (\Throwable $th) {
    echo $th;
}
