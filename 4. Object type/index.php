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

class cetakInfoProduk{
    public
    function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi", "YOLO", 30000);
$produk2 = new Produk("NBA2K", "Masashi", "YOLO JUGA", 30000);

echo "komik:" . $produk1->getLabel();
echo"<br>";
echo "game:" . $produk2->getLabel();
echo"<br>";
$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1);


?>