//DOM
document.addEventListener('DOMContentLoaded', function() {

  //MODALES DE REGISTRO
  function mostrar_modal1 () {
  //Muestra el modal de Registro Grupo
    const modal1 = document.getElementById('modal1');
  //instancia de una funcion propia de boostrap para mostrar modales

    const bootstrapModal = new bootstrap.Modal(modal1);
    bootstrapModal.show();
  }

  function mostrar_modal2 () {
    //Muestra el modal de Registro Investigadores
    const modal2 = document.getElementById('modal2');
    //instancia de una funcion propia de boostrap para mostrar modales
    const bootstrapModal2 = new bootstrap.Modal(modal2);
    bootstrapModal2.show();
  }


  //CONSTANTES DE CONTENIDO HTML QUE QUIERO QUE SE MUESTRE



  //constante que ubica en el vista_investigador a el id Vista_Investigacion 
  const Vinvestigadores = document.getElementById('Vista_Investigacion');
  //constante que ubica en el index.php a el id investigadores
  const pag_principal = document.getElementById('pag_index');
  //constante que ubica en el index.php a el id grupos
  const Vgrupos = document.getElementById('Vista_grupo');
  //constante que ubica en el index.php a el id libros
  const RPlibro = document.getElementById('productoLBR');


  //FUNCIONES DE DISPLAY



  //Vista de Investigadores
  function Show_investigadores() {
    if (Vinvestigadores){
      pag_principal.style.display= "none";
      Vinvestigadores.style.display="grid";
      Vgrupos.style.display = "none"; 
      RPlibro.style.display = "none"; 
      btnMostrarInvestigadores.classList.add('activee');
  }
  if(Vgrupos){
    if (btnMostrarGrupos.classList.contains('activee')) {
      //btnMostrarInvestigadores.classList.remove('activee');
      //(btnMostrarInvestigadores.classList.contains('activee') || 
      btnMostrarGrupos.classList.remove('activee')
    }
  }
}

  //vista de Grupos de investigadores
  function show_grupos(){
    if (Vgrupos){
    pag_principal.style.display= "none";
    Vgrupos.style.display="grid";
    Vinvestigadores.style.display="none";
    RPlibro.style.display = "none"; 
    btnMostrarGrupos.classList.add('activee');
    }
    if(Vinvestigadores){
      if (btnMostrarInvestigadores.classList.contains('activee')) {
        btnMostrarInvestigadores.classList.remove('activee');
        //btnMostrarGrupos.classList.remove('activee')
      }
    }
  }
  //Seccion principal INICIO
  function inicio() {
    if(Vinvestigadores || Vgrupos){
      if (btnMostrarInvestigadores.classList.contains('activee') || btnMostrarGrupos.classList.contains('activee') || btnMostrarLibro.classList.contains('activee')) {
        btnMostrarInvestigadores.classList.remove('activee');
        btnMostrarGrupos.classList.remove('activee')
        btnMostrarLibro.classList.remove('activee')
      }
      pag_principal.style.display= "grid";
      Vinvestigadores.style.display= "none";
      Vgrupos.style.display = "none";
      RPlibro.style.display = "none"; 
    }
  }
   //Seccion de formulario de LIBRO
  function Rlibro() {
    if(Vinvestigadores || Vgrupos){
      if (btnMostrarInvestigadores.classList.contains('activee') || btnMostrarGrupos.classList.contains('activee')) {
        btnMostrarInvestigadores.classList.remove('activee');
        btnMostrarGrupos.classList.remove('activee');

      }
      RPlibro.style.display = "grid"; 
      pag_principal.style.display= "none";
      Vinvestigadores.style.display= "none";
      Vgrupos.style.display = "none";
    }
  }



  //CONSTANTES DE NAV EN EL INDEX



  //constante que ubica en el index.php a el id investigadores
  const btnMostrarInvestigadores = document.getElementById('investigadores');
  //constante que ubica el id icono en index.php
  const iconInicio = document.getElementById('inicio');
//constante que ubica en el index.php el id grupos
  const btnMostrarGrupos = document.getElementById('Grupos');
  //constante que ubica en el index.php el id libros
  const btnMostrarLibro = document.getElementById('ProductosLbr');


  //ESCUCHADOR DEL EVENTO


  //estos botones son unos receptores de eventos, escucha el click que le hago al nav y activa la funcion Show_investigadores
  if (btnMostrarInvestigadores) {
    btnMostrarInvestigadores.addEventListener('click', Show_investigadores);
  } 
  //estos botones son unos receptores de eventos, escucha el click que le hago al nav y activa la funcion Show_grupos
  if(btnMostrarGrupos){
    btnMostrarGrupos.addEventListener('click', show_grupos);
  }
  //estos botones son unos receptores de eventos, escucha el click que le hago al icono y activa la funcion inicio

  if (iconInicio) {
    iconInicio.addEventListener('click', inicio);
  }

  //estos botones son unos receptores de eventos, escucha el click que le hago al icono y activa la funcion libro

  if (btnMostrarLibro) {
    btnMostrarLibro.addEventListener('click', Rlibro);
  }
  


  //PRIMERA VISUALIZACION AL CARGAR EL DOM



  // este codigo lo que hace es que cuando carque la imagen me muestre la fincion inicio de primeras
  // inicio es la pagina principal
  inicio();
})