<?php 
declare(strict_types = 1);

include 'includes/header.php';


//Definir una clase y definir sus propiedades/atributos y metodos (es la abstraccion de la POO) -------------------------------------------


class Producto {

    /*---------FORMA ANTERIO DE DEFINIR UNA CLASE ANTES DE PHP 8 ------
    public $nombre;
    public $precio;
    public $disponible;

    //Empezando el constructor
    public function __construct(string $nombre, int $precio, bool $disponible) 
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
    ------------------------------------------------------------------*/

    //Nueva forma de definir la clase con php 8
    public function __construct(public string $nombre, public int $precio, public bool $disponible) 
    {
    }

    public function mostrarProducto(){
       echo "El producto " . $this->nombre . " tiene un precio de $" . $this->precio;
    }
}

//Instanciamos la clase
$producto = new Producto('Tablet', 300, true);

//Acceder a las propiedades con la sintaxis de flecha
// $producto->nombre;
// $producto->precio;
// $producto->disponible;


$producto->mostrarProducto();
echo '<pre>';
var_dump($producto);
echo'</pre>';


$producto2 = new Producto('Smartphone', 450, true);

$producto2->mostrarProducto();



echo '<pre>';
var_dump($producto2);
echo'</pre>';




include 'includes/footer.php';