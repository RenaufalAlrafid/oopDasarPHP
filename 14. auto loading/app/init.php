<?php 

// require 'produk/infoProduk.php';
// require 'produk/Produk.php';
// require 'produk/Komik.php';
// require 'produk/Game.php';
// require 'produk/cetakInfoProduk.php';

spl_autoload_register(function($class){
    require_once __DIR__. 'produk/' . $class . '.php';
});
?>