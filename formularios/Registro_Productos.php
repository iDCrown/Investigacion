<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Historial Productos</title>
  <link rel="stylesheet" href="../css/registroGrupo.css">
</head>
<body>
  <div class="modal fade" id="modalRegistrar"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-lg-down  modal-lg">
      <div class="modal-content">


        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de productos</h1>
        </div>
        <div class="modal-body">
          <form id="registroGrupoInvestigacion" class="conteiner-modal" method="POST" action="">
            <div class="first mb-3">
              <label for="nombre" class="form-labe">Seleccione el producto</label>
              <select name="producto" class="form-labe" id="producto">
                <option value="articulo">Articulo</option>
                <option value="cap_investigacion">Capitulo de investigación</option>
                <option value="libro_investigacion">Libro de investigación</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="tituloProducto" class="form-labe">Titulo del producto</label>
              <input type="text" class=" for" name="tituloProducto" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="autor" class="form-labe">Autor o autores:</label>
              <input type="text" id="autor" class="for b2"  name="autor" required>
            </div>
            <div class="mb-3">
              <label for="grupoInvestigacion" class="form-labe">Grupo de investigación del producto:</label>
              <input type="text" id="grupoInvestigacion" class="for b2"  name="grupoInvestigacion" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-labe">Correo de contacto:</label>
              <input type="text" id="emailInvestigacion" class="for b2"  name="emailInvestigacion" required>
            </div>
            <div class="mb-3">
              <label for="isbn" class="form-labe">ISBN:</label>
              <input type="text" id="isbn" class="for b2"  name="isbn" required>
            </div>
            <div class="mb-3">
              <label for="copiaProducto" class="form-labe">¿El producto tiene una copia de seguridad?</label>
              <input type="text" id="copiaProducto" class="for b2"  name="copiaProducto" required>
            </div>
            <div class="mb-3">
              <label for="ubicacion" class="form-labe">Lugar de procedencia del producto</label>
              <input type="text" id="ubicacion" class="for b2"  name="ubicacion" required>
            </div>
              <div class="modal-footer">
                <button type="submit" class="btn-brown" name="editarRegistro">Registrar producto</button>                
              </div>
          </form>
        </div>


<!-- javascript -->
  <script src="../js/scripts.js"></script>
