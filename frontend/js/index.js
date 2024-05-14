
//Configuracion de endpoint
const urlObtenerEmpleados = "http:/192.168.50.55/backend/conexionBBDD.php"
 
//Funcion asincrona para retornar el json, debe tener try catch por si el servidor no devuelve el json
//Asincrono implica que el flujo no es continuo, se para la interpretacion del codigo hasta que nos llegue la informacion
async function obtenerEmpleados(){
    try {
        //Obtener lista de empleados del backend, en fetch ponemos el endpoint
        const listaEmpleados = await fetch(urlObtenerEmpleados)
        .then(respuesta => respuesta.json())
 
        //Muestra por consola
        console.log(respuesta)
    } catch (error) {
        console.log(error)
    }
}
