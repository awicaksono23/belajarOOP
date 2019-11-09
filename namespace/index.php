<?php

require_once 'App/init.php';

// $produk1 = new Komik("Boruto","Matsuyama","Gramedia",25000,100);
// $produk2 = new Game("One Piece","Matsuyama","LK21",40000,2);

// $newObj = new cetakInfoProduk();
// $newObj->tambahProduk($produk1);
// $newObj->tambahProduk($produk2);
// echo $newObj->cetak();
 
use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();
?>