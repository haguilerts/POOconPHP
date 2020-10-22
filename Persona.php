<?php
class Persona{
    public $nombre;
    public $apellido;
    public $sexo;

    const HOMBRE="M";
    public const MUJER="F";

    function __construct($n,$a){
        $this->nombre=$n;
        $this->apellido=$a;
        $this->sexo=self::HOMBRE;
    }
    function verDatos(){
        echo "$this->nombre, $this->apellido<br>";
        echo "Sexo: $this->sexo<br>";
    }
}


// $x=new Persona();
// $x->nombre="juan";
// $x->nombre="juan123";// lo pisa al atrubiro si exite caso caongrario lo crea solo para ese obj
// $x->edad=10;
// echo $x->nombre." ".$x->edad."<br>";
// $x->verDato();
// //-----------------------------
$a=new Persona("Diego","Arzola");
// $a->sexo=$a->MUJER; // nose puede hacer esto con las const!!
$a->sexo=Persona::MUJER;// reasigno el valor sexo, que asignado en el cosntructor
$a->verDatos();
const PRECIOS=11; // asigno un un valor constante 
DEFINE("PRECIO",PRECIOS*2); // reasigno la cosntante por otra cosntante.(loso entre constante se pude reasignar )
echo "Precio: ".PRECIO;