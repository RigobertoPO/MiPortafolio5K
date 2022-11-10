<?php
    session_start();
    if(isset($_SESSION['nombreUsuario'])){
        $usuarioSesion=$_SESSION['nombreUsuario'];
        $tipoUsuario=$_SESSION['tipo'];
    }
    else{
        $usuarioSesion='';
        $tipoUsuario=0;
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portafolio-quien soy</title>
   <link href="css/site.css" rel="stylesheet"/>
</head>
<body>
   <header>
    <nav id="navbar">
        <div class="Contenedor">
             <img src="img/logo.png" alt="Logo" class="Logo"/>
             <ul class="Texto-btn">
                 <li ><a href="index.php" class="Seleccionado">Inicio</a></li>
                 <li><a href="quiensoy.php">Quien soy</a></li>
                 <li><a href="portafolio.php">PortaFolio</a></li>
                 <li><a href="blog.php">blog</a></li>
                 <li><a href="contacto.php">Contactos</a></li>
                 <li>
                    <?php             
                        if($tipoUsuario==1){
                            
                            echo '<a href="proyectos.php">Proyectos</a>';
                        }
                                        
                    ?>
                    </li>
                 <li>
                    <?php             
                        if($usuarioSesion==''){
                           
                            echo '<a href="Usuarios/login.php">Iniciar sesión</a>';
                        }
                        else{
                            echo '<label>'.$usuarioSesion.'</label>';
                            echo '<a href="Usuarios/logout.php">Cerrar sesión</a>';
                        }                  
                    ?>
                    
                 </li>
             </ul>          
        </div>
     </nav> 
   </header>
   <section id="Portafolio">
    <h1>Proyectos</h1>
    <a href="Proyectos/NuevoProyecto.php">Agregar proyecto</a>
    <div class="Portafolio-content">
        <?php
        require_once 'Models/proyecto.php';
                    $proyecto=new Proyecto();
                    $resultado=$proyecto->ObtenerProyectos();
                    if(count($resultado)>0){
                        foreach($resultado as $registro){
                            ?>
                               <div class="Caja">
                                    <a href="http://">
                                        <img src="img/escritorio.jpg" alt="web">
                                    </a>  
                                    <h4><?php echo $registro['Nombre'] ?></h4>  
                                    <p><?php echo $registro['Descripcion'] ?></p>             
                                </div> 
                                <tr> 
                            <?php
                        }
                    }
        ?>
    </div>  
</section>
  <footer>
      <p>Universidad Autónoma de Chiapas</p>
      <p>Blvd. Belisario Domínguez</p>
  </footer>
</body>
</html>