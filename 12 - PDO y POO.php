<?php include 'includes/header.php';


/*PDO soporta 12 tipos de bases de datos diferentes. Con mysqli solo podemos utilizar MySQL, en cambio con PDO tenemos acceso a muchas mas opciones.
*/
/*
//Conectar a la BD con PDO

$db = new PDO('mysql:host=localhost; dbname=bienes_raices', 'root','root');


$query = "SELECT titulo FROM propiedades";

//Consultar la BD
$propiedades = $db->query($query)->fetch(); //fetchObject(); //fetchColumn(); //FetchAll();

var_dump($propiedades);

*/

//----------------------------------------------------------------------------------------------------------

//Conectar a la BD con PDO con Sentencias Preparadas

$db = new PDO('mysql:host=localhost; dbname=bienes_raices', 'root','root');

//Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

//Lo Preparamos
$stmt = $db->prepare($query);

//Lo ejecutamos
$stmt->execute();

//Vamos a obtener los resultados
$resultado = $stmt->fetchAll( PDO::FETCH_ASSOC ); //se pasa este parametro "PDO::FETCH_ASSOC" para formatear correctamente

//Iterar
foreach($resultado as $propiedad):
    echo $propiedad['titulo'];
    echo "<br>"; 
    echo $propiedad['imagen'];
    echo "<br>"; 
endforeach;

// echo "<pre>";
// var_dump($resultado);
// echo "</pre>";


include 'includes/footer.php';