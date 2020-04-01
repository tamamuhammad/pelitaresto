<?php
require "fungsions.php" ;
$makanan = querytampil("SELECT * FROM makanan");
$minuman = querytampil("SELECT * FROM minuman");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery-slim.min.js"></script>
    <script src="bootstrap/js/pooper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
    table   {
        margin : auto;
        text-align:center;
        border-collapse:collapse;
    }

    h1      {
        text-align:center;
    }

    h3      {
        text-align :center;
    }
    </style>
</head>
<body>
    <h1>Mbak Yuni Store</h1>
    <hr>
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-6">
                <h3><a href="tambah.php">Tambah Menu Makanan</a></h3>
                <table class="table" border="1">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Makanan</th>
                            <th>Jenis</th>
                            <th>Harga</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                        <?php
                        $i=1;
                        foreach ($makanan as $row):
                        ?>
                        <tr>
                            <td> <?=$i ?></td>
                            <td><?=$row["nm_makanan"]?></td>
                            <td><?=$row["jenis"] ?></td>
                            <td><?= $row["harga"]?></td>
                            <td><a href="edit.php?Id_Makanan=<?php echo $row['id_makanan']; ?>">EDIT </a> | 
                            <a href="hapus.php?Id_Makanan=<?php echo $row['id_makanan']; ?>" onclick="return confirm('Yakin Nih Dihapus?')">HAPUS</a></td>
                        </tr>
                    <?php
                    $i++;
                    endforeach;
                    ?>
                </table>
            </div>
            <div class="col-sm-6">
                <h3><a href="tambah2.php">Tambah Menu Minuman</a></h3>
                <table class="table" border="1">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Minuman</th>
                            <th>Jenis</th>
                            <th>Harga</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                        <?php
                        $i=1;
                        foreach ($minuman as $row2):
                        ?>
                        <tr>
                            <td><?=$i ?></td>
                            <td><?=$row2["nm_minuman"]?></td>
                            <td><?=$row2["jenis"] ?></td>
                            <td><?= $row2["harga"]?></td>
                            <td><a href="edit2.php?Id_Minuman=<?php echo $row2['id_minuman']; ?>">EDIT </a> | 
                            <a href="hapus2.php?Id_Minuman=<?php echo $row2['id_minuman']; ?>" onclick="return confirm('Yakin Nih Dihapus?')">HAPUS</a></td>
                        </tr>
                    <?php
                    $i++;
                    endforeach;
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>