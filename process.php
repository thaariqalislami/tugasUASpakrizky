<?php
$nama_barang = $_POST['nama_barang'];
$kode_barang = $_POST['kode_barang'];  
$merk = $_POST['merk']; 
$prosesor = $_POST['prosesor'];
$fitur = $_POST['fitur'];


if($merk == 'asus'){
    $hapok = 10000000;
}elseif ($merk == 'acer') {
    $hapok = 9000000;
}elseif ($merk == 'lenovo') {
    $hapok = 8000000;
}

if($prosesor == 'i3'){
    $procesor = 3000000;
}elseif ($prosesor == 'i5') {
    $procesor = 5000000;
}

$total= $hapok + $procesor;


if($kode_barang == 'p001'){
    $warna = 'Putih';
}elseif ($kode_barang == 'm001') {
    $warna = 'Merah';
}elseif ($kode_barang == 'h001') {
    $warna = 'Hitam';
}



?>
<table>
    <tr>
        <td>Nama Barang : <?php echo ucwords($nama_barang); ?></td>
    </tr>
    <tr>
        <td>Warna : <?php echo ucwords($warna   ); ?></td>
    </tr>
    <tr>
        <td>Merk : <?php echo ucwords($merk); ?></td>
    </tr>
    <tr>
        <td>Prosesor : <?php echo ucwords($prosesor); ?></td>
    </tr>
    <tr>
        <td>Fitur : <?php echo ucwords($fitur); ?></td>
    </tr>

    <tr>
        <td>Total Harga : <?php echo $total; ?></td>
    </tr>
</table>