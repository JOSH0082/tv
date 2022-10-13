<?php
include('functions.php');
$dataDataGalon = query("SELECT * FROM tb_galon");
$dataDataGas = query("SELECT * FROM tb_gas");
?>
<title>Toko Villa Lima</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!-- table galon -->
<h1 class="display-4 text-center mt-2">Data Galon</h1>
<div class="container-sm table-responsive">
<table class="table table-striped table-hover">
<tr class="table-dark">
    <td>
        No
    </td>

    <td>
        Jumlah Galon
    </td>
    <td>
        Total Harga Galon
    </td>
    <td>
        Alamat Pembeli Galon
    </td>
    <td>
        Waktu Beli
    </td>

    <td>
        Aksi
    </td>
</tr>
    <?php
        $no = 1;
        foreach($dataDataGalon as $data):
    ?>
    <tr>
    <td>
        <?= $no++; ?>
    </td>

    <td>
        <?= $data['jumlah_galon']; ?>
    </td>
    <td>
        <?= $data['harga_galon']; ?>
    </td>
    <td>
        <?= $data['pembeli_galon']; ?>
    </td>
    <td>
        <?= $data['waktu_beli']; ?>
    </td>

    <td>
        <a href="hapus_galon.php?no_buku=<?= $data['id_galon']; ?>"><button class="btn btn-outline-danger" onclick="return confirm('YAKIN INIGN MENGHAPUS?')">Hapus</button></a>
    </td>
    </tr>
    <?php endforeach; ?>
</table>
</div>

<hr>

<!-- table Gas -->
<h1 class="display-4 text-center mt-2">Data Gas</h1>
<div class="container-sm table-responsive">
<table class="table table-striped table-hover">
<tr class="table-dark">
    <td>
        No
    </td>

    <td>
        Jumlah Gas
    </td>
    <td>
        Jenis Gas
    </td>
    <td>
        Harga Gas
    </td>
    <td>
        Alamat Pembeli
    </td>
    <td>
        Waktu Beli
    </td>

    <td>
        Aksi
    </td>
</tr>
    <?php
        $no = 1;
        foreach($dataDataGas as $data):
    ?>
    <tr>
    <td>
        <?= $no++; ?>
    </td>

    <td>
        <?= $data['jumlah_gas']; ?>
    </td>
    <td>
        <?= $data['jenis_gas']; ?>
    </td>
    <td>
        <?= $data['harga_gas']; ?>
    </td>
    <td>
        <?= $data['pembeli_gas']; ?>
    </td>
    <td>
        <?= $data['waktu_beli']; ?>
    </td>

    <td>
        <a href="hapus_gas.php?no_buku=<?= $data['id_gas']; ?>"><button class="btn btn-outline-danger" onclick="return confirm('YAKIN INIGN MENGHAPUS?')">Hapus</button></a>
    </td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
