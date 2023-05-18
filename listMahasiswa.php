<?php
include("./controller/listMahasiswa.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body">
    <nav class="navbar fixed-top bg-light">
        <div class="container justify-content-start">
            <span class="py-2">Logged in <a href="./controller/logout.php">(logout)</a></span>
            <?php if (isDosen()) : ?>
                <a href="./add.php" class="btn btn-outline-success ms-auto" type="button">Tambah Data</a>
            <?php endif; ?>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-8">
                <table border="2" class="table table-rounded mt-4">
                    <thead>
                        <tr>
                            <th class=" bg-secondary">NRP</th>
                            <th class=" bg-secondary">Nama</th>
                            <th class=" bg-secondary">Jenis Kelamin</th>
                            <th class=" bg-secondary">Prodi</th>
                            <?php if (isDosen()) : ?>
                                <th class=" bg-secondary"></th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <?php
                    include './config/connect.php';
                    $data = mysqli_query($conn, 'SELECT * FROM `mhs` ORDER BY `NRP`');
                    $index = 0;
                    while ($d = mysqli_fetch_array($data)) {
                        // var_dump($index);
                        echo "<tr>";
                        // echo "<td>" . $d['id'] . "</td>";
                        echo "<td>" . $d['NRP'] . "</td>";
                        echo "<td>" . $d['Nama'] . "</td>";
                        echo "<td>" . $d['JenisKelamin'] . "</td>";
                        echo "<td>" . $d['Prodi'] . "</td>";
                        if (isDosen()) echo "<td> <a href='update.php?id=$d[id]' class='btn btn-sm btn-warning'>Edit</a> | <button  class='btn btn-sm btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal" . $index . "'>Delete</button>
                        <div class='modal fade' id='exampleModal" . $index . "' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                            <div class='modal-header'>
                            <h1 class='modal-title fs-5' id='exampleModalLabel'>Warning!!</h1>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                            <p>Apakah anda yakin menghapus $d[Nama]?</p>
                            </div>
                            <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                            <a href='./controller/delete.php?id=$d[id]' class='btn btn-danger'>Delete</a>
                            </div>
                            </div>
                            </div>
                            </div>
                            </td>";
                        echo "</tr>";;
                        $index++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>

</html>
</body>

</html>