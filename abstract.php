<?php
//kelas yang tidak bisa di instansiasi, harus dari kelas turunan
//minimal memiliki 1 method abstrak
abstract class Buah{

	private $warna;

	// setiap kelas turunan Harus mengimplementasikan method yang ada di abstrak
	abstract public function makan(); 

	public function setWarna($warna){
		$this->warna = $warna;
	}

	public function getWarna(){
		return $this->warna; //untuk PRINT
	}
}

class Pisang extends Buah{

	public function makan(){
		$this->setWarna("Kuning");
		$str = "Ini adalah buah ".__CLASS__." dan berwarna : {$this->getWarna()} ";
		return $str;
	}

}


class Apel extends Buah{
	public function makan(){
		$this->setWarna("Red");
		$str = "Ini adalah buah ".__CLASS__." dan bertwarna : {$this->getWarna()}";
		return $str;
	}
}

 
$buah1 = new Pisang();
echo $buah1->makan();

$buah2 = new Apel();
echo $buah2->makan();
?>