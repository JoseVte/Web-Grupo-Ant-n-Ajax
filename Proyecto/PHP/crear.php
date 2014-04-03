<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/Proyecto/' . 'PHP/funciones.php');

if (!isset($_GET["action"])) {
    if (isset($_GET["tabla"])) {
        $tabla = $_GET["tabla"];
        ?>
        <form id="form<?php echo $tabla; ?>"  method="POST" action="PHP/crear.php?tabla=<?php echo $tabla; ?>&action=crear">
            <label for="NIF">NIF: </label>
            <input type="text" name="NIF" id="txtNif" maxlength="9"
                   pattern="^[0-9]{8}[A-Z]$" required="true"><br>
            <label for="Nombre">Nombre: </label>
            <input type="text" name="Nombre" id="txtNombre"required="true"></br>
            <label for="Apellidos">Apellidos: </label>
            <input type="text" name="Apellidos" id="txtApellidos"></br>
            <label for="Direccion">Dirección: </label>
            <input type="text" name="Direccion" id="txtDireccion" required="true"></br>
            <label for="Telefono">Telefono: </label>
            <input type="tel" name="Telefono" id="txtTelefono" required="true" maxlength="9"
                   pattern="^[0-9]{9}$"></br>
            <label for="Email">Email: </label>
            <input type="email" name="Email" id="txtEmail" required="true"
                   placeholder="me@example.com" pattern="^[a-zA-Z0-9_\-\.~]{2,}@[a-zA-Z0-9_\-\.~]{2,}\.[a-zA-Z]{2,4}$"></br>
            <?php salirCrear(); ?>
            <input type="submit" id="crear<?php echo $tabla; ?>" value="Crear" />
        </form>

        <section id="prueba">a</section>
        <script type="text/javascript">
            inicializarEventosCrear("<?php echo $tabla; ?>");
        </script>
        <?php
    } else {
        echo "Error al crear";
    }
} else {
    ?>
    <script>
        inicializarEventosCrear("<?php echo $_GET["tabla"]; ?>");
    </script>
    <?php
    salirCrear();
    $params = array();
    $values = array();
    foreach ($_POST as $key => $value) {
        $params[] = $key;
        $values[] = $value;
    }
    crearNuevo($_GET["tabla"], $params, $values);
}
?>
   


