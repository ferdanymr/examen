document.getElementById('reg').onclick = redireccion;
const btnVisualizar = document.getElementById('ver');
const pagina = "http://localhost"

function redireccion(){
    location.href= pagina + '/registro';
}