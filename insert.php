<?php
include('conexion.php');
$con = conexion();

$id = null;
$grupo = $_POST['grupo'];
$nombre = $_POST['nombre'];
$apellidop = $_POST['apellidop'];
$apellidom = $_POST['apellidom'];
$matricula = $_POST['matricula'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$tipo = $_POST['tipo'];
$curp = $_POST['curp'];
$nss = $_POST['nss'];
$vigencia = $_POST['vigencia'];

$sql = "INSERT INTO a$grupo VALUES('$id','$grupo', '$nombre','$apellidop', '$apellidom','$matricula','$correo','$telefono' ,'$direccion','$tipo','$curp','$nss','$vigencia')";
$query = mysqli_query($con,$sql);


if($query){
    Header("Location: $grupo.php");
};
?>