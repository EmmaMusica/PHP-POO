<?php include 'includes/header.php';

/*

// Conectar a la BD con Mysqli y POO con el metodo query()

$db = new mysqli('localhost', 'root', 'root', 'bienes_raices'); // este objeto ya tendrá todos los metodos

//escribimos el query
$query = "SELECT titulo from propiedades";

//pasamoes el query al metodo query()
$resultado = $db->query($query);


//iteramos para mostrar todos los resultados:
while ($row = $resultado->fetch_assoc()):
    echo "<br>";
    var_dump($row);
    echo "</br>";
endwhile;

var_dump($resultado->fetch_assoc());

*/

//-----------------------------------------------------------------------------------------------------------



//Conectar a la BD con Mysqli y POO con Sentencias Preparadas.
$db = new mysqli('localhost', 'root', 'root', 'bienes_raices');


//Creamos el query (1)
$query = "SELECT titulo, imagen from propiedades";


//Lo preparamos (2)- Pasamos el query al metodo prepare() hacia una variable llamada statement
$stmt = $db->prepare($query); // aquí este stmt ya va a tener toda la informacion


//Lo ejecutamos (3)
$stmt->execute();// esto nos da una serie de resultados


//Creamos la variable (4)
$stmt->bind_result($titulo, $imagen); //bind_result() nos da automaticamente una valor referiendose al query que le hemos pasado. Osea que nos crea una variable, llamemosla "$titulo" porque pedimos en el query los "titulo" de las propiedades.


//Asignamos el resultado (5)
$stmt->fetch(); // le hacemos el fetch para reorganizar los datos y poder dejar bien plantada la variable $titulo


//Imprimimos el resultado (6) . Ahora bien podemos darle un echo o var_dump
var_dump($titulo);
var_dump($imagen);


//--- tambien podemos iterarlo para traernos todos los resultados
/*
while($stmt->fetch()):
    var_dump($titulo);
    var_dump($imagen);
endwhile;
*/

include 'includes/footer.php';