<?php  


// jualan produk
// komik
// game
class Produk{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

$produk1 = new Produk();
$produk2 = new Produk();

$produk3 = new produk();
$produk3->judul = "naruto";
$produk3->penulis = "Masashi kishimoto";
$produk3->penerbit = "shounen jump";
$produk3->harga = "3000";

$produk4 = new produk();
$produk4->judul = "uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = "250000";

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel(); 


?>