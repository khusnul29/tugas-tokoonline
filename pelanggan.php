<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Pelanggan</h3>
    <form action="pt_pelanggan.php" method="post"> enctype="multipart/form-data">
        Nama :
        <input type="text" name="nm_pelanggan" value="" class="form-control">
        Alamat :
        <input type="text" name="alamat" value="" class="form-control">
        Telp :
        <input type="number" name="telp" value="" class="form-control">
        Foto :
        <input type="file" name="foto" class="form-control">
        <input type="submit" name="simpan" value="Tambah Produk" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>