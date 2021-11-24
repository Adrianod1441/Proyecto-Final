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
        showAlert('The nickname must have more than 3 characters');
    } else if (password.value.length < 8) {
        showAlert('The password must have more than 8 characters');
    } else if (!nombre.value.length) {
        showAlert('Write your name');
    } else if (!surnames.value.length) {
        showAlert('Write your surname');
    } else if (!direction.value.length) {
        showAlert('Write your address');
    } else if (!email.value.length) {
        showAlert('Write your email');
    } else if (!age.value.length) {
        showAlert('Write your age');
    } else if (phone.value.length <= 8) {
        showAlert('The phone must have 9 digits');
    } else if (dni.value.length <= 8) {
        showAlert('The DNI must have 9 characters');
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