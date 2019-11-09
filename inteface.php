<?php 
//hanya deklarasinya saja
//kelas yang murni untuk template kelas turunannya
//tidak boleh ada property, hanya method nya saja
//tiap method harus ada di kelas implement nya
//harusw public
//membolehkan __construct() 

//satu kelas boleh mengimplementasikan banyak interface

interface Buah{
	public function makan();
	public function setWarna($warna);
}

interface Benda{
	public function setUkuran($ukuran);
}

//ketika mengimplementasikan kelas, maka semua method yang ada dikelas harus di deklarasikan
class Apel implements Buah, Benda{
	protected $warna,
			  $ukuran;
	public function makan(){
		//kunyah
	}
	public function setWarna($warna){
		$this->warna = $warna; 
	}
	public function setUkuran($ukuran){
		$this->ukuran = $ukuran;
	}
}

 ?>