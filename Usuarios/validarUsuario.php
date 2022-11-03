<?php
  $correo=$_POST['correo'];
  $password=$_POST['password'];
  require_once '../Models/usuario.php';
  $usuario=new Usuario();
  $resultado=$usuario->AutentificarUsuario($correo,$password);
  if(count($resultado)>0){
    echo 'encontrado';
    //header("Location:../index.php");
  }
  else{
    echo 'encontrado';
    //header("Location:login.php");
  }
?>