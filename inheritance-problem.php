<?php


class Produk{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain;

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 5000, $jmlHalaman = 0, $waktuMain = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain; 
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
	public function getInfoProduk(){
		$str = "Komik: {$this->getLabel()}| $this->penerbit| (Rp. $this->harga) - $this->jmlHalaman Halaman."; 
		return $str;
	}
}

class Game extends Produk {
	public function getInfoProduk(){
		$str = "Game: {$this->getLabel()}| $this->penerbit| (Rp. $this->harga) ~ $this->waktuMain Jam."; 
		return $str;
	}
}

class cetakInfoProduk {
	public function cetak( Produk $produk){ //menggunakan kelas lain harus mendeklarasikan Class lain
		$str = "{$produk->getLabel()}, $produk->harga";
		return $str;
	}
}

$produk1 = new Komik("Boruto","Matsuyama","Gramedia",25000,100,0);
$produk2 = new Game("One Piece","Matsuyama","LK21",40000, 0,2);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
$produk3 = new cetakInfoProduk();
echo $produk3->cetak($produk1);
echo "<br>";
 
?>