<?php 
require 'app/init.php';



$produk1 = new Komik("Naruto", "Masashi", "YOLO", 30000, 100);
$produk2 = new Game("NBA2K", "Masashi", "YOLO JUGA", 90000 ,50);


$cetakProduk = new CetakInfoProduk();

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();





// komik:Masashi , YOLO
// game:Masashi , YOLO JUGA
// Naruto | Masashi , YOLO (Rp. 30000)


// komik : Naruto | Penulis Penerbit (harga) - 100 halaman 
// game : NBA2K | Penulis Penerbit (harga) ~ 50 jam






?>