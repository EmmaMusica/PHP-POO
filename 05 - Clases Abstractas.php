<?php


include 'includes/header.php';

//CLASES ABSTRACTAS

//son las clases que no se pueden instanciar. Solamente se pueden heredar.

abstract class Transporte {
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


//creamos clase bicicleta
class Bicicleta extends Transporte {

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad para " . $this->capacidad . " persona(s). Y NO GASTA GASOLINA";
    }
}

//creamos clase automovil
class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
    }
    public function getTransmision() : string{
        return $this->transmision;
    }
}


//instanciamos bicicleta
$bicicleta = new Bicicleta(2,1);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();


echo "<hr>";


//instanciamos auto
$auto = new Automovil(4, 4, "Manual");
echo $auto ->getInfo();
// echo $auto->getRuedas();
echo $auto->getTransmision();


include 'includes/footer.php';

/*cuando nombramos 2 metodos iguales, uno en la clase padre y otro en la clase hijo, El del hijo se va a reescribir.
Por eso podemos nombrar metodo getInfo en clase Transporte y getInfo en clase Bicicleta*/