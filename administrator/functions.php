<?php
$conn = mysqli_connect("localhost", "root", "", "db_tokovili");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $dataData = [];
    while($data = mysqli_fetch_assoc($result)){
        $dataData[] = $data;
    }
    return $dataData;
}

function beliGalon($post){
    global $conn;
    date_default_timezone_set('Asia/Jakarta');

    $jumlah_galon = htmlspecialchars($post['jumlah_galon']);
    $harga_galon = htmlspecialchars($post['harga_galon']);
    $pembeli_galon = htmlspecialchars($post['pembeli_galon']);
    $waktu_beli = date("Y-m-d H:i:s");

    mysqli_query($conn, "INSERT INTO `tb_galon` (`id_galon`, `jumlah_galon`, `harga_galon`, `pembeli_galon`, `waktu_beli`) VALUES (NULL, '$jumlah_galon', '$harga_galon', '$pembeli_galon', '$waktu_beli')");

    return mysqli_affected_rows($conn);
}

?>