//obtenemos cada unos de los elementos del body
const form = document.getElementById('form');
const name = document.getElementById('name');
const lastName = document.getElementById('lastName');
const secondLastName = document.getElementById('secondLastName');
const birthday = document.getElementById('birthday');
const ingresos = document.getElementById('ingresosA');

/**
 * cuando demos submit en el form quitaremos el comportamiento por default 
 * y mandaremos a llamar al metodo registro
 */
form.addEventListener('submit', (event)=> {
    event.preventDefault();
    registro();
});

/**
 * en un arreglo englobamos todos los datos del form
 * y lo mandamos por ajax atravez de metodo post
 */

function registro() {
    data = {
        'name' : name.value,
        'lastName' : lastName.value,
        'secondLastName' : secondLastName.value,
        'birthday' : birthday.value,
        'ingresosA' : ingresos.value
        }
    
    $.ajax({
        url: '/registro/datos',
        type: 'POST',
        data: { data },
        success: function (response) {
            alert(response);
        }
    });
}