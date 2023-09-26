<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="curriculum.css">
    <title>Curriculum Vitae</title>
</head>
<body>
    <div class="page">
        <div class="header">
            <h1>Curriculum Vitae</h1>
        </div>
        <div class="main">
            <div class="left-column">
                <div class="contact">
                    <p><strong>Contacto:</strong> <?php echo htmlspecialchars($_GET['contacto']); ?></p>
                </div>
                <p><strong>Nacionalidad:</strong> <?php echo htmlspecialchars($_GET['nacionalidad']); ?></p>
                <p><strong>Nivel de Inglés:</strong> <?php echo htmlspecialchars($_GET['nivel_ingles']); ?></p>
            </div>
            <div class="right-column">
                <h2>Información Personal</h2>
                <p><strong>Nombre y Apellidos:</strong> <?php echo htmlspecialchars($_GET['nombre_apellidos']); ?></p>
                <p><strong>Fecha de Nacimiento:</strong> <?php echo htmlspecialchars($_GET['fecha_nacimiento']); ?></p>
                <p><strong>Ocupación:</strong> <?php echo htmlspecialchars($_GET['ocupacion']); ?></p>

                <h2>Lenguajes de Programación</h2>
                <p><?php echo htmlspecialchars($_GET['lenguajes_programacion']); ?></p>

                <h2>Aptitudes</h2>
                <p><?php echo htmlspecialchars($_GET['aptitudes']); ?></p>

                <h2>Habilidades</h2>
                <p><?php echo htmlspecialchars($_GET['habilidades']); ?></p>

                <h2>Perfil</h2>
                <p><?php echo htmlspecialchars($_GET['perfil']); ?></p>
            </div>
        </div>
    </div>
</body>
</html>

