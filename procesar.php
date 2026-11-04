<?php
// Lista de campos que esperamos recibir.
$campos = ['nombre', 'correo', 'edad', 'curso', 'modalidad'];
//Aqui guardare los que hacen falta.
$faltantes = [];
// Lo que realizamos aqui es que revisamos cada campo.
foreach ($campos as $campo) {
    // Si no existe o esta vacio (ignorando los espacios), se marcara como faltante
    if (!isset($_POST[$campo]) || trim($_POST[$campo]) === '') {
        $faltantes[] = $campo;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="contenedor">
        <?php if (count($faltantes) > 0): ?>

            <h1 class="error">Faltan datos</h1>
            <p>No ingresaste: <strong><?= implode(', ', $faltantes) ?></strong></p>
            <a href="index.html">Volver al formulario</a>

        <?php else: ?>

            <h1 class="exito">Inscripcion Recibida</h1>
            <ul>
                <li><strong>Nombre:</strong> <?= htmlspecialchars($_POST['nombre']) ?></li>
                <li><strong>Correo:</strong> <?= htmlspecialchars($_POST['correo']) ?></li>
                <li><strong>Edad:</strong> <?= htmlspecialchars($_POST['edad']) ?></li>
                <li><strong>Curso:</strong> <?= htmlspecialchars($_POST['curso']) ?></li>
                <li><strong>Modalidad:</strong> <?= htmlspecialchars($_POST['modalidad']) ?></li>
            </ul>
            <a href="index.html">Nueva inscripcion</a>

        <?php endif; ?>
    </div>
</body>
</html>