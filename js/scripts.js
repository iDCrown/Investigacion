//DOM
document.addEventListener('DOMContentLoaded', function() {

  //MODALES DE REGISTRO
  function mostrar_modal1 () {
  //Muestra el modal de Registro Grupo
    const modal1 = document.getElementById('modal1');
  //instancia de una funcion propia de bootrap para mostrar modales

    const bootstrapModal = new bootstrap.Modal(modal1);
    bootstrapModal.show();
  }

  function mostrar_modal2 () {
    //Muestra el modal de Registro Investigadores
    const modal2 = document.getElementById('modal2');
    //instancia de una funcion propia de bootrap para mostrar modales
    const bootstrapModal2 = new bootstrap.Modal(modal2);
    bootstrapModal2.show();
  }


  //CONSTANTES DE CONTENIDO HTML QUE QUIERO QUE SE MUESTRE



  //constante que hubica en el vista_investigador a el id Vista_Investigacion 
  const Vinvestigadores = document.getElementById('Vista_Investigacion');
  //constante que hubica en el index.php a el id investigadores
  const pag_principal = document.getElementById('pag_index');




  //FUNCIONES DE DISPLAY



  //Vista de Investigadores
  function Show_investigadores() {
    if (Vinvestigadores){
      pag_principal.style.display= "none";
      Vinvestigadores.style.display="grid";
      btnMostrarInvestigadores.classList.add('activee');
    }
  }
  //Seccion principal INICIO
  function inicio() {
    if(Vinvestigadores){
      if (btnMostrarInvestigadores.classList.contains('activee')) {
        btnMostrarInvestigadores.classList.remove('activee');
      }
      pag_principal.style.display= "grid";
      Vinvestigadores.style.display= "none";
    }
  }


  //CONSTANTES DE NAV EN EL INDEX



  //constante que hubica en el index.php a el id investigadores
  const btnMostrarInvestigadores = document.getElementById('investigadores');
  //constante que ubica el id icono en index.php
  const iconInicio = document.getElementById('inicio');


  //ESCUCHADOR DEL EVENTO


  //estos botones son unos escuchadores de eventos, escucha el click que le hago al nav y activa la funcion Show_investigadores
  if (btnMostrarInvestigadores) {
    btnMostrarInvestigadores.addEventListener('click', Show_investigadores);
  } 
  //estos botones son unos escuchadores de eventos, escucha el click que le hago al icono y activa la funcion inicio

  if (iconInicio) {
    iconInicio.addEventListener('click', inicio);
  }



  //PRIMERA VISUALIZACION AL CARGAR EL DOM



  // este codigo lo que hace es que cuando carque la imagen me muestre la fincion inicio de primeras
  // inicio es la pagina principal
  inicio();
})