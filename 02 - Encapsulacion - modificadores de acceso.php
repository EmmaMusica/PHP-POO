<?php 

declare(strict_types = 1);
include 'includes/header.php';

//ENCAPSULACIÓN-----------------------------------------------------------------------------------------------

class Producto {

    //public - Se puede acceder y modificar desde cualquier lugar (clase y objeto)
    //protected - Se puede acceder y modificar unicamente en la clase
    //private -  Solo miembros de la misma clase pueden acceder  a el

    /* para acceder a un atributo que se encuentra en protected debemos crear un metodo (getNombre - setNombre)*/ 

    public function __construct(protected string $nombre, public int $precio, public bool $disponible) 
    {
    }

    public function mostrarProducto() : void{
       echo "El producto " . $this->nombre . " tiene un precio de $" . $this->precio;
    }

    public function getNombre() : string{
        return $this->nombre;
    }
    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 300, true);
// $producto->mostrarProducto();
echo $producto -> getNombre();
$producto -> setNombre('Teléfono');



echo '<pre>';
var_dump($producto);
echo'</pre>';


// $producto2 = new Producto('Smartphone', 450, true);
// // $producto2->mostrarProducto();
// echo $producto2 -> getNombre();

// // echo '<pre>';
// // var_dump($producto2);
// // echo'</pre>';






include 'includes/footer.php';