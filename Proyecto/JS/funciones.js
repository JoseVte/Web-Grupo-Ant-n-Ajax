//Carga los eventos en al inicio
$(document).ready(inicializarEventos);

//Crear los eventos para cambiar de paginas
function inicializarEventos()
{
    $("#inicio").click(function(e) {
        presionEnlace(e, "aplicacion")
    });

    $("#cliente").click(function(e) {
        presionEnlace(e, "aplicacion")
    });
    $("#proveedor").click(function(e) {
        presionEnlace(e, "aplicacion")
    });
    $("#usuario").click(function(e) {
        presionEnlace(e, "aplicacion")
    });

    $("#albaran").click(function(e) {
        presionEnlace(e, "aplicacion")
    });
    $("#factura").click(function(e) {
        presionEnlace(e, "aplicacion")
    });
    $("#presupuesto").click(function(e) {
        presionEnlace(e, "aplicacion")
    });


    $("#login").click(function(e) {
        presionEnlace(e, "aplicacion")
    });
}

//Crea los eventos de la pagina de gestion
function inicializarEventosGestion() {
    $("#listar").click(function(e) {
        presionEnlace(e, "gestion")
    });
    $("#crear").click(function(e) {
        presionEnlace(e, "gestion")
    });
    $("#mod").click(function(e) {
        presionEnlace(e, "gestion")
    });
    $("#borrar").click(function(e) {
        presionEnlace(e, "gestion")
    });
}

//Accion cuando se clicka en el link
function presionEnlace(e, id)
{
    e.preventDefault();
    var url = e.target.getAttribute('href');

    cargarResultado(url, id);
}

//Muestra el resultado de la carga en un id
function cargarResultado(url, id)
{
    $("#" + id).load(url);
}



