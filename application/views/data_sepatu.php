<?php
if ($merk === 'Nike'){
    $harga = "Rp 375,000";
}elseif($merk === 'Adidas'){
    $harga = "Rp 300,000";
}elseif($merk === 'Kickers'){
    $harga = "Rp 250,000";
}elseif($merk === 'Eiger'){
    $harga = "Rp 275,000";
}elseif($merk === 'Bucherri'){
    $harga = "Rp 400,000";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data Sepatu</title>
    <link rel="stylesheet" href="<?= base_url();?>assets/css/sepatu.css">
</head>
<body>
    <center>
        <div class="container">
        <header>
        <hgroup>
                <h1>Shoes Shop</h1>
                <h3>Menjual macam macam sepatu</h3>
            </hgroup>
        </header>
        <table>
            <tr>
                <td colspan="3">
                  <h3 style="text-align: center;">Data Transaksi</h3>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>:</td>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <th>NO telp</th>
                <td>:</td>
                <td><?= $telp; ?></td>
            </tr>
            <tr>
                <th>Merk</th>
                <td>:</td>
                <td><?= $merk; ?></td>
            </tr>
            <tr>
                <th>Ukuran</th>
                <td>:</td>
                <td><?= $ukuran; ?></td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>:</td>
                <td><?= $harga; ?></td>
            </tr>
        </table>
        <a href="<?= base_url('Sepatu'); ?>"><input class="kembali" type="button" value="Kembali"></a>
        <footer>
            <h5 class="copy"> Jhon Patarick Kennedy | Tugas Pertemuan 7</h5>
        </footer>
        </div>
    </center>
</body>
</html>