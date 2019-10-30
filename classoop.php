<?php
//property = variabel
//method = function / perilaku
class product{
	public $nama = "Agung",
		   $color = "red";

	public function myBiodata(){
		return "Hello This is my biodata: ".$this->nama;
	}
}

//object 
$product1 = new product(); 
$product1->nama = "Changed as Aws";

$product2 = new product();
$product2->nama = "gadel"; 

//method
echo $product2->myBiodata();
?>