<?php

include("conexion.php");
$con = conexion();

$id=$_GET["id"];

$sql="DELETE FROM a201 WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: 201.php");
}else{

}

?>