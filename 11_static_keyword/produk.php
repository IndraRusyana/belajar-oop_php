<?php  
// jualan produk
// komik
// game
// class Produk{
// 	private $judul,
// 		    $penulis,
// 		    $penerbit,
// 		    $harga,
// 		    $diskon = 0;

// 	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
// 		$this->judul = $judul;
// 		$this->penulis = $penulis;
// 		$this->penerbit = $penerbit;
// 		$this->harga = $harga;
		
// 	}

// 	public function getLabel(){
// 		return "$this->penulis, $this->penerbit";
// 	}

// 	public function getInfoProduk(){
// 		// komik : Naruto | Mashashi Kishimoto, Shounen Jump (Rp. 30000) - 100 Halaman.
// 		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

// 		return $str;
// 	}

// 	public function setJudul($judul){
// 		return $this->judul = $judul;
// 	}

// 	public function getJudul(){
// 		return $this->judul;
// 	}

// 	public function setPenulis($penulis){
// 		return $this->penulis = $penulis;
// 	}

// 	public function getPenulis(){
// 		return $this->penulis;
// 	}

// 	public function setPenerbit($penerbit){
// 		return $this->penerbit = $penerbit;
// 	}

// 	public function getPenerbit(){
// 		return $this->penerbit;
// 	}

// 	public function setDiskon($diskon){
// 		$this->diskon = $diskon;
// 	}

// 	public function getHarga(){
// 		return $this->harga - ( $this->harga * $this->diskon / 100 );
// 	}
// }

// class Komik extends Produk{
// 	public $jmlHalaman;

// 	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ){

// 		parent::__construct( $judul, $penulis, $penerbit, $harga );

// 		$this->jmlHalaman = $jmlHalaman;
// 	}

// 	public function getInfoProduk(){
// 		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman";

// 		return $str;
// 	}
// }

// class Game extends Produk{
// 	public $wktMain;

// 	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $wktMain = 0 ){

// 		parent::__construct( $judul, $penulis, $penerbit, $harga );

// 		$this->wktMain = $wktMain;
// 	}

// 	public function getInfoProduk(){
// 		$str = "Game : " . parent::getInfoProduk() . " - {$this->wktMain} Jam";

// 		return $str;
// 	}
// }

// class CetakInfoProduk{
// 	public function cetak (Produk $produk ){
// 		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
// 		return $str;
// 	}
// }


// $produk1 = new Komik("naruto", "Masashi kishimoto", "shounen jump", 3000, 100);
// $produk2 = new Game("uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// echo $produk1->getInfoProduk();
// echo "<br>";
// echo $produk2->getInfoProduk();
// echo "<hr>";

// $produk2->setDiskon(40);
// echo $produk2->getHarga();
// echo "<hr>";

// $produk1->setJudul("judulbaru");
// echo $produk1->getJudul();
// echo "<br>";
// $produk1->setPenulis("Penulisbaru");
// echo $produk1->getPenulis();
// echo "<br>";
// $produk1->setPenerbit("Penerbitbaru");
// echo $produk1->getPenerbit();

// 

/**
* 
*/
class Contoh{
	public static $angka = 1;
	
	public function halo(){
		return "Halo " . self::$angka++ . " kali. <br>";
	}
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();


?>