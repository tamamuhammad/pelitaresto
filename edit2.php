<?php
require "fungsions.php";
$Id_Minuman = $_GET['Id_Minuman'];
$result = querytampil("SELECT * FROM minuman WHERE id_minuman = '$Id_Minuman'");
if ( isset ( $_POST["edit"] ) ){
    if( edit2 ( $_POST ) > 0 ){
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
            <input type="hidden" name="idmnm" id="idmnm" value="<?= $row['id_minuman']?>">
            <li>
                <label for="mkn">Nama Makanan</label>
                <input type="text" name="mnm" id="mnm" class="form-controls" value="<?= $row['nm_minuman']?>">
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