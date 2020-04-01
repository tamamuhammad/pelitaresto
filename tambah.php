<?php 
require "fungsions.php";
if ( isset ( $_POST["tambah"] ) ){
    if ( tambah ( $_POST ) > 0 ){
        echo "
        <script> 
        alert('menu berhasil di tambahkan');
        document.location.href = 'db.php';
        </script>
        ";
    } else {
        echo "
        <script> 
        alert('menu gagal di tambahkan');
        document.location.href = 'db.php';
        </script>
        " . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <ul>
            <li class="form-controlss">
                <label for="mkn">Nama Makanan</label>
                <input type="text" name="mkn" id="mkn" class="form-control" required oninvalid="this.setCustomValidity('woyyyyyy disii sekkk')" oninput="setCustomValidity('')">
            </li>
            <li>
                <label for="jenis">Jenis Makanan</label>
                <input type="text" name="jenis" id="jenis" class="form-control" required>
            </li>
            <li>
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga"class="form-control" required>
            </li>
            <li>
                <button type ="submit" name="tambah" class="btn btn-primary">Tambah</button>
                <a href="db.php"></a> <button type ="submit" class="btn btn-warning">  <a href="db.php">kembali</a></button>
            </li>
        </ul>
    </form>
</body>
</html>