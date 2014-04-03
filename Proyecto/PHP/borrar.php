<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/Proyecto/' . 'PHP/funciones.php');

if (!isset($_GET["action"])) {
    if (isset($_GET["tabla"]) && count($_GET) > 2) {
        ?>Estas seguro?<br>
        <form id="delete<?php echo $_GET["tabla"]; ?>" action="PHP/borrar.php?tabla=<?php echo $_GET["tabla"]; ?>&action=borrar" method="POST">
            NIF: <input type="text" value="<?php echo $_GET["NIF"] ?>" name="NIF" id="NIF">
            <br>
            <input type="submit" value="Confirmar" id="borrar<?php echo $_GET["tabla"]; ?>" />
            <a style="cursor:pointer"class="closeVentana">Salir</a>
        </form>
        <script>
            inicializarEventosBorrar("<?php echo $_GET["tabla"]; ?>");
        </script>
        <?php
    }else{
        echo 'Error al cargar';
    }
}else{
    borrarDatos($_GET["tabla"], $_POST["NIF"]);
    ?>
        <script>
            inicializarEventosBorrar("<?php echo $_GET["tabla"]; ?>");
        </script>
        <a style="cursor:pointer"class="closeVentana">Salir</a><?php
}



