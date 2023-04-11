<?php
include_once("connect.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM mhs WHERE id=$id");

header("Location:index.php");
