<?php

class Dinero {
    public $plata;  
    public  static $billete=123;  

    public function mostrarDinero(){
        echo "plata: ".$this->plata."<br>";
        echo "Billete: ".self::$billete."<br>";
    }
    public function mostrarbillete($b){
        return self::$billete=$b;
    }
    public static function mosbillete($b){
        echo self::$billete."<br>";
        return self::$billete=$b;
    }
    public static function saludar(){
        echo "<br> hola mundo";
    }
}
$obj=new Dinero();
$obj->plata=500;
$obj->mostrarDinero();
echo "ObjCreado: ".$obj->mostrarbillete(145236)."<br>";
echo "Class :".Dinero::mosbillete(321)."<br>";

Dinero::saludar();
Dinero::$billete;




// http://localhost:8118/fullStack%20PHP/POO/Dinero.php
