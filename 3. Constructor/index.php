<?php 
//* jualan Produk komik dan game 


class Produk{
    //property
    public 
    $judul,
    $penulis,
    $penerbit,
    $harga;

    //method
    public
    function getLabel(){
        return"$this->penulis , $this->penerbit";
    }

    //magic method
    public
    function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0 ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
}

$produk1 = new Produk("Naruto", "masashi", "YOLO", 30000);
$produk2 = new Produk("NBA2l", "masashi", "YOLO JUGA", 30000);

echo "komik:" . $produk1->getLabel();
echo"<br>";
echo "game:" . $produk2->getLabel();



?>