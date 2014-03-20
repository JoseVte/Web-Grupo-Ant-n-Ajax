<?php 
include_once ($_SERVER["DOCUMENT_ROOT"] . '/htdocs/Proyecto/' . 'PHP/funciones.php');

if(isset($_GET["tabla"])){
    $table=$_GET["tabla"];
    if($table=='Cliente'  || $table=='Proveedor'){
        echo '<table class="listar" id="Cliente">
                <tr>
                    <th>NIF</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                </tr>';

        imprimir_tabla("SELECT NIF,Nombre,Apellidos,Direccion,Telefono,Email FROM ".$table);
    }
    
    if($table=='Usuario'){
    echo '<table class="listar" id="Usuario">
            <tr>
                <th>NIF</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>NvAcceso</th>
                <th>Pass</th>
             </tr>';
        imprimir_tabla("SELECT NIF,Nombre,Apellidos,NvAcceso,Pass FROM ".$table);
    }
}else
{
    echo "Error al listar";
}
?>