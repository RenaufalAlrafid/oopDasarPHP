<?php 


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




?>