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

function hargaGalon($jumlah){
    if($jumlah == 1){
        $jumlah *=  7000;
    } else if($jumlah >= 2 && $jumlah <= 3){
        $jumlah *=  6000;
    } else if($jumlah >= 4 && $jumlah <= 5){
        $jumlah *=  5000;
    } else if($jumlah >= 6){
        $jumlah *=  4000;
    } else {
        $jumlah *=  0;
    }
    return $jumlah;
}

function beliGalon($post){
    global $conn;
    date_default_timezone_set('Asia/Jakarta');

    $jumlah_galon = htmlspecialchars($post['jumlah_galon']);
    $harga_galon = hargaGalon($jumlah_galon)/*htmlspecialchars($post['harga_galon'])*/;
    $pembeli_galon = htmlspecialchars($post['pembeli_galon']);
    $waktu_beli = date("Y-m-d H:i:s");

    mysqli_query($conn, "INSERT INTO `tb_galon` (`id_galon`, `jumlah_galon`, `harga_galon`, `pembeli_galon`, `waktu_beli`) VALUES (NULL, '$jumlah_galon', '$harga_galon', '$pembeli_galon', '$waktu_beli')");

    return mysqli_affected_rows($conn);
}

function beliGas($post){
    global $conn;
    date_default_timezone_set('Asia/Jakarta');

    $jumlah_gas = htmlspecialchars($post['jumlah_gas']);
    $jenis_gas = htmlspecialchars($post['jenis_gas']);
    $harga_gas = htmlspecialchars($post['harga_gas']);
    $pembeli_gas = htmlspecialchars($post['pembeli_gas']);
    $waktu_beli = date("Y-m-d H:i:s");

    mysqli_query($conn, "INSERT INTO `tb_gas` (`id_gas`, `jumlah_gas`, `jenis_gas`, `harga_gas`, `pembeli_gas`, `waktu_beli`) VALUES (NULL, '$jumlah_gas', '$jenis_gas', '$harga_gas', '$pembeli_gas', '$waktu_beli')");
    
    return mysqli_affected_rows($conn);
}

function hapusGas($id_gas){
    global $conn;
    mysqli_query($conn,"DELETE FROM tb_gas WHERE `tb_gas`.`id_gas` = $id_gas"); 
    return mysqli_affected_rows($conn);
}

function hapusGalon($id_galon){
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_galon WHERE `tb_galon`.`id_galon` = $id_galon");
    return mysqli_affected_rows($conn);
}
?>