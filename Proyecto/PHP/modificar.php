<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/Proyecto/' . 'PHP/funciones.php');

if (!isset($_GET["action"])) {
    if (isset($_GET["tabla"]) && count($_GET) > 2) {
        $tabla = $_GET["tabla"];

        $datos = array();
        $claves = array();
        $i = 0;
        foreach ($_GET as $key => $value) {
            $claves[$i] = $key;
            $datos[$i] = $value;
            $i++;
        }

        imprimirModificar($tabla, $claves, $datos);
        ?>
        <script>
            inicializarEventosMod("<?php echo $tabla; ?>");
        </script>
        <?php
    } else {
        echo "Error al cargar";
    }
} else {
    ?>
    <script>
        inicializarEventosMod("<?php echo $_GET["tabla"]; ?>");
    </script>
    <?php
    if(modificarDatos($_GET["tabla"],$_POST)){
        echo 'Modificacion correcta<br>';
    }else{
        echo 'Modificacion incorrecta<br>';
    }
    salirModificar();
    
}