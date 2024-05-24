<?php include '../php/Vistas_investigador.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vistas de Investigación</title>
  <link rel="stylesheet" href="../css/vistas.css">
</head>
<body>
  <div id="Vista_Investigacion" class="conteiner">
    <h1 class="title">Vistas de Investigación</h1>
    <table class="table table_title table-hover">
      <thead class="tablee table-warning table-bordered b3">
        <tr>
          <th class="th_color" scope="col">Nombre</th>
          <th class="th_color" scope="col">email</th>
          <th class="th_color" scope="col">centroInv</th>
        </tr>
      </thead>
    </table>
    <div class="content">
      <form class="consultar" action="">
      <!-- Tabla de clientes -->
      <div id="clientes" style="display: block;">
        <table class="table table-hover">
          <tbody>
          
          </tbody>
        </table>
      </div>
    </div>  
  </div>

  <script src="../js/scripts.js"></script>
</body>
</html>