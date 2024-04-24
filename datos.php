<!DOCTYPE html>
<html>
<head>
    <title>Procesamiento de Datos</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibimos los datos del formulario
    $nombre_apellidos = $_POST['nombre_apellidos'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $ocupaciones = $_POST['ocupacion'];
    $nacionalidad = $_POST['nacionalidad'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $nivel_ingles = $_POST['nivel_ingles'];
    $lenguajes_programacion = isset($_POST['lenguajes_programacion']) ? $_POST['lenguajes_programacion'] : [];
    $aptitudes = $_POST['aptitudes'];
    $habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : [];
    $perfil = $_POST['perfil'];

    echo "<h2>Información recibida:</h2>";
    echo "<p>Nombre y Apellidos: $nombre_apellidos</p>";
    echo "<p>Fecha de Nacimiento: $fecha_nacimiento</p>";
    echo "<p>Ocupaciones:</p><ul>";
    foreach ($ocupaciones as $ocupacion) {
        echo "<li>$ocupacion</li>";
    }
    echo "</ul>";
    echo "<p>Nacionalidad: $nacionalidad</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Teléfono: $telefono</p>";
    echo "<p>Nivel de inglés: $nivel_ingles</p>";
    echo "<p>Lenguajes de programación:</p><ul>";
    foreach ($lenguajes_programacion as $lenguaje) {
        echo "<li>$lenguaje</li>";
    }
    echo "</ul>";
    echo "<p>Aptitudes: $aptitudes</p>";
    echo "<p>Habilidades:</p><ul>";
    foreach ($habilidades as $habilidad) {
        echo "<li>$habilidad</li>";
    }
    echo "</ul>";
    echo "<p>Perfil: $perfil</p>";
} else {
    echo "<h2>Error</h2>";
    echo "<p>No se han recibido datos del formulario.</p>";
}
?>

</body>
</html>
