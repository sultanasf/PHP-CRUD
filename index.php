<?php
session_start();
function loginCheck()
{
    if (isset($_SESSION["isLogin"]) && $_SESSION["isLogin"] == 1) {
        return 1;
    }
    return 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h2>Ini halaman index</h2>
    <a href="./listMahasiswa.php" class="btn btn-primary">list mahasiswa</a>
    <a href="./controller/logout.php" class="btn btn-danger" <?php if (!loginCheck()) echo "hidden"; ?>>Logout</a>
    <a href="./login.php" class="btn btn-primary" <?php if (loginCheck()) echo "hidden"; ?>>Login</a>
</body>

</html>