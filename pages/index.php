<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto de Investigación</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Arsenal:ital,wght@0,400;0,700;1,400;1,700&family=DM+Serif+Display&display=swap" rel="stylesheet">  
</head>
<body>

<!-- MENU VERTICAL  -->
  <nav class="navbar menu_vertical flex-column">
    <a class="navbar-brandd" id="inicio" href="#">P.I</a>
    <div class="menu_v">
      <span class="subtitle" aria-current="page">Registros</span>
      <ul class="navbar-nav">
        <li class="nav-item menu_li">
          <a class="nav-link " data-bs-target="#modal1"  data-bs-toggle="modal" data-url="Registro_grupo.php" >Registro del grupo</a>
        </li>
        <li class="nav-item menu_li">
          <a class="nav-link" data-bs-target="#modal2"  data-bs-toggle="modal"  data-url="Registro_Investigadores.php"  >Investigadores</a>
        </li>
      </ul>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Productos 
            </button>
          </h2>
          <div id="flush-collapseOne" class="acordion_content accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" >Articulos</a>
              </li>
              <li class="nav-item">
                <span class="nav-link a-libros" aria-current="page" >Libros</span>
              </li>
              <li class="nav-item">
                <a class="nav-link" >Capitulo de Libros</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

<!-- MENU HORIZONTAL-->
  <nav class="menu_horizontal">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link " id="investigadores" aria-current="page" >Investigador</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Grupo de Investigacion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Productos</a>
      </li>
    </ul>
  </nav>

  <!--CONTENEDOR PRINCIPAL-->
  <div class="cuerpo">
    <div class="contenedor_principal">
      <div id="pag_index">
        <h1>pagina principal</h1>
        <?php include '../formularios/Registro_Productos.php'; ?>      
      </div>
        
        <!--INCLUDE-->

      <!-- registro grupo-->
      <?php include '../formularios/Registro_grupo.php'; ?>
      <!-- registro Investigadores-->
      <?php include '../formularios/Registro_Investigadores.php'; ?>
      <!-- Vistas de investigación -->
      <?php include '../vistas/Vistas_investigador.php'; ?>
      <!-- formulario de producto -->


    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
</body>
</html>