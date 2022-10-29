<?php
class Usuario{
   public function CreateUsuario($nombre,$apellidoPaterno,$apellidoMaterno,$correo,$password) {
    try {
        include 'conexion.php';
        $conectar=new Conexion();
        $consulta=$conectar->prepare("INSERT INTO usuarios
        (Nombre,ApellidoPaterno,ApellidoMaterno,Correo,Password,Tipo)
        VALUES(:nombre,:paterno,:materno,:correo,:password,2)");
        $consulta->bindParam(":nombre",$nombre,PDO::PARAM_STR);
        $consulta->bindParam(":paterno",$apellidoPaterno,PDO::PARAM_STR);
        $consulta->bindParam(":materno",$apellidoMaterno,PDO::PARAM_STR);
        $consulta->bindParam(":correo",$correo,PDO::PARAM_STR);
        $consulta->bindParam(":password",$password,PDO::PARAM_STR);
        $consulta->execute();
        return true;

    } catch (Exception $th) {
        return false;
    }
   }
}
?>