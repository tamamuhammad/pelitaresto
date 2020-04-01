<?php
require "fungsions.php";
$Id_Makanan=$_GET['Id_Makanan'];
if(hapus($Id_Makanan)>0){
    echo "
    <script> 
    alert('data berhasil di musnahkan');
    document.location.href='db.php';
    </script>
    ";
}else {
    echo "
    <script> 
    alert('data belum di musnahkan');
    document.location.href='db.php';
    </script>
    ";
}
?>