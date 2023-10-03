<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="curriculum.css">
    <title>Curriculum Vitae</title>
</head>
<body>
    <div class="page">
		<div class="header">
            <img src="fono3.jpg" alt="Dyna" style="max-width: 120px;"class = "imagen-circular">
            <span class="title">Curriculum Dinamico <br> </span>
        </div>		

        <div class="main">
            <div class="left-column">
                <h2>Información Personal</h2>
                <p><strong>Nombre y Apellidos:</strong> <?php echo htmlspecialchars($_GET['nombre_apellidos']); ?></p>
                <p><strong>Fecha de Nacimiento:</strong> <?php echo htmlspecialchars($_GET['fecha_nacimiento']); ?></p>
                <p><strong>Ocupación:</strong> <?php echo htmlspecialchars($_GET['ocupacion']); ?></p>
				<p><strong>Nacionalidad:</strong> <?php echo htmlspecialchars($_GET['nacionalidad']); ?></p>
	
				<h2>Contacto</h2>
                <div class="contact">
                    <p><strong>Correo electronico:</strong> <?php echo htmlspecialchars($_GET['contacto']); ?></p>
					<p><strong>Mi perfil de GitHub </strong><a href="https://github.com/ZeroDyna">Click aqui</a>

                </div>
				<h2>Idiomas</h2>
				<ul>
					<?php
						foreach (explode(', ', $_GET['idiomas']) as $idioma) {
							echo "<li>" . htmlspecialchars($idioma) . "</li>";
						}
					?>
				</ul>
				<h2>Aptitudes</h2>
                <p><?php echo htmlspecialchars($_GET['aptitudes']); ?></p>
	
            </div>
            <div class="right-column">
               	<h2>Experiencia laboral </h2>
                <p><?php echo htmlspecialchars($_GET['perfil']); ?></p>

                <h2>Lenguajes de Programación</h2>
                <p><?php echo htmlspecialchars($_GET['lenguajes_programacion']); ?></p>

				<h2>Habilidades</h2>
				<ul>
				    <?php
				    foreach (explode(', ', $_GET['habilidades']) as $habilidad) {
				        echo "<li>" . htmlspecialchars($habilidad) . "</li>";
				    }
			    ?>
</ul>


        </div>
    </div>
</body>
</html>

