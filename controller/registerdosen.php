<?php
include("../config/connect.php");
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $rawPassword = $_POST["password"];

    $password = password_hash($rawPassword, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user (username, password, role) VALUES ('$username', '$password', '1')");

    header("location:../registerdosen.php");
}
