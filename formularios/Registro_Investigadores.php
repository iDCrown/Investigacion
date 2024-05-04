<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/registroGrupo.css">
</head>
<body>
  <div class="modal fade" id="modalRegistrar"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-lg-down  modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de investigadores</h1>
        </div>
        <div class="modal-body">
          <form id="registroGrupoInvestigacion" class="conteiner-modal" method="POST" action="">
            <div class="first mb-3">
              <label for="nombre" class="form-labe">Nombre del grupo:</label>
              <input type="text" class=" for" name="nombre" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="descripcionGrupo" class="form-labe">Descripción del grupo:</label>
              <textarea id="descripcionGrupo"  name="descripcionGrupo" required></textarea>
            </div>
            <div class="mb-3">
              <label for="areaInvestigacion" class="form-labe">Área de investigación:</label>
              <input type="text" id="areaInvestigacion" class="for b2"  name="areaInvestigacion" required>
            </div>
            <div class="mb-3">
              <label for="miembrosGrupo" class="form-labe">Miembros del grupo:</label>
              <textarea id="miembrosGrupo" name="miembrosGrupo"  class="for b2"  required placeholder="Lista de nombres de los miembros, separados por comas"></textarea>
            </div>
              <div class="mb-3">
                <label for="fechaCreacion" class="form-labe">Fecha de creación:</label>
                <input type="date" id="fechaCreacion" class="for b2"  name="fechaCreacion" required>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn-brown" name="editarRegistro">Crear Grupo </button>                
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- javascript -->
  <script src="../js/scripts.js"></script>


</body>
</html>
