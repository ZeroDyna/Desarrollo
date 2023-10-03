<?php
// Obtener los datos del formulario
$nombreApellidos = $_POST['nombre_apellidos'];
$fechaNacimiento = $_POST['fecha_nacimiento'];
$ocupacion = $_POST['ocupacion'];
$contacto = $_POST['contacto'];
$nacionalidad = $_POST['nacionalidad'];
$nivelIngles = $_POST['nivel_ingles'];
$idiomas = isset($_POST['idiomas']) ? implode(', ', $_POST['idiomas']) : '';
$lenguajesProgramacion = isset($_POST['lenguajes_programacion']) ? implode(', ', $_POST['lenguajes_programacion']) : '';
$aptitudes = $_POST['aptitudes'];
$habilidades = isset($_POST['habilidades']) ? implode(', ', $_POST['habilidades']) : '';
$perfil = $_POST['perfil'];

// Construir un array con los datos
$data = array(
    'nombre_apellidos' => $nombreApellidos,
    'fecha_nacimiento' => $fechaNacimiento,
    'ocupacion' => $ocupacion,
    'contacto' => $contacto,
    'nacionalidad' => $nacionalidad,
	'idiomas' => $idiomas,
    'lenguajes_programacion' => $lenguajesProgramacion,
    'aptitudes' => $aptitudes,
    'habilidades' => $habilidades,
    'perfil' => $perfil
);

// Codificar los datos en formato de consulta (query string)
$queryString = http_build_query($data);

// Redirigir al archivo curriculum.php con los datos en la URL
header("Location: curriculum.php?$queryString");
exit();
?>

