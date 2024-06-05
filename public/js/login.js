document.addEventListener('DOMContentLoaded', (event) => {
    const btnAbrirModal = document.querySelector("#btn-abrir-modal");
    const btnCerrarModal = document.querySelector("#btn-cerrar-modal");
    const modal = document.querySelector("#modal");

    btnAbrirModal.addEventListener("click", () => {
        modal.showModal();
    });

    btnCerrarModal.addEventListener("click", () => {
        modal.close();
    });

    // Modal registro
    const btnAbrirModalRegistro = document.querySelector("#btn-abrir-modal-registro");
    const btnCerrarModalRegistro = document.querySelector("#btn-cerrar-modal-registro");
    const modalRegistro = document.querySelector("#modal-registro");

    btnAbrirModalRegistro.addEventListener("click", () => {
        modalRegistro.showModal();
    });

    btnCerrarModalRegistro.addEventListener("click", () => {
        modalRegistro.close();
    });
});
