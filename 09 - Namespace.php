<?php include 'includes/header.php';


// si no se pisan las clases podriamos utilizar lo siguiente para abreviar la escritura de las instanciaciones de las clases
// use App\Clientes;
// use App\Detalles;



//Podriamos utilizar require
// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

//pero lo ideal es trabajar con autoload. y lo haremos de la siguiente manera:
function mi_autoload($clase){
    $partes = explode('\\', $clase); //------ explode() toma un string, lo divide en el elemento que se busca "\" y devuelve un arreglo con los elementos resultantes
    
    //Usamos explode() porque en la direccion resultante va incluido un "App\" (POR EL NAMESPACES) que necesitabamos eliminar.

    require __DIR__ . '/clases/' . $partes[1] . '.php';
}
spl_autoload_register("mi_autoload");


class Clientes {
    public function __construct()
    {
        echo "Desde otra clase llamada Clientes";
    }
}


//como en las clases que estamos trayendo con require utilizamos namespaces App entonces tenemos que hacer los siguiente
$detalles = new App\Detalles(); //colocar "App\" antes del nombre de la clase
echo "<hr>";
$clientes = new App\Clientes();
echo "<hr>";
$clientes2 = new Clientes();




include 'includes/footer.php';