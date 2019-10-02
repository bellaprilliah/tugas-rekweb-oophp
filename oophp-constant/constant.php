<?php
//define('Nama', 'Ayu Anisa N');
//echo Nama;

//echo "<br>";

//const Umur = 20;
//echo Umur;

//class Coba {
    //const Nama = 'Ayu Anisa N';
//}

//echo Coba::Nama;
//echo "<br>";

//Magic Constant

echo __LINE__;
echo "<br>";

echo __FILE__;
echo "<br>";

class coba{
    public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;
?>