<?php 




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
