//Carga los eventos en al inicio
$(document).ready(inicializarEventos);

//Crear los eventos para cambiar de paginas
function inicializarEventos()
{
    $("#ventanaEmergenteMod").hide();
    $("#ventanaEmergenteBorrar").hide();
    $("#ventanaEmergenteCrear").hide();

    window.onpopstate = function(event) {
        if (event.state) {
            var state = event.state;
            $("#aplicacion").html(state.data);
        }

    };

    $("a").click(function(event) {
        event.preventDefault();
        var href = $(this).attr("href");
        var enlace = $(this).data("enlace");

        $("#aplicacion").load(href, function() {
            var html = $("#aplicacion").html();
            history.pushState({data: html}, enlace, enlace);

        });
    });

    $("#Login").load("PHP/Login.php");

    $("ul.navegacion > li > a").hover(function() {
        var id = this.id;
        var nav = document.getElementsByName("flechaIz_" + id);

        if (nav[0].hidden === false) {
            nav[0].hidden = true;
        } else {
            nav[0].hidden = false;
        }
    });
}

//Crea los eventos de la pagina de login
function inicializarEventosLogin() {
    $("#panelControl").click(function(event) {
        event.preventDefault();
        var href = $(this).attr("href");

        $("#aplicacion").load(href);
    });

    $("#panelDeControl").click(function(event) {
        event.preventDefault();
        var href = $(this).attr("href");

        $("#aplicacion").load(href);
    });

    var login = $("#formLogin");

    $("#iniciarLogin").click(function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
        login.on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(data) {
                    $("#aplicacion").html(data);
                    $("#Login").load("PHP/Login.php");
                }
            });
        });
    });
}

//Crea los eventos de la pagina de gestion
function inicializarEventosGestion(tabla) {
    inicializarEventosMod(tabla);
    inicializarEventosBorrar(tabla);
    inicializarEventosCrear(tabla);
}

//Crea los eventos de la pagina de modificacion
function inicializarEventosMod(tabla) {
    var form = $("#mod" + tabla);

    $("a.closeVentanaDeslizante").click(function(event) {
        event.preventDefault();
        $("#ventanaEmergenteMod").hide("slow", function() {
            $("#ventanaEmergenteMod").html("");
        });
    });

    $("a.modificar").click(function(event) {
        event.preventDefault();
        var $dir = "../Proyecto/PHP/modificar.php?tabla=" + tabla + "&" + $(this).data("row");
        $("#ventanaEmergenteMod").load($dir, function() {
            $("#ventanaEmergenteMod").show("slow");
        });
    });

    $("#modificar" + tabla).click(function() {
        form.on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(data) {
                    $("#ventanaEmergenteMod").html(data);
                }
            });
        });
    });
}

//Crea los eventos de la pagina de borrar
function inicializarEventosBorrar(tabla) {
    var form = $("#delete" + tabla);

    $("a.closeVentana").click(function(event) {
        event.preventDefault();
        $("#ventanaEmergenteBorrar").hide("slow", function() {
            $("#ventanaEmergenteBorrar").html("");
        });
    });

    $("a.borrar").click(function(event) {
        event.preventDefault();
        var $dir = "../Proyecto/PHP/borrar.php?tabla=" + tabla + "&" + $(this).data("row");
        $("#ventanaEmergenteBorrar").load($dir, function() {
            $("#ventanaEmergenteBorrar").show("slow");
        });
    });

    $("#borrar" + tabla).click(function() {
        form.on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(data) {
                    $("#ventanaEmergenteBorrar").html(data);
                }
            });
        });
    });
}

//Crea los eventos de la pagina de creacion
function inicializarEventosCrear(tabla) {
    var form = $("#form" + tabla);

    $("a.closeVentanaCrear").click(function(event) {
        event.preventDefault();
        $("#ventanaEmergenteCrear").hide("slow", function() {
            $("#ventanaEmergenteCrear").html("");
        });
    });

    $("a.crear").click(function(event) {
        event.preventDefault();
        var $dir = "../Proyecto/PHP/crear.php?tabla=" + tabla + "&" + $(this).data("row");
        $("#ventanaEmergenteCrear").load($dir, function() {
            $("#ventanaEmergenteCrear").show("slow");
        });
    });

    form.on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function(data) {
                $("#ventanaEmergenteCrear").html(data);
            }
        });
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


