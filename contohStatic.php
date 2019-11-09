<?php 
//Nilai static akan selalu tetap meskipun object di instansiasi berulang kali
//cara memanggil static : Class::function()
class contohStatic{
	public $harga = 50; //ketika objek baru di instansiasi nilai akan berulang 50 50 50 50 50 ($this->)
	public static $no = 1; //ketika objek baru di instansiasi nilai akan tetap 1 2 3 4 5 (self::)

	public function hallo(){
		return self::$no++." Hallo my name is ".$this->harga;
	}
 
}

$obj = new contohStatic();
echo $obj->hallo(); //tanpa instansiasi objek
echo "<br>"; 
echo $obj->hallo(); //tanpa instansiasi objek
echo "<br>"; 
echo $obj->hallo(); //tanpa instansiasi objek
echo "<br>"; 

$obj1 = new contohStatic();
echo $obj1->hallo(); //tanpa instansiasi objek
echo "<br>"; 
echo $obj1->hallo(); //tanpa instansiasi objek
echo "<br>"; 
echo $obj1->hallo(); //tanpa instansiasi objek
echo "<br>"; 
echo contohStatic::hallo()
 ?>