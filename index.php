<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portafolio-Inicio</title>
    <link href="css/site.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
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
             </ul>          
        </div>
     </nav> 
        <div id="MostrarSlider" >
         <div class="Slider-banner">
            <h1>Rigoberto Pérez Ovando</h1> 
            <p class="large">Ingeniero de software</p>
            <a class="Text-btn" href="usuarios/login.php">REGISTRARME</a>
         </div>
        </div>
   </header>
   <section id="Portafolio">
    <div class="Contenedor">
        <div class="portafolio-nav">
            <ul class="Text-btn">
                 <li><a href="" class="Seleccionado">Todos</a></li>
                 <li><a href="">Web</a></li>
                 <li><a href="">Móvil</a></li>
                 <li><a href="">Escritorio</a></li>
                 <li><a href="">Diseños</a></li>
            </ul>
        </div>
    </div>
    <div class="Portafolio-content">
        <div class="Caja">
            <a href="http://">
                <img src="img/escritorio.jpg" alt="web">
            </a>               
        </div>
        <div class="Caja">
            <a href="http://">
                <img src="img/movil.jpg" alt="móvil" >
            </a>
        </div>
        <div class="Caja">
            <a href="http://">
                <img src="img/web.jpg" alt="móvil" >
            </a>
        </div>
   </div>
   </section>
  <footer>
      <p>Universidad Autónoma de Chiapas</p>
      <p>Blvd. Belisario Domínguez</p>
  </footer>
</body>
</html>