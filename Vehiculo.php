<?php

class Vehivulo {
    private $patente;
    private $modelo;
    private $km;
    // function __construct(){}
    public function Vehiculo($pat,$mod,$km){
        $this->patente=$pat;
        $this->modelo=$mod;
        $this->km=$km;
    }
    public function setPatente($pat){
        $this->patente=$pat;
    }
    public function setmodelo($mod){
        $this->modelo=$mod;
    }
    public function setKm($km){
        $this->km=$km;
    }
    public function getPatente(){
        return this->patente;
    }
    public function getmodelo(){
        return this->modelo;
    }
    public function getKm(){
         return this->km;
    }    
}


$obj=new Vehiculo("123a","audi",24000);
echo $obj->getModelo();

$obj->setModelo("Fiat");
echo "<br>".$obj->getModelo();

$obj2=new Vehiculo();
$obj2->setModelo("Fiat");
echo "<br>".$obj2->getModelo();
