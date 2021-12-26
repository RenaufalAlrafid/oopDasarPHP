<?php 
//* jualan Produk komik dan game 


class Produk{
    //property
    public 
    $judul ="judul", 
    $penulis = "penulis", 
    $penerbit= "penerbit", 
    $harga= 0;

    //method
    public
    function getLabel(){
        return"$this->penulis , $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk2 = new Produk();
// $produk1->judul="Naruto";
// $produk2->judul="yolo";
// $produk2->tambahProperty ="yolo";
// var_dump($produk1);
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul='Naruto';
$produk3->penulis='Masahsi';
$produk3->penerbit='yolo';
$produk3->harga=30000;

// var_dump($produk3);

// echo"komik : $produk3->penulis, $produk3->penerbit";
// echo"<br>";
// echo $produk3->getLabel();


$produk4 = new Produk();
$produk4->judul='NBA2K';
$produk4->penulis='2K';
$produk4->penerbit='2K';
$produk4->harga=30000;

echo "komik:" . $produk3->getLabel();
echo"<br>";
echo "game:" . $produk4->getLabel();



?>