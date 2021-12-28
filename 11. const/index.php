<?php 

// define("nama", "Renaufal"); // gak bisa buat class

// echo nama;

// echo'<br>';

// const umur = 32;

// echo umur;

// echo'<br>';

// class Coba {
//     const nama = 'Renaufal';
// }

// echo Coba::nama; 


//* magic Constant

// echo __FILE__;



function COBA(){
    return __FUNCTION__;
}
echo COBA();


class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;

echo $obj->kelas;

















?>