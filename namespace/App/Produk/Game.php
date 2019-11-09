<?php namespace App\Produk;

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

 ?>