<?php
function conexion(){
$servername = "localhost";
$username = "root";
$password = "";
$database = "cecyte";

$connect = mysqli_connect($servername,$username, $password);
mysqli_select_db($connect, $database);

return $connect;
}
?>