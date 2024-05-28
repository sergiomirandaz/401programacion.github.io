<?php
include('conexion.php');
$con = conexion();

$id=$_POST["id"];
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

$sql = "UPDATE a201 SET nombre='$nombre', apellidop='$apellidop', apellidom='$apellidom', matricula='$matricula', correo='$correo', telefono='$telefono', direccion='$direccion', tipo='$tipo' , curp='$curp' , nss='$nss', vigencia='$vigencia' WHERE id='$id'";
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: 201.php");
}else{

}

?>