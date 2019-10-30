<?php

class car{
	//property
	public $nama = "X12",
		   $merk = "Lambo",
		   $warna = "Merah",
		   $harga = 0;

	public function getLabel() {
		return "$this->nama, $this->merk";
	}
}
// $produk1 = new car();
// $produk1->nama = "nana";
// var_dump($produk1);
// echo "<br>";
// $produk2 = new car();
// var_dump($produk2->nama);


$produk3 = new car(); 

echo $produk3->getLabel();

?>