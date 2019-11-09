<?php

//kelas yang tidak bisa di instansiasi, harus dari kelas turunan
//minimal memiliki 1 method abstrak

//jika produk tidak akan di instansiasi menjadi objek maka buat saja abstrak

interface InfoProduk{
	public function getInfoProduk();
}

Abstract class Produk{
	protected $judul,
		   $penulis,
		   $penerbit,
 		   $diskon = 0,
		   $harga;

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

	abstract public function getInfo();
	
	public function setDiskon($diskon){
		return $this->diskon = $diskon;
	}
}

class Komik extends Produk implements InfoProduk {
	private $jmlHalaman;
	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;
	}

	//getInfoProduk menggambil dari Implement Class
	public function getInfoProduk(){
		$str = "Komik: ".$this->getInfo(). " $this->jmlHalaman Halaman."; 
		return $str;
	}

	//getInfoProduk menggambil dari Abstract Class
	public function getInfo(){ 
		$str = " {$this->getLabel()}, $this->penerbit, (Rp. $this->harga)"; 
		return $str;	
	}

	public function getJudul(){
		return $this->judul;
	}
}

class Game extends Produk implements InfoProduk {
	private $waktuMain;
	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->waktuMain = $waktuMain; 
	}
	public function getInfo(){
		$str = " {$this->getLabel()}, $this->penerbit, (Rp. $this->harga)"; 
		return $str;	
	} 
	public function getInfoProduk(){
		$str = "Game: ".$this->getInfo(). " ~ $this->waktuMain Jam."; 
		return $str;
	}
}

class cetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk( Produk $produk){
		$this->daftarProduk[] = $produk;
	}

	public function cetak(){ //menggunakan kelas lain harus mendeklarasikan Class lain disebelah property
		$str =  "Daftar Produk : <br>";

		foreach($this->daftarProduk as $p){
			$str .= "- {$p->getInfoProduk()} <br>";
		}
		return $str;
	}

}

$produk1 = new Komik("Boruto","Matsuyama","Gramedia",25000,100);
$produk2 = new Game("One Piece","Matsuyama","LK21",40000,2);

$newObj = new cetakInfoProduk();
$newObj->tambahProduk($produk1);
$newObj->tambahProduk($produk2);
echo $newObj->cetak();


?>