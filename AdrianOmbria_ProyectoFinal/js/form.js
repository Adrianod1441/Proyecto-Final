const loader = document.querySelector('.loader');

// select inputs
const submitBtn = document.querySelector('.submit-btn');
const nick = document.querySelector('#nick');
const password = document.querySelector('#password');
const nombre = document.querySelector('#nombre');
const surnames = document.querySelector('#apellidos');
const email = document.querySelector('#email');
const phone = document.querySelector('#telefono');
const dni = document.querySelector('#dni');
const direction = document.querySelector('#direccion');
const age = document.querySelector('#edad');
const tac = document.querySelector('#terms-and-cond');

submitBtn.addEventListener('click', () => {
    if (nick.value.lenght < 3) {
        showAlert('el nick debe tener mas de 3 caracteres');
    } else if (!email.value.lenght) {
        showAlert('escribe tu email');
    } else if (password.value.lenght < 8) {
        showAlert('la contraseña debe tener mas de 8 caracteres');
    } else if (!nombre.value.lenght) {
        showAlert('escribe tu nombre');
    } else if (!surnames.value.lenght) {
        showAlert('escribe tus apellidos');
    } else if (!direction.value.lenght) {
        showAlert('escribe tu direccion');
    } else if (!phone.value.lenght) {
        showAlert('escribe tu telefono');
    } else if (!age.value.lenght) {
        showAlert('escribe tu edad');
    } else if (dni.value.lenght < 9) {
        showAlert('el dni debe tener 9 caracteres');
    } else if (!tac.checked) {
        showAlert('debes aceptar los terminos y condiciones');
    } else {
        // submit form
        loader.style.display = 'block';
    }
})

// alert function
const showAlert = (msg) => {
    let alertBox = document.querySelector('.alert-box');
    let alertMsg = document.querySelector('.alert-msg');
    alertMsg.innerHTML = msg;
    alertBox.classList.add('show');
    setTimeout(() => {
        alertBox.classList.remove('show');
    }, 3000);
}