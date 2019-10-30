<?php


class produk{
	public $judul,$penulis;

	public function __construct($judul = "Judul", $penulis = "Penulis", $harga = 5000){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->harga = $harga;
	}

	public function getLabel(){
		return "$this->judul, $this->penulis";
	}
}

class cetakInfoProduk{
	public function cetak( Produk $produk){
		$str = "{$produk->getLabel()}, $produk->harga";
		return $str;
	}
}

$objek1 = new produk("Boruto","Matsuyama",900);
echo $objek1->getLabel()."<br>";


$objek2 = new cetakInfoProduk(); 
echo $objek2->cetak($objek1);

?>