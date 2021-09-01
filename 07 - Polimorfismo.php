<?php

use Automovil as GlobalAutomovil;
use Transporte as GlobalTransporte;
use TransporteInterfaz as GlobalTransporteInterfaz;

include 'includes/header.php';

/*  El Polimorfismo nos dice que PHP POO tiene la caracteristica de que las clases pueden poseer una misma interface
pero que cada clase podría tener un formato o funciones extras. Habla entonces de distintas formas en cada clase. 
Pero que si tenemos una interface, también debemos respetarla. */




interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}


class Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad para " . $this->capacidad . " persona(s).";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Automovil extends GlobalTransporte implements GlobalTransporteInterfaz {
    public function __construct( protected int $ruedas, protected int $capacidad, protected string $color)
    {
    }
    public function getInfo() : string {
        return "El transporte Auto tiene " . $this->ruedas . " ruedas y una capacidad para " . $this->capacidad . " persona(s). Y el color " . $this->color;
    }

    public function getColor() : string {
        return "El color es: " . $this -> color;
    }
}

echo "<pre>";
var_dump($transporte = new GlobalTransporte(8, 20, "Rojo"));
var_dump($auto = new GlobalAutomovil(4, 4, "Rojo"));

echo $transporte->getInfo();
echo "<br>";
echo $auto->getInfo();
echo "<br>";

echo $auto->getColor();

echo "</pre>";





include 'includes/footer.php';
