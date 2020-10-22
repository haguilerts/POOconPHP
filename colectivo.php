<?php
 abstract class  Padre{
    //atributos
    private $nombre;
    private $edad;

    //métodos
    public function Padre($n, $e)//constructor
    {
        $this->nombre = $n;
        $this->edad = $e;
    }
    public function saludar(){
        echo "Hola ".$this->nombre." tienes ".$this->edad." años de edad";
        echo "<br>Bienvenid@<br><br><hr>";
    }
}

class Hijo extends Padre{
    private $juego;
    public function setJuego($j){
        $this->juego=$j;
    }
    public function getJuego(){
        return  $this->juego;
    }
}

class Hijo2 extends Padre{
    public function saludar(){
        // Padre::saludar(); // lo mismo q el de abajo
        parent::saludar();
        echo"<br> sola soy otro objet";
    }
}
// como se agrego abstact a la clase y no puedo instanaciar.
// $objPadre=new Padre("Diego",45);
// $objPadre->saludar();

$objHijo=new Hijo("Dieguito",5);
$objHijo->setJuego("monopolio");
echo "juego: ".$objHijo->getJuego()."<br>";
$objHijo->saludar();

$objHijo2=new Hijo2("Laura",2);
$objHijo2->saludar();

