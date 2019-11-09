<?php namespace App\Produk;

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

 ?>