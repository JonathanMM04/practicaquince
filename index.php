<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X__</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link rel="stylesheet" href="css/stem.css"\>

    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">TE2</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=galaxia.php>Galaxia</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>PProblema: Cálcular luminosidad</h2>
  <p>Descripción:</p>
  <p>Una estrella tiene un area superficial de 1.8 x 1019m² y una temperatura superficial 
          de 4,200k ¿Cual es su luminosidad?.<br>
</p>
</section>
<section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/estrella.jpg">
        </center>
      </section>
<section class="formulas">
<h2>Fórmulas</h2>
L       uminosidad = σ×A×T⁴<br>
        donde: 
        σ es la constante de Stefan-boltzmann <br>
        A es el area superficial <br>
        T es la temperatura en grados Kelvin.
</section>
<section class="datos">
<h2>Datos:</h2>
        A = 1.8 x 10^19m². <br>
          T = 4200 k. <br>
          σ = 5.670374419×10-⁸ W⋅m-²⋅K-⁴. 
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>La luminosidad de la estrella es:<br>
        Luminosidad = 5.670374419×10-⁸ W⋅m-²⋅K-⁴ × 1.8 × 10^19 m² × (4200 K)⁴<br>
          Luminosidad = 3.176006652x10^26 W
  </p>
</section>
<?php
     function calcula_densidad(){
        $area=1.8E19;
        $temperatura= 4200;
        $constante= 5.670374419E-8;
        $luminosidad= $constante * $area * ($temperatura*$temperatura*$temperatura*$temperatura);
        return $luminosidad;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: luminosidad = ".calcula_densidad(). " kg/(metro cubico)</h1>";
?>
</section>
</section>
    <footer class="pie">
    <center>
      <h3>Desarrollador web de este sitio:</h3>
          <p>Nombre: Jonathan Martinez Morales, 22090682, ISC, 4 Semestre</p>
      <img class="imgSelefie" src="images/selfie.jpeg" alt="selfie" width="300" height="200">
        </center>
    </footer>
   </section>
</body>
</html>
