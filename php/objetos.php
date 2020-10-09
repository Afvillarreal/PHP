  
<?php

class PrimeraClase{

    private $nombre;
    private $apellido;
    private $edad;

    //Declarando un constructor

    public function __construct($entradaombre,$entradapellido,$entradedad){
        $this->nombre = $entradaombre;
        $this->apellido = $entradapellido;
        $this->edad = $entradedad;
    }

    function cuadrado($num)
    {
        return $num * $num;
    }
    
    echo cuadrado(4);   // imprime '16'.

    public function imprimir()
    {
        echo $this->nombre;
        echo "<br>";
        echo $this->apellido;
        echo "<br>";
        echo $this->edad;
    }
}

$objeto=new PrimeraClase("Felipe","villarreal","21");
$objeto->imprimir();

?>