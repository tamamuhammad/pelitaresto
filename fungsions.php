<?php
$conn=mysqli_connect("localhost","root","","pelita_resto");
if(mysqli_connect_errno()){
    echo "Koneksi Data Base Gagal".mysqli_connect_error();
}
function querytampil($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
    $rows[]=$row;
    }
    return $rows;
}
function tambah($data){
    global $conn;
    $makanan=$data["mkn"];
    $jenis=$data["jenis"];    
    $harga=$data["harga"];
    $query=("INSERT INTO makanan VALUES ('','$makanan','$jenis','$harga')");
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function hapus($Id_Makanan){
    global $conn;
    $query = "DELETE FROM makanan WHERE id_makanan = $Id_Makanan";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function edit($data){
    global $conn;
    $id=$data["idmkn"];
    $makanan=$data["mkn"];
    $jenis=$data["jenis"];
    $harga=$data["harga"];
    $query = ("UPDATE makanan SET
    nm_makanan = '$makanan',
    jenis = '$jenis',
    harga = '$harga' WHERE
    id_makanan = '$id' ");
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function tambah2($data){
    global $conn;
    $minuman=$data["mnm"];
    $jenis=$data["jenis"];    
    $harga=$data["harga"];
    $query=("INSERT INTO minuman VALUES ('','$minuman','$jenis','$harga')");
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function hapus2($Id_Minuman){
    global $conn;
    $query = "DELETE FROM minuman WHERE id_minuman = $Id_Minuman";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function edit2($data){
    global $conn;
    $id=$data["idmnm"];
    $minuman=$data["mnm"];
    $jenis=$data["jenis"];
    $harga=$data["harga"];
    $query = ("UPDATE minuman SET
    nm_minuman = '$minuman',
    jenis = '$jenis',
    harga = '$harga' WHERE
    id_minuman = '$id' ");
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
?>