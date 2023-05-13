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
    <nav class="navbar fixed-top bg-light">
        <div class="container justify-content-start">
            <a href="#" class="btn btn-outline-success ms-auto" type="button">Tambah Data</a>
            <a href="./index.php" class="btn btn-outline-primary ms-2" type="button">Tampilkan Data</a>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center g-5">
            <div class="col-3">
                <form action="./controller/add.php" class="form-control mt-4" method="post">
                    <div class="py-1 container">
                        <span>Nama:</span>
                        <input required type="text" class="my-1 d-flex" placeholder="Nama" name="Nama">
                        <span>NRP:</span>
                        <input required type="text" class="my-1 d-flex" placeholder="NRP" name="NRP">
                        <span>Jenis Kelamin:</span>
                        <select class="my-1 d-flex" name="jenisKelamin" id="jenisKelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <span>Prodi:</span>
                        <input required type="text" class="my-1 d-flex" placeholder="Prodi" name="Prodi">
                        <div class="ms-auto mt-3 mb-2">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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