<?php 
    include("conexion.php");
    $con=conexion();
    $id= $_GET['id'];
    $sql="SELECT * FROM a201 WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
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
            <form action="actualizaralumno201.php" method="POST" class="editar-datos">
            <div class="dato-alumno">
                <input type="hidden" id="id" name="id" autocomplete="off" value="<?= $row['id']?>" >
                </div>
            
                <div class="dato-alumno">
                <label for="nombre">NOMBRE</label>
                <input type="text" id="nombre" name="nombre" autocomplete="off" value="<?= $row['nombre']?>" required maxlength="30" >
                </div>

                <div class="dato-alumno">
                <label for="apellidop">APELLIDO PATERNO</label>
                <input type="text" id="apellidop" name="apellidop" autocomplete="off"  value="<?= $row['apellidop']?>" required maxlength="30">
                </div>

                <div class="dato-alumno">
                <label for="apellidom">APELLIDO MATERNO</label>
                <input type="text" id="apellidom" name="apellidom" autocomplete="off"  value="<?= $row['apellidom']?>" required maxlength="30">
                </div>

                <div class="dato-alumno">
                <label for="matricula">MATRICULA</label>
                <input type="text" id="matricula" name="matricula" autocomplete="off"  value="<?= $row['matricula']?>" required pattern="[0-9]{14}" maxlength="14">
                </div>

                <div class="dato-alumno">
                <label for="correo">CORREO ELECTRONICO</label>
                <input type="email" id="correo" name="correo" autocomplete="off"  value="<?= $row['correo']?>"  required maxlength="30">
                </div>

                <div class="dato-alumno">
                <label for="telefono">TELEFONO</label>
                <input type="tel" id="telefono" pattern="[0-9]{10}" maxlength="10"   name="telefono" autocomplete="off"  value="<?= $row['telefono']?>" required>
                </div>

                <div class="dato-alumno">
                <label for="direccion">DIRECCION</label>
                <input type="text" id="direccion" name="direccion" autocomplete="off"  value="<?= $row['direccion']?>" required maxlength="30">
                </div>

                <div class="dato-alumno">
                <label for="tipo">TIPO DE SANGRE</label>
                <input type="text" id="tipo" name="tipo" autocomplete="off"  value="<?= $row['tipo']?>" required maxlength="30">
                </div>
                
                <div class="dato-alumno">
                <label for="curp">CURP</label>
                <input type="text" id="curp" name="curp" autocomplete="off"  value="<?= $row['curp']?>" required maxlength="18">
                </div>
                
                <div class="dato-alumno">
                <label for="nss">NSS</label>
                <input type="text" id="nss" name="nss" autocomplete="off"  value="<?= $row['nss']?>" required pattern="[0-9]{11}" maxlength="11">
                </div>
                
                <div class="dato-alumno">
                <label for="vigencia">VIGENCIA</label>
                <input type="text" id="vigencia" name="vigencia" autocomplete="off"  value="<?= $row['vigencia']?>" required maxlength="30">
                </div>

                <div class="boton-guardar">
                <a href="eliminaralumno201.php?id=<?= $row['id'] ?>"><input type="button" value="ELIMINAR" id="eliminar" name="eliminar"></a>
                <input type="submit" value="GUARDAR" id="guardar" name="guardar">
                </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>