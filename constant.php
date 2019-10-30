<?php 
// Define tidak dapat di simpan di dalam kelas sebagai konstanta global 
// Const bisa dimasukkan dalam kelas sehingga bisa di gunakaan di OOP

class Constant{
	// define("Nama","Agung Wicaksono"); tidak bisa di dalam kelas.
	const Admin = "Agung"; //cara memanggilnya seperti static
}

// echo __Line__; baris ke 10
// echo __FILE__; alamat file C:\xampp\htdocs\BelajarOOP\constant.php
// echo __DIR__; lamat FOLDER C:\xampp\htdocs\BelajarOOP\
// CLASS,FUNCTION
public function coba(){
	return __FUNCTION__;
}

echo coba();

 ?>
