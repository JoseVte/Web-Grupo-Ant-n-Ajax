<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/htdocs/Proyecto/' . 'PHP/funciones.php');

if(isset($_GET["tabla"])){
    $table=$_GET["tabla"];
    
?>

<form class="crear">
    NIF: <input type="text" id="nif" /><br>
    Nombre: <input type="text" id="nombre" /><br>
    Apellidos: <input type="text" id="apellidos" /><br>
    <input type="button" value="Crear" />
</form>

<?php
    
}else
{
    echo "Error al crear";
}

?>

