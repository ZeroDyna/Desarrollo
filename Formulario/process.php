<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores enviados desde el formulario
    $nombreApellidos = $_POST["nombre_apellidos"];
    $fechaNacimiento = $_POST["fecha_nacimiento"];
    $ocupacion = $_POST["ocupacion"];
    $contacto = $_POST["contacto"];
    $nacionalidad = $_POST["nacionalidad"];
    $nivelIngles = $_POST["nivel_ingles"];
    $lenguajesProgramacion = isset($_POST["lenguajes_programacion"]) ? implode(", ", $_POST["lenguajes_programacion"]) : "";
    $aptitudes = $_POST["aptitudes"];
    $habilidades = isset($_POST["habilidades"]) ? implode(", ", $_POST["habilidades"]) : "";
    $perfil = $_POST["perfil"];

    // Incluir la plantilla HTML
    include "plantilla.html";
} else {
    // Si el formulario no se ha enviado, redirige a la página del formulario
    header("Location: formulario.html");
    exit;
}
?>
