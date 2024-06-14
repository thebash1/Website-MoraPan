let cont = 1;
function changeBg(){
    if(document.getElementById("btnMode") && (cont/2 != 0)){
        document.body.style.backgroundColor = "#1f1f1f";
    }
    if(document.getElementById("btnMode")){
        document.body.style.backgroundColor = "#fff";
    }

}

// para tooltip personalizado
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));

var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
});

// para escribir un mensaje en un contenedor
function showMessage(message) {
    document.getElementById('message').innerText = message;
};


// modal mensaje
function openModal() {
    // Abre el modal
    var myModal = new bootstrap.Modal(document.getElementById('messageModal'));
    myModal.show();

    // Cierra el modal después de 2 segundos (2000 ms)
    setTimeout(function() {
        myModal.hide();
    }, 2000);
}

// validar campos de formulario
(function () {
    'use strict'

    // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
    var forms = document.querySelectorAll('.needs-validation')

    // Iterar sobre ellos y evitar el envío
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()

document.getElementById('redirectButton').addEventListener('click', function() {
    // Mostrar el modal
    var myModal = new bootstrap.Modal(document.getElementById('redirectModal'), {
        backdrop: 'static',
        keyboard: false
    });
    myModal.show();

    // Esperar unos segundos y luego redirigir
    setTimeout(function() {
        window.location.href = 'http://127.0.0.1:5500/page1.html';
    }, 2000); // Redirigir después de 2 segundos
});