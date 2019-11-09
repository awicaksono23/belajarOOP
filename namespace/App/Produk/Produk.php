<?php namespace App\Produk;

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

 ?>