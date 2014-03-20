<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . '/htdocs/Proyecto/' . 'Clases/DBD/elementDBD.php');

//Permite cargar estilos de la carpeta Estilos
function cargarEstilo($estilo) {
    echo '<link rel="stylesheet" type="text/css" charset="utf-8" href="Estilos/' . $estilo . '"> ';
}

//Carga libreris de JavaScript en el directorio JS
function cargarJavaScript($javascript) {
    echo '<script src="JS/' . $javascript . '" language="JavaScript"></script>';
}

//Filtra una seleccion por un parametro
function filtrarNombre($param, $table, $where) {
    $db = new elementDBD();
    $db->establecerConexion();
    $texto = $db->imprimir_tablas($param, $table, $where);
    $db->cerrarConexion();

    echo $texto;
}

//Modifica una o varias lineas de la BD y devuelve si se ha podido realizar
function modificar($table, $set, $where) {
    $db = new elementDBD();
    $db->establecerConexion();
    $texto = $db->update($table, $set, $where);
    $db->cerrarConexion();
    if ($texto == true) {
        echo "Se ha modificado correctamente";
    } else {
        echo "Ha habido algun error";
    }
}

//Imprime los resultados de una lista pasandole como string 
function imprimir_tabla($string) {
    $base_datos = new elementDBD();
    $base_datos->establecerConexion();
    $resultado = $base_datos->execQuery($string);

    $base_datos->cerrarConexion();

    for ($i = 0; $i < $resultado->num_rows; $i++) {
        echo "<tr>";
        $row = $resultado->fetch_assoc();
        foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
}
?>


