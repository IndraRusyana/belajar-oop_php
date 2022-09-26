<?php  
// jualan produk
// komik
// game

require_once 'App/init.php';

$produk1 = new Komik("naruto", "Masashi kishimoto", "shounen jump", 3000, 100);
$produk2 = new Game("uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";
$test = new Coba();

echo "<hr>";
var_dump($produk1);


?>