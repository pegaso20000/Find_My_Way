<?php

include("conexion_crud.php");
$con=conectar();

$user = $_POST['usuario'];
$clave = $_POST['clave'];


$query = "SELECT COUNT(*) as contar FROM admin where usuario = '$user' and clave = '$clave' ";
$bdconect = mysqli_query($con,$query);
$parametros = mysqli_fetch_array($bdconect);
if($parametros['contar']>0){
   $_SESSION['usuario'] = $user;
  header("location: ../inicio_admin.php");
}else {
    
  echo '<script>';
      echo 'alert("Usuario o Contraseña incorrecto");';
      echo 'window.location.href="../loginadmin.php";';
  echo '</script>';
}


?>