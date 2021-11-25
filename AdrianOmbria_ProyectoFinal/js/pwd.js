const submitBtn = document.querySelector('.submit-btn2');
const passNueva = document.querySelector('#passwordNueva');
const passNuevaRep = document.querySelector('#passwordNuevaRep');
const submit = document.querySelector('#contactForm2');

submitBtn.addEventListener('click', () => {
    if (passNueva != passNuevaRep) {
        showAlert('No has repetido bien la contraseña nueva');

    } else {
        submit.submit();
    }
})