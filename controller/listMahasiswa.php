<?php
session_start();
if ($_SESSION["isLogin"] != 1) {
    echo "<script>
            alert('Login terlebih dahulu');
            window.location.href='./login.php';
        </script>";
    exit;
}
function isDosen()
{
    if (($_SESSION["role"] != 1)) {
        return 0;
    }
    return 1;
}
