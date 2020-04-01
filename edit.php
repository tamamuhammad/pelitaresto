<?php
require "fungsions.php";
$Id_Makanan = $_GET['Id_Makanan'];
$result = querytampil("SELECT * FROM makanan WHERE id_makanan = '$Id_Makanan'");
if ( isset ( $_POST["edit"] ) ){
    if( edit ( $_POST ) > 0 ){
        echo "
        <script> 
        alert('data berhasil di edit');
        document.location.href='db.php';
        </script>
        ";
    } else {
        echo "
        <script> 
        alert('data gagal di edit');
        document.location.href='db.php';
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
    <h1>Ubah Nama Makanan</h1>
    <form action="" method="POST">
        <ul class="form">
        <?php foreach ($result as $row) : ?>
            <input type="hidden" name="idmkn" id="idmkn" value="<?= $row['id_makanan']?>">
            <li>
                <label for="mkn">Nama Makanan</label>
                <input type="text" name="mkn" id="mkn" class="form-controls" value="<?= $row['nm_makanan']?>">
            </li>
            <li>
                <label for="jenis">Jenis Makanan</label>
                <input type="text" name="jenis" id="jenis" class="form-controls" value="<?= $row['jenis']?>">
            </li>
            <li>
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-controls" value="<?= $row['harga']?>">
            </li>
            <li>
                <button type="submit" name="edit">Edit</button>
                <a href="db.php"><button type="submit" name="kembali">Kembali</button></a> 
            </li>
        <?php endforeach; ?>
        </ul>
    </form>
</body>
</html>