<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Nombre del servidor de la base de datos
$username = "root";   // Nombre de usuario de la base de datos
$password = "";           // Contraseña del usuario de la base de datos
$dbname = "gestion_nomina"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Configurar el juego de caracteres a UTF-8
$conn->set_charset("utf8");

// Opcionalmente, puedes imprimir un mensaje si la conexión se ha establecido correctamente
// echo "Conexión exitosa a la base de datos";
?>
