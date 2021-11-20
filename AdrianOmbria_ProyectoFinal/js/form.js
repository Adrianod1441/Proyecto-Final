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
    if (nick.value.length < 3) {
        showAlert('El nick debe tener mas de 3 caracteres');
    } else if (password.value.length < 8) {
        showAlert('La contraseña debe tener mas de 8 caracteres');
    }  else if (!nombre.value.length) {
        showAlert('Escribe tu nombre');
    } else if (!surnames.value.length) {
        showAlert('Escribe tus apellidos');
    } else if (!direction.value.length) {
        showAlert('Escribe tu direccion');
    }else if (!email.value.length) {
        showAlert('Escribe tu email');
    }  else if (!age.value.length) {
        showAlert('Escribe tu edad');
    }else if (phone.value.length < 9) {
        showAlert('El telefono debe tener 9 digitos');
    } else if (dni.value.length < 9) {
        showAlert('El dni debe tener 9 caracteres');
    } else if (!tac.checked) {
        showAlert('Debes aceptar los terminos y condiciones');
    } else {
        // submi form
        loader.style.display = 'block';
    }
})

// alerta con tiempo
const showAlert = (msg) => {
    let alertBox = document.querySelector('.alert-box');
    let alertMsg = document.querySelector('.error-msg');
    alertMsg.innerHTML = msg;
    alertBox.classList.add('show');
    setTimeout(() => {
        alertBox.classList.remove('show');
    }, 4000);
}