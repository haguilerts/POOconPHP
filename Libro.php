<?php
// echo "libros";
abstract class Libro{
    private $nombre;
    private $autor;
    private $cantidadDeHojas;
    private $generoLiterario;
    private $editorial;
     function __construct($n,$a,$c,$g,$e)
     {
         $this->nombre=$n;
         $this->autor=$a;
         $this->cantidadDeHojas=$c;
         $this->generoLiterario=$g;
         $this->editorial=$e;
     }
     public function mostrar(){
         echo "Mi libro favorito es: ".$this->nombre." - cuyo autor es: ".$this->autor." y genero literario: ".$this->generoLiterario."<br>";
     }
}
class Cuento extends Libro{
    public $año;
    public function getAño(){
        echo "creado en el Año: ".$this->año."<br>";
    }
}
/* a la clase abstrac padre solo se puede acceder a raves del hijo */
// $objeto=new Libro("El corazón Delator","Edgar Alan Pou","15","suspenso","rayuela");
// $objeto->mostrar();

$objeto2=new Cuento("la 50 sombras de gay","martin fierro","100","dramatica","salesiana");
$objeto2->mostrar();
$objeto2->año=1995;
$objeto2->getAño();
$objeto2->nombre="historia Contemporania";// solo lo puedo inicializar 
$objeto2->surname="jorje 123";
$objeto2->mostrar();
echo $objeto2->nombre;
echo $objeto2->surname;














