# examen
Prueba de evaluacion tecnica:

Desarrollo de una app web que permite registrar empleados.

Se usaron librerias para:
* La coneccion a la BD (ORM de Laravel)
* El ruteador de la pagina web (aura/router)
* La validacion de los campos del lado del servidor (vlucas/valitron)
* La implementacion del estandar psr-7, manejando todas las super globales en una sola variable (laminas/laminas-diactoros)

Se ocupo composer para el autoloading(psr-4) y la gestion de las dependencias.

Se implemento una API REST mediante las siguientes Rutas:
* localhost/empleados: retorna en un json todos los registros de empleados de la BD
* localhost/empleado: retorna en un json un registro de empleado aleatorio de la BD
* localhost/empleado/id: retorna en un json el registro que coincida con el ID del empleado

ejemplo: localhost/empleado/1, localhost/empleado/4, localhost/empleado/89.



