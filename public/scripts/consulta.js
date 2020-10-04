const tabla = document.getElementById('datosTabla');
$(document).ready(consultar('nada'));
/**
 * por medio de jquery se selecciona la barra de busqueda y se le agrega un eventListener 
 * para que escuche cuando se deje de precionar una tecla
 */

$('#BusquedaCampo').keyup(function (e) {
    //let para tomar el dato del keyup y del filtro
    let id = $('#BusquedaCampo').val();

    //preguntamos si el dato tiene una longitud de almenos 1 elemento para realizar la busqueda
    //si no al ID le asignamos el string nada
    if (id.length == 0) {

        id = 'nada';

    }

    consultar(id);
})

/**
 * 
 * le pasamos por parametro el id con el numero en caso de tener un id para 
 * buscar o con el string nada para mostrar a todos
 * los empleados
 * con la respuesta que es un arreglo en json, lo convertimos a objeto y lo 
 * recorremos con un for each, en un templete vamos almacenando una estructura contenido de tabla html
 * para despues insertar en la tabla html
 */
function consultar(id) {
    $.ajax({
        url: '/consulta/id',
        type: 'POST',
        data: { id },
        success: function (response) {
            let empleados = JSON.parse(response);
            let plantilla = ``;
                empleados.forEach(empleado => {
                    plantilla += `
                    <tr>
                       <th scope = "row"> ${empleado.id} </th>
                          <td> ${empleado.name} </td>
                          <td> ${empleado.lastName}</td>
                          <td> ${empleado.secondLastName}</td>
                          <td> ${empleado.fechaNacimiento} </td>
                          <td> ${empleado.ingresosAnuales} </td>
                    </tr>`

                })
                tabla.innerHTML = plantilla;
        }
    })
}
