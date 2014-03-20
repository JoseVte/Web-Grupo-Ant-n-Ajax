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


    $("#panelControl").click(function(e) {
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
    
    $("#crearCliente").click(function(e) {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
        if (validaForm("#crear")) {                               // Primero validará el formulario.
            presionEnlace(e, "gestion");
        }
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
    
function validaForm(){
    $return = true;
    $formulario = document.getElementsByName("crear")[0];
    $errores = [];
    
    for(i=0;i<$formulario.elements.length;i++){
        if($formulario.elements[i].value==="" && $formulario.elements[i].name==="requerido"){
            $errores.push(i);
        }
    }
    
    if($errores){
        $return = false;
        for(i=0;i<$errores.length;i++){
            document.getElementById(i+1).hidden=false;
        }
    }
    return $return;
}



