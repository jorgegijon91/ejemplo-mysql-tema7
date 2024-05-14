<?php

//Conectarse a la base de datos de MYSQL
$servername= "localhost";
$username= "root";
$password= "root";
$database= "gestion_empleados";

//Creación de la conexión
$conn = new mysqli($servername, $username, $password, $database);

//Considerar acentos y "ñ"
$conn->set_charset("utf8mb4");
 
var_dump($username);

//Comprobar que haya conexión
if ($conn->connect_error) {
    die("Conexión fallida:". $conn->connect_error);
}
//Hacer la consulta SQL para obtener los datos
$sql = "SELECT * FROM empleados"; //Le paso la query que quiero
$result = $conn->query($sql); //Obtengo la query y la almaceno en una variable resultado

//Comprobar si se encontraron resultados
if ($result->num_rows > 0) {
    //Crear un array para almacenar los datos
    $data = array(); 

    //Recorre los resultados y empezando por el índice 0 guarda los valores en el array correspondiente($data)
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
}
    echo json_encode($data);
} else{
    echo " 0 resultados"; //Muestro que no hay resultados
}

//Cerrar la conexión a la BBDD
$conn->close();