<?php
$opcion = $_GET["menu"];

echo "<div id=\"subtitulo\">Menu de gestion de " . $opcion;
echo "</div>
            <table id=\"submenu\">
                    <tr>
                            <td><a id=\"listar\" href=\"Paginas/Listar.php/?tabla=" . $opcion . "\">Listar</a></td>
                            <td><a id=\"crear\" href=\"Paginas/Crear.php/?tabla=" . $opcion . "\">Crear</a></td>
                            <td><a id=\"mod\" href=\"Paginas/Modificar.php/?tabla=" . $opcion . "\">Modificar</a></td>
                            <td><a id=\"borrar\" href=\"Paginas/Borrar.php/?tabla=" . $opcion . "\">Borrar</a></td>
                    </tr>
            </table>";
?>

<section id="gestion">
    <script type="text/javascript">
        inicializarEventosGestion();
    </script>
</section>