// select inputs
const submitBtn1 = document.querySelector('.submit-btn');
const nick = document.querySelector('#nick');
const nombre = document.querySelector('#nombre');
const surnames = document.querySelector('#apellidos');
const email = document.querySelector('#email');
const phone = document.querySelector('#telefono');
const dni = document.querySelector('#dni');
const direction = document.querySelector('#direccion');
const age = document.querySelector('#edad');
const submit1 = document.querySelector('#contactForm');

submitBtn1.addEventListener('click', () => {
    if (nick.value.length < 3) {
        showAlert1('El nick debe tener mas de 3 caracteres');
    } else if (!nombre.value.length) {
        showAlert1('Escribe tu nombre');
    } else if (!surnames.value.length) {
        showAlert1('Escribe tus apellidos');
    } else if (!direction.value.length) {
        showAlert1('Escribe tu direccion');
    } else if (!email.value.length) {
        showAlert1('Escribe tu email');
    } else if (!age.value.length) {
        showAlert1('Escribe tu edad');
    } else if (phone.value.length <= 8) {
        showAlert1('El telefono debe tener 9 digitos');
    } else if (dni.value.length <= 8) {
        showAlert1('El dni debe tener 9 caracteres');
    } else {
        // submi form
        submit1.submit();
    }
})

// alerta con tiempo
const showAlert1 = (msg) => {
    let alertBox = document.querySelector('.alert-box');
    let alertMsg = document.querySelector('.error-msg');
    alertMsg.innerHTML = msg;
    alertBox.classList.add('show');
    setTimeout(() => {
        alertBox.classList.remove('show');
    }, 4000);
}