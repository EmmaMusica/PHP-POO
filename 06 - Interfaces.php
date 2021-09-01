<?php include 'includes/header.php';


/*Una interfaz es como tener un plano, cómo debe de ser la clase, qué forma debe de tener, qué funciones debe de tener
y qué datos deben de retornar para que podamos implementar correctamente.
Nos dice qué hace una clase, qué funciones tiene y que datos retorna. Es como un plano.
*/

///interfaz
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

include 'includes/footer.php';
