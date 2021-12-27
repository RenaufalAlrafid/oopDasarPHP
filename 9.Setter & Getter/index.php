<?php 
//* jualan Produk komik dan game 

use Produk as GlobalProduk;

class Produk{
    //property
    private
    $judul,
    $penulis,
    $penerbit,
    $harga;

    protected 
    $diskon = 0;


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

    public
    function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function setDiskon($diskon)
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

}


class Komik extends GlobalProduk{
    public $jmlhalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0, $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    public 
    function getInfoProduk(){
        $str = "Komik : " . parent::getInfoProduk(). " - {$this -> jmlHalaman} Halaman";

        return $str;
    }
}

class Game extends GlobalProduk{
    public $wktMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0, $wktMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktMain = $wktMain;
    }
    public 
    function getInfoProduk(){
        $str = "Game : " . parent::getInfoProduk(). " - {$this -> wktMain} jam";

        return $str;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    
    
}

class cetakInfoProduk{
    public
    function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi", "YOLO", 30000, 100);
$produk2 = new Game("NBA2K", "Masashi", "YOLO JUGA", 90000 ,50);


echo $produk1->getInfoProduk();
echo"<br>";
echo $produk2->getInfoProduk();
echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setJudul("yoman");
echo $produk1 -> getJudul();





// komik:Masashi , YOLO
// game:Masashi , YOLO JUGA
// Naruto | Masashi , YOLO (Rp. 30000)


// komik : Naruto | Penulis Penerbit (harga) - 100 halaman 
// game : NBA2K | Penulis Penerbit (harga) ~ 50 jam






?>