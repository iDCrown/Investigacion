<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/registroGrupo.css">
</head>
<body>
  <div class="modal fade" id="modal2"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-lg-down  modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Investigador</h1>
        </div>
        <div class="modal-body">
          <form id="registroGrupoInvestigacion" class="conteiner-modal" method="POST" action="../php/Investigadores.php">
            <div class=" mb-3">
              <label for="nombre" class="form-labe">Nombre del Investigador:</label>
              <input type="text" class=" for" name="nombre" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
              <label for="areaInvestigacion" class="form-labe">Correo Electronico</label>
              <input type="email" id="areaInvestigacion" class="for b2"  name="email" required>
            </div>
            <div class="mb-3">
              <label for="miembrosGrupo" class="form-labe">Centro de Trabajo:</label>
              <input type="text" class=" for" name="centroInv" id="exampleInputPassword1" required>
            </div>
            <div class="forml1">
              <div class="first mb-3">
                <label for="validationCustom04" class="form-label">Grupo de Investigacion</label>
                <select class="form-select for" id="validationCustom04" >
                  <option selected disabled value="">grupo 1</option>
                  <option>...</option>
                </select>
              </div>
              <div class="check mb-3">
                <div class="form-check form-switch form-check-reverse">
                  <label class="form-label form-check-label" for="flexSwitchCheckReverse">Estado</label>
                  <input class="form-check-input input_check" type="checkbox" id="flexSwitchCheckReverse" >
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="enviar" class="btn-brown" name="editarRegistro">Registrar </button>                
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
