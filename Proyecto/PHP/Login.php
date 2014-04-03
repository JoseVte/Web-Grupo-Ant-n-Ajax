<?php
session_start();
if (!isset($_SESSION["conectado"])) {
    ?><a id="panelControl" href="Paginas/Login.php">Login</a><?php
} else {
    ?><a id="panelControl" href="Paginas/CerrarSesion.php">Hola, <?php echo $_SESSION["nombre"]; ?></a>
    <br><a id="panelDeControl" href="Paginas/PanelControl.php">Panel de control</a>
        <?php
}
?>
<script type="text/javascript">
    inicializarEventosLogin();
</script>