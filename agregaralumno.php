<?php
include('conexion.php');
$con = conexion();

$sql = "SELECT * FROM a201";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav>
        <section class="titulo-nav"><h1></h1></section>
    </nav>
    <main>
        <section class="editar-contenedor">
            <div class="izquierdo">
                <div class="imagen-datos">
                    <div class="imagen-alumno"></div>
                </div>
            </div>
            </div>
            <div class="derecho">
            <div class="editar-datos">
            <form action="insert.php" method="POST" class="editar-datos">
            <div class="dato-alumno">
                <input type="hidden" id="id" name="id" autocomplete="off">
                </div>
                
                <div class="dato-alumno">
                <label for="grupo">GRUPO</label>
                <select id="grupo" name="grupo" autocomplete="off" required>
                            <option value="">Selecciona una opción</option>
                            <option value="201">201</option>
                            <option value="202">202</option>
                            <option value="203">203</option>
                            </select>
                            </div>

                <div class="dato-alumno">
                <label for="nombre">NOMBRE</label>
                <input type="text" id="nombre" name="nombre" autocomplete="off" required maxlength="30">
                </div>

                <div class="dato-alumno">
                <label for="apellidop">APELLIDO PATERNO</label>
                <input type="text" id="apellidop" name="apellidop" autocomplete="off" required maxlength="30">
                </div>

                <div class="dato-alumno">
                <label for="apellidom">APELLIDO MATERNO</label>
                <input type="text" id="apellidom" name="apellidom" autocomplete="off"  required maxlength="30">
                </div>

                <div class="dato-alumno">
                <label for="matricula">MATRICULA</label>
                <input type="text " id="matricula" name="matricula" autocomplete="off" required pattern="[0-9]{14}" maxlength="14">
                </div>

                <div class="dato-alumno">
                <label for="correo">CORREO ELECTRONICO</label>
                <input type="email" id="correo" name="correo" autocomplete="off" required maxlength="30">
                </div>

                <div class="dato-alumno">
                <label for="telefono">TELEFONO</label>
                <input type="tel" pattern="[0-9]{10}" maxlength="10" name="telefono" autocomplete="off" required>
             </div>

                <div class="dato-alumno">
                <label for="direccion">DIRECCION</label>
                <input type="text" id="direccion" name="direccion" autocomplete="off" required maxlength="30">
                </div>

                <div class="dato-alumno">
                <label for="tipo">TIPO DE SANGRE</label>
                <input type="text" id="tipo" name="tipo" autocomplete="off" required maxlength="30">
                </div>
                
                <div class="dato-alumno">
                <label for="curp">CURP</label>
                <input type="text" id="curp" name="curp" autocomplete="off"  required maxlength="18">
                </div>
                
                <div class="dato-alumno">
                <label for="nss">NSS</label>
                <input type="text" id="nss" name="nss" autocomplete="off" required min="14" max="14">
                </div>
                
                <div class="dato-alumno">
                <label for="vigencia">VIGENCIA</label>
                <input type="text" id="vigencia" name="vigencia" autocomplete="off" required maxlength="30">
                </div>

                <div class="boton-guardar">
                <input type="submit" value="AGREGAR" id="agregar" name="agregar" required>
                </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>