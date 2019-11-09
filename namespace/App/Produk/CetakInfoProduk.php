<?php namespace App\Produk;

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


 ?>