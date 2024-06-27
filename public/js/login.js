document.addEventListener("DOMContentLoaded", (event) => {
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
        alert("prueba");
    });

    btnCerrarModalRegistro.addEventListener("click", () => {
        modalRegistro.close();
    });
    // Vista modal Boton cambiar foto de perfil
    const abrirCarpeta = document.querySelector("#abrirCarpeta");
    const modal_cambiarFoto = document.querySelector("#modal_cambiarFoto");

    abrirCarpeta.addEventListener("click", () => {
        modal_cambiarFoto.showModal();
        alert("prueba");
    });

    // // Vista modal Boton cambiar foto de perfil
    // const abrirCarpeta = document.getElementById("abrirCarpeta");
    // const modal_cambiarFoto = document.getElementById("modal_cambiarFoto");

    // abrirCarpeta.addEventListener("click", () => {
    //     modal_cambiarFoto.classList.add("show");
    //     alert("prueba");
    // });
});

document
    .getElementById("ideaImage")
    .addEventListener("change", function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const previewImage = document.getElementById("previewImage");
                previewImage.src = e.target.result;
                previewImage.style.display = "block";
            };
            reader.readAsDataURL(file);
        }
    });

// //Alerta en el boton de publicar vista crearIdea
// document.getElementById('ideaForm').addEventListener('submit', function(event) {
//     event.preventDefault();

//     const ideaTitle = document.getElementById('ideaTitle').value;
//     const ideaDescription = document.getElementById('ideaDescription').value;
//     const ideaBoard = document.getElementById('ideaBoard').value;

//     console.log("Título:", ideaTitle);
//     console.log("Descripción:", ideaDescription);
//     console.log("Tablero:", ideaBoard);

//     alert("Idea publicada exitosamente!");
//     // Aquí puedes añadir la lógica para guardar la idea en tu base de datos o backend.
// });
