
<?php
//membuat method dikelas child yang memiliki nama yang sama dengan method di kelas parentnya atau menimpa method dikelas parent


class Produk{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 5000){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga; 
	}

	public function getLabel(){
		return "$this->judul, $this->penulis";
	}

	public function getInfoProduk(){
		$str = " {$this->getLabel()}, $this->penerbit, (Rp. $this->harga)"; 
		return $str;	
}

}

class Komik extends Produk {
	public $jmlHalaman;
	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoProduk(){
		$str = "Komik: ".parent::getInfoProduk(). " $this->penerbit| (Rp. $this->harga) - $this->jmlHalaman Halaman."; 
		return $str;
	}
}

class Game extends Produk {
	public $waktuMain;
	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->waktuMain = $waktuMain;
	}
	public function getInfoProduk(){
		$str = "Game: ".parent::getInfoProduk(). " $this->penerbit| (Rp. $this->harga) ~ $this->waktuMain Jam."; 
		return $str;
	}
}

class cetakInfoProduk {
	public function cetak( Produk $produk){ //menggunakan kelas lain harus mendeklarasikan Class lain
		$str = "{$produk->getLabel()}, $produk->harga";
		return $str;
	}
}

$produk1 = new Komik("Boruto","Matsuyama","Gramedia",25000,100);
$produk2 = new Game("One Piece","Matsuyama","LK21",40000,2);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
$produk3 = new cetakInfoProduk();
echo $produk3->cetak($produk1);
echo "<br>";
 
?>