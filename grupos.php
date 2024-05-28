<?php
include('conexion.php');
$con = conexion();

$sql = "SELECT * FROM grupos";
$query = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav>
        <section class="titulo-nav"><h1></h1></section>
    </nav>
    <main>
        <section class="titulo"><h2>GRUPOS DEL PLANTEL</h2></section>
        <section class="grupos">
            <table>
                <thead>
                <tr>
                    <th class="grupo">GRUPO</th>
                    <th class="especialidad">ESPECIALIDAD</th>
                    <th class="alumnos">ALUMNOS</th>
                    <th class="datos"></th>
                    <tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    
                    <th><?= $row['grupo'] ?></th>
                    <th><?= $row['especialidad'] ?></th>
                    <th><?= $row['alumnos'] ?></th>
                    <th><a href="<?= $row['grupo']?>.php"><div class="opciones-container">
                        <div class="info-grupo"></div>
                    </div></th>
                    <tr>
                    <?php endwhile; ?>
            
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>