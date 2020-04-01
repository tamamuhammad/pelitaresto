<?php
require "fungsions.php";
$Id_Minuman=$_GET['Id_Minuman'];
if(hapus2($Id_Minuman)>0){
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