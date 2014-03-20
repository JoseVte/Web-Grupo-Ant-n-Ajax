<script type="text/javascript">
    inicializarEventosGestion();
</script>
<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/htdocs/Proyecto/' . 'PHP/funciones.php');

if(isset($_GET["tabla"])){
    $table=$_GET["tabla"];
    
?>

<form class="crear" name="crear" method="post">
    <label for="nif">NIF: </label><input type="text" id="nif" name="requerido"><label hidden="true" id="1">Campo obligatorio</label><br>
    <label for="nombre">Nombre: </label><input type="text" name="requerido" id="nombre"><label hidden="true" id="2">Campo obligatorio</label></br>
    <label for="apellidos">Apellidos: </label><input type="text" name="" id="apellidos"></br>
    <label for="direccion">Dirección: </label><input type="text" name="requerido" id="direccion"><label hidden="true" id="3">Campo obligatorio</label></br>
                
    <input type="button" id="crear<?php echo $table; ?>" value="Crear" />
</form>

<?php
    
}else
{
    echo "Error al crear";
}

?>

