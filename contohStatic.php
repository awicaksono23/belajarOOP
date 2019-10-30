<?php 
//Nilai static akan selalu tetap meskipun object di instansiasi berulang kali

class contohStatic{
	public static $harga = 50; //ketika objek baru di instansiasi nilai akan berulang 50 50 50 50 50 ($this->)
	public static $no = 1; //ketika objek baru di instansiasi nilai akan tetap 1 2 3 4 5 (self::)

	public static function hallo(){
		return self::$no++." Hallo my name is ".self::$harga;
	}

}
 
echo contohStatic::hallo();
 ?>