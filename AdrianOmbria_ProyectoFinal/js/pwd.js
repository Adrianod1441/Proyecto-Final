const submitBtn = document.querySelector('.submit-btn');
const passwordNueva = document.querySelector('#passwordNueva');
const passwordNuevaRep = document.querySelector('#passwordNuevaRep');
const submit = document.querySelector('#contactForm2');

submitBtn.addEventListener('submit', () => {
    if (passwordNueva !== passwordNuevaRep) {
        showAlert('No has repetido bien la contraseña nueva');

    } else {
        submit.submit();
    }
})