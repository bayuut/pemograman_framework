<?php 
//class mobil
class Mobil{
    public $nama;
    public $merk;

   /* function getInfo(){
        echo "Nama mobil:".$this->nama."<br/>";
        echo "Merk : ".$this->merk."<br/>";
    }*/
    function getInfo($a){
        echo "Nama mobil:".$this->nama."<br/>";
        echo "Merk : ".$this->merk."<br/>";
    }
}

//bagian main
$ferari = new Mobil();
$ferari->nama="xxx";
$ferari->merk="aaa";

$ferari->getInfo($a);
echo "<hr/>";
$jeep = new Mobil();
$jeep->nama="JEEP";
$jeep->merk="bbbb";

$jeep->getInfo($a);

// KESIMPULAN : Jika nama method sama dalam kasus getInfo maka akan terjadi eror.
?>