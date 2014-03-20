<html>
    <head>
        <title>Menu principal</title>
        <meta charset="UTF-8">
        <?php
        include ($_SERVER["DOCUMENT_ROOT"] . '/htdocs/Proyecto/' . 'PHP/funciones.php');

        cargarEstilo('estilo.css');
        cargarJavaScript('jquery.js');
        cargarJavaScript('funciones.js');
        ?>

        <!-- Código del Icono -->
        <link href="Imagenes/icono.ico" type="image/x-icon" rel="shortcut icon" />

    </head>
    <body>
        <?php include_once ($_SERVER["DOCUMENT_ROOT"] . '/htdocs/Proyecto/' . 'PHP/cabecera.php'); ?>
        <?php include_once ($_SERVER["DOCUMENT_ROOT"] . '/htdocs/Proyecto/' . 'PHP/navegacion.php'); ?>

        <article>
            <section id="aplicacion">
                <script type="text/javascript">
                    $("#aplicacion").load("Paginas/Inicio.php");
                </script>
            </section>
        </article>
    </body>
</html>