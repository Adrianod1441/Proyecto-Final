const submitBtn = document.querySelector('.submit-btn2');
const passNueva = document.querySelector('#passwordNueva');
const passNuevaRep = document.querySelector('#passwordNuevaRep');
const submit = document.querySelector('#contactForm2');

submitBtn.addEventListener('click', () => {
    if (passNueva.value != passNuevaRep.value) {
        showAlert('No has repetido bien la contraseña nueva');

    } else {
        submit.submit();
    }
})

const showAlert = (msg) => {
    let alertBox = document.querySelector('.alert-box');
    let alertMsg = document.querySelector('.error-msg');
    alertMsg.innerHTML = msg;
    alertBox.classList.add('show');
    setTimeout(() => {
        alertBox.classList.remove('show');
    }, 4000);
}