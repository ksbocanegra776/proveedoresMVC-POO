var enviar = document.getElementById('loginBtn');
var password = document.getElementById('password');
var email = document.getElementById('email');

enviar.addEventListener('click', function(evt) {

    if ((password.value === '') || (email.value === '')) {

        alert('Todos los campos son obligatorios')
        evt.preventDefault();
        return false;

    } else if ((password.value != '') || (email.value != '')) {

        if ((password.value == '123') && (email.value == 'admin@gmail.com')) {

            window.location.href = "adminUser/adminPrincipal.html";

        }
        if ((password.value == '123') && (email.value == 'auxiliar@gmail.com')) {
            window.location.href = "auxUser/auxiliar.html";
        }

    }
});