<?php
// Incluir aquí la lógica para verificar la sesión iniciada (comprobar si el usuario está autenticado)
// Puedes usar una función que verifique si el $_SESSION['user_id'] está establecido y redirigir a la página de inicio de sesión si no lo está.

// Aquí deberías tener la lógica para obtener los roles del usuario (administrador, jefe de departamento, empleado)
// Puedes usar variables de sesión para almacenar los roles o un sistema de permisos más elaborado.

// Por simplicidad, asumimos que el usuario tiene acceso a todos los módulos en este ejemplo.
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
</head>
<body>
    <h1>Bienvenido al Panel de Control</h1>
    <ul>
        <!-- Enlaces a los diferentes módulos -->
        <li><a href="empleados.php">Módulo de Empleados</a></li>
        <li><a href="ausencias.php">Módulo de Ausencias</a></li>
        <li><a href="horas_extras.php">Módulo de Horas Extras</a></li>
        <li><a href="comisiones.php">Módulo de Comisiones</a></li>
        <li><a href="bonificacion.php">Módulo de Bonificación por Productividad</a></li>
        <li><a href="prestamos.php">Módulo de Préstamos</a></li>
        <li><a href="tienda_solidarista.php">Módulo de Tienda Solidarista</a></li>
        <li><a href="polizas_contables.php">Generación de Pólizas Contables</a></li>
        <li><a href="planilla.php">Módulo de Planilla</a></li>
        <li><a href="liquidacion_laboral.php">Módulo de Liquidación Laboral</a></li>
        <li><a href="aumentos_salariales.php">Registro de Aumentos Salariales</a></li>
    </ul>
</body>
</html>
