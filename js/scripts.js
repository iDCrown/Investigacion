const modal1 = document.getElementById('modal1');


function mostrarModal1() {

    const bootstrapModal = new bootstrap.Modal(modal1);
    bootstrapModal.show();
}

const btnMostrarModal1 = document.querySelector('[onclick="mostrarModal1()"]');

if (btnMostrarModal1) {
    btnMostrarModal1.addEventListener('click', mostrarModal1);
}
