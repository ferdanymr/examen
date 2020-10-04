//le agregamos un evento click al boton de registro
document.getElementById('reg').onclick = redireccionRegistrar;

document.getElementById('ver').onclick = redireccionConsultar;

//guardamos base de la pagina en la que estamos
const pagina = "http://localhost"

// al momento de darle click al btn registro redireccionamos a otra seccion de la misma 
function redireccionRegistrar(){
    location.href= pagina + '/registro';
}

function redireccionConsultar(){
    location.href= pagina + '/consulta';
}