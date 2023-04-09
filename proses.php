<!DOCTYPE html>
<html>
<head>
    <style>
        .container{
            margin: 0 auto;
            width: 500px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            font-size: 16px;
            text-align: center;
            line-height: 1.5;
            background-color: cadetblue;
        }
        h1 {
            font-size: 3em;
        }
    </style>
</head>
<body>
<div class="container">
<?php

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$barang = $_POST['barang'];
$berat = $_POST['berat'];
$bayar = $_POST['bayar'];

switch ($barang) {
    case 'Baju':
        $harga = 10000;
        break;
    case 'Celana':
        $harga = 12000;
        break;
    case 'Jaket':
        $harga = 15000;
        break;
    case 'Sprei':
        $harga = 20000;
        break;
    case 'Karpet':
        $harga = 25000;
        break;
    default:
        $harga = 0;
}

$total = $harga * $berat;

$diskon = 0;
if ($total > 100000){
    $diskon = $total * 0.1;
}
$totalbayar = $total - $diskon;

$kembalian = $bayar - $totalbayar;

if($bayar < $totalbayar){
    die("Maaf, uang pembayaran kurang dari total harga belanja");
}

echo "<h1>Laundry RM</h1>";
echo "Berikut adalah rincian pembayaran : <br>";
echo "Nama : " .$nama. "<br>";
echo "Alamat : " .$alamat. "<br>";
echo "Jenis Barang : " .$barang. "<br>";
echo "Berat : " .$berat. " kg<br>";
echo "Harga : Rp.  ".number_format($harga,0,',','.'). " /kg<br>";
echo "Total : Rp. ".number_format($total,0,',','.'). "<br>";
if($diskon > 0){
    echo "Selamat, Anda mendapatkan diskon 10% sebesar Rp. ".number_format($diskon,0,',','.'). "<br>";
}
echo "Total Bayar : Rp. ".number_format($totalbayar,0,',','.'). "<br>";
echo "Pembayaran : Rp. ".number_format($bayar,0,',','.'). "<br>";
echo "Kembalian : Rp. ".number_format($kembalian,0,',','.'). "<br>";
echo "<hr>";
echo "<p>Terima kasih telah menggunakan layanan kami</p>";

?>
</div>
</html>