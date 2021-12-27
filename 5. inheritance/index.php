<?php 
//* jualan Produk komik dan game 


class Produk{
    //property
    public 
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain,
    $tipe;

    //method
    public
    function getLabel(){
        return"$this->penulis , $this->penerbit";
    }

    //magic method
    public
    function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0, $jmlHalaman= 0, $waktumain=0, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this -> jmlHalaman = $jmlHalaman;
        $this -> waktuMain = $waktumain;
        $this -> tipe = $tipe;
    }

    public
    function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if($this ->tipe == "komik"){
            $str .= "-{$this->jmlHalaman} Halaman";
        } else if($this-> tipe == "game"){
            $str .= "-{$this->waktuMain} jam";
        }

        return $str;
    }


}

class cetakInfoProduk{
    public
    function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi", "YOLO", 30000, 100, null, "komik");
$produk2 = new Produk("NBA2K", "Masashi", "YOLO JUGA", 30000 , null, 50, "game");


echo $produk1->getInfoLengkap();
echo"<br>";
echo $produk2->getInfoLengkap();




// komik:Masashi , YOLO
// game:Masashi , YOLO JUGA
// Naruto | Masashi , YOLO (Rp. 30000)


// komik : Naruto | Penulis Penerbit (harga) - 100 halaman 
// game : NBA2K | Penulis Penerbit (harga) ~ 50 jam






?>