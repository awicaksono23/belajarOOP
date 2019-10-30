<?php
//public : bisa digunakan dimana saja, bahkan diluar kelas
//protected : hanya dapat digunakan didalam sebuah kelas beserta turunannya tidak bisa d panggil di echo
//private: hanya dapat digunakan hanya pada sebuah kelas tertentu saja dan tidak akan bisa di ubah kecuali pada function di kelasnya
//untung menghindari bug atau agar org lain tidak dapat mengubah" nilai dari sebuah property 

class Produk{
	protected $judul,
		   $penulis,
		   $penerbit;
 	
 	protected $diskon = 0;
	private $harga;

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga; 
	}

	public function getHarga(){
		return $this->harga - ($this->harga * $this->diskon / 100); // jika diskon tidak di set diparameter maka akan diskon akan bernilai 0
	}

	public function getLabel(){
		return "$this->judul, $this->penulis";
	}

	public function getInfoProduk(){
		$str = " {$this->getLabel()}, $this->penerbit, (Rp. $this->harga)"; 
		return $str;	
	}
	public function setDiskon($diskon){
		return $this->diskon = $diskon;
	}
}

class Komik extends Produk {
	public $jmlHalaman;
	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;
	}
	public function getInfoProduk(){
		$str = "Komik: ".parent::getInfoProduk(). " $this->jmlHalaman Halaman."; 
		return $str;
	}
	public function getJudul(){
		return $this->judul;
	}
}

class Game extends Produk {
	public $waktuMain;
	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->waktuMain = $waktuMain;
	} 
 

	public function getInfoProduk(){
		$str = "Game: ".parent::getInfoProduk(). " ~ $this->waktuMain Jam."; 
		return $str;
	}
}

class cetakInfoProduk {
	public function cetak( Produk $produk){ //menggunakan kelas lain harus mendeklarasikan Class lain disebelah property
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
// $produk3 = new cetakInfoProduk();
// echo $produk3->cetak($produk1);
echo "<hr>";

$produk4 = new Produk("aaa","bbb","ccc",100000); 
$produk4->setDiskon(50);
echo $produk4->getInfoProduk();
echo "<br>";
echo "Diskon menjadi ".$produk4->getHarga();
 
?>