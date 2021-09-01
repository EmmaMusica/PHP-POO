<?php include 'includes/header.php';

//Usualmente se recomienda usar una clase por archivo

//Incluimos las clases de la carpeta clases

// require "clases/Clientes.php";
// require "clases/Detalles.php";



//Reemplazando al "require" definimos la funcion autoload para registrar las direcciones de las clases
function mi_autoload($clase){
    require __DIR__ . '/clases/' . $clase . '.php';
}
//Y luego instanciamos autoload_register con el argumento de la funcion previamente definida
spl_autoload_register("mi_autoload");




//entonces podemos utilizar las clases de la carpeta clases sin problemas
$detalles = new Detalles();
echo "<hr>";
$clientes = new Clientes();




include 'includes/footer.php';