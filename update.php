<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php

    use PgSql\Result;

    include_once("connect.php");
    if (isset($_POST['update'])) {
        $id = $_POST['id'];

        $Nama = $_POST['Nama'];
        $NRP = $_POST['NRP'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $Prodi = $_POST['Prodi'];

        $result = mysqli_query($conn, "UPDATE mhs SET Nama='$Nama',NRP='$NRP',`Jenis Kelamin`='$jenisKelamin',Prodi='$Prodi' WHERE id=$id");
        header("Location: index.php");
        exit();
    }
    ?>
    <?php
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM mhs WHERE id=$id");

    while ($d = mysqli_fetch_array($result)) {
        $Nama = $d['Nama'];
        $NRP = $d['NRP'];
        $jenisKelamin = $d['Jenis Kelamin'];
        $Prodi = $d['Prodi'];
    }
    ?>
    <nav class="navbar fixed-top bg-light">
        <div class="container justify-content-start">
            <a href="./add.php" class="btn btn-outline-success ms-auto" type="button">Tambah Data</a>
            <a href="./index.php" class="btn btn-outline-primary ms-2" type="button">Tampilkan Data</a>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center g-5">
            <div class="col-3">
                <form action="./update.php" class="form-control mt-4" method="post">
                    <div class="py-1 container">
                        <span>Nama:</span>
                        <input required type="text" class="my-1 d-flex" value="<?php echo $Nama ?>" name="Nama">
                        <span>NRP:</span>
                        <input required type="text" class="my-1 d-flex" value="<?php echo $NRP ?>" name="NRP">
                        <span>Jenis Kelamin:</span>
                        <select class="my-1 d-flex" name="jenisKelamin" id="jenisKelamin">
                            <option value="<?= $jenisKelamin; ?>"><?= $jenisKelamin; ?></option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <span>Prodi:</span>
                        <input required type="text" class="my-1 d-flex" value="<?php echo $Prodi ?>" name="Prodi">
                        <div class="ms-auto mt-3 mb-2">
                            <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                            <button type="submit" name="update" value="Update" class="btn btn-success">Update</button>
                            <a href="./index.php" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>