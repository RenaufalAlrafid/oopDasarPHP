<?php 
//* jualan Produk komik dan game 

use cetakInfoProduk as GlobalCetakInfoProduk;


interface infoProfuk{
    public function getInfoProduk();
}

abstract class Produk{
    //property
    protected
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon;


    //method
    public
    function getLabel(){
        return"$this->penulis , $this->penerbit";
    }

    //magic method
    public
    function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    abstract public function getinfo();
    
    

    public function getDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getJudul(){
        return $this->judul;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }
    public function getPenulis(){
        return $this->penulis;
    }

    public function setJudul($judul)
    {
        if(!is_string($judul)){
            throw new Exception("judul harus string", 1);
            
        }
        $this->judul = $judul;
    }
    public function setPenulis($penulis)
    {
        if(!is_string($penulis)){
            throw new Exception("judul harus string", 1);
            
        }
        $this->penulis = $penulis;
    }
    public function setPenerbit($penerbit)
    {
        if(!is_string($penerbit)){
            throw new Exception("judul harus string", 1);
            
        }
        $this->penerbit = $penerbit;
    }
    
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

}


class Komik extends Produk implements infoProfuk {
    public $jmlhalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0, $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    public 
    function getInfoProduk(){
        $str = "Komik : " . $this->getInfo(). " - {$this -> jmlHalaman} Halaman";

        return $str;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Game extends Produk implements infoProfuk{
    public $wktMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0, $wktMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktMain = $wktMain;
    }
    public 
    function getInfoProduk(){
        $str = "Game : " . $this->getInfo(). " - {$this -> wktMain} jam";

        return $str;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }


}

class cetakInfoProduk{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[]= $produk;
    }
    
    public function cetak(){
        $str = "Daftar Produk : <br>";

        foreach ($this->daftarProduk as $a) {
            $str .= "- {$a->getInfoProduk()}<br>";
        }

        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi", "YOLO", 30000, 100);
$produk2 = new Game("NBA2K", "Masashi", "YOLO JUGA", 90000 ,50);


$cetakProduk = new GlobalCetakInfoProduk();

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();





// komik:Masashi , YOLO
// game:Masashi , YOLO JUGA
// Naruto | Masashi , YOLO (Rp. 30000)


// komik : Naruto | Penulis Penerbit (harga) - 100 halaman 
// game : NBA2K | Penulis Penerbit (harga) ~ 50 jam






?>