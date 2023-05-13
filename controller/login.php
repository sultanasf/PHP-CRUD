<?php
include("../config/connect.php");
session_start();
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $rawPassword = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user where username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $data = mysqli_fetch_array($result);
        $password = $data["password"];
        $role = $data["role"];
        if (password_verify($rawPassword, $password)) {
            $_SESSION["isLogin"] = 1;
            $_SESSION["role"] = $role;
            if ($role) {
                echo "<script>
                    alert('login sebagai Dosen berhasil');
                    window.location.href='../index.php';
                </script>";
            } else {
                echo "<script>
                    alert('login sebagai Mahasiswa berhasil');
                    window.location.href='../index.php';
                </script>";
            }
            exit;
        }
    }

    echo "<script>
            alert('username/password salah');
            window.location.href='../login.php';
        </script>";
}
