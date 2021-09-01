<?php 
declare(strict_types = 1);
include 'includes/header.php';

//MÉTODOS ESTATICOS--------------------------------------------

class Producto {

    public $imagen;
    //los ESTATICOS tambien pueden ser variables.
    public static $imagenPlaceholder = "imagen.jpg";


    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen) 
    { 
        if($imagen){
            self::$imagenPlaceholder = $imagen;
        }
    }

    //metodo estatico
    public static function obtenerProducto(){
        echo "Obteniendo datos del producto";
    }
    public static function obtenerImagenProducto(){
        //para hacer referencia a cualquier atributo o propiedad que sea estatica se utiliza "self::"
        return self::$imagenPlaceholder;
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

//los metodos estaticos no requieren instanciarse y se los manda a llamar de la siguiente forma:
// echo Producto::obtenerImagenProducto();



$producto = new Producto('Tablet', 300, true, '');
// $producto->mostrarProducto();
// echo $producto -> getNombre();
// $producto -> setNombre('Teléfono');

echo $producto::obtenerImagenProducto();


echo '<pre>';
var_dump($producto);
echo'</pre>';




$producto2 = new Producto('Smartphone', 450, true, 'Monitor Curvo');
// $producto2->mostrarProducto();
// echo $producto2 -> getNombre();
echo $producto2 ::obtenerImagenProducto();

// echo '<pre>';
// var_dump($producto2);
// echo'</pre>';

include 'includes/footer.php';