<?php
  $correo=$_POST['correo'];
  $password=$_POST['password'];
  require_once '../Models/usuario.php';
  $usuario=new Usuario();
  $resultado=$usuario->AutentificarUsuario($correo,$password);
  if(count($resultado)>0){
    //echo 'encontrado';
    foreach ($resultado as $registro) {
      session_start();
      $_SESSION['idUsuario']=$registro['ID'];
      $_SESSION['nombreUsuario']=$registro['Correo'];
      $_SESSION['tipo']=$registro['Tipo'];
      //echo$registro['Correo'];
      header("Location:../index.php");
    }
    
  }
  else{
    //echo 'no encontrado';
    header("Location:login.php");
  }
?>