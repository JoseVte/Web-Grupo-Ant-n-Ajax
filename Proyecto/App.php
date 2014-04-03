<html>
    <head>
        <title>Menu principal</title>
        <meta charset="UTF-8">
        <base href = "<?php echo "http://".$_SERVER['SERVER_NAME']."/Proyecto/";?>" target="_top" />
        <?php
        include_once ($_SERVER["DOCUMENT_ROOT"] . '/Proyecto/' . 'PHP/funciones.php');
        
        session_start();
        
        cargarEstilo('estilo.css');
        cargarJavaScript('jquery.js');
        cargarJavaScript('jquery-ui.js');
        cargarJavaScript('validation.js');
        cargarJavaScript('funciones.js');
        ?>

        <!-- Código del Icono -->
        <link href="Imagenes/icono.ico" type="image/x-icon" rel="shortcut icon" />
    </head>
    <body>
        <?php include_once ($_SERVER["DOCUMENT_ROOT"] . '/Proyecto/' . 'PHP/cabecera.php'); ?>
        <?php include_once ($_SERVER["DOCUMENT_ROOT"] . '/Proyecto/' . 'PHP/navegacion.php'); ?>

        <article>
            <section id="aplicacion">
                <script type="text/javascript">
                    <?php
                    $pageLoad="Inicio";
                    $pageHash="";
                    if(isset($_GET["pageLoad"])){
                        $pageLoad=$_GET["pageLoad"];
                        foreach ($_GET as $key=>$value){
                            $pageHash.=$key."=".$value."&";
                        }
                    }
                    ?>
                    $("#aplicacion").load("Paginas/<?php echo $pageLoad;?>.php?<?php echo $pageHash;?>");
                    
                </script>
            </section>
        </article>
        <div id="ventanaEmergenteMod"></div>
        <div id="ventanaEmergenteBorrar"></div>
        <div id="ventanaEmergenteCrear"></div>
        <footer>
            Aplicacion desarrollada por el grupo P2G05
        </footer>
    </body>
</html>