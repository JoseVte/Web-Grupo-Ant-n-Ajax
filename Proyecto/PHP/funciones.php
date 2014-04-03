<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . '/Proyecto/' . 'Clases/DBD/elementDBD.php');

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

//Crea el formulario de la modificacion
function imprimirModificar($tabla,$claves,$datos){
    echo '<form class="modificar" id="mod'.$tabla.'" action="PHP/modificar.php?tabla='.$tabla.'&action=mod" method="POST">';
    
    for($i = 1;$i < count($claves);$i++){
        echo '<label for="'.$claves[$i].'">'.$claves[$i].': </label>';
        echo '<input type="text" value="'.$datos[$i].'" name="'.$claves[$i].'" id="'.$claves[$i].'"><br>';
    }
    salirModificar();
    echo '<input type="submit" id="modificar'.$tabla.'" value="Modificar" />';
    echo '</form>';
}

function salirModificar(){
    echo '<a style="cursor:pointer"class="closeVentanaDeslizante">Salir</a>';
}

function salirCrear(){
    echo '<a style="cursor:pointer"class="closeVentanaCrear">Salir</a>';
}

//Carga la linea para el formulario de modificar
function enlaceModificar($row){
    $result="";
    $result.="<a class='modificar' data-row='";
    foreach ($row as $key=>$value){
        $result.=$key."=".urlencode($value)."&";
    }
    $result.="' style='cursor:pointer'>Modificar</a>";
    return $result;
}

//Carga la linea para el formulario de borrar
function enlaceBorrar($row){
    $result="";
    $result.="<a class='borrar' data-row='";
    foreach ($row as $key=>$value){
        $result.=$key."=".urlencode($value)."&";
    }
    $result.="' style='cursor:pointer'>Borrar</a>";
    return $result;
}

//Carga el enlace para el formulario de crear
function enlaceCrear($tabla){
    $result="";
    $result.="<a class='crear' style='cursor:pointer'>Añadir ".$tabla."</a>";
    return $result;
}

//Imprime los resultados de una lista pasandole como string 
function imprimirTabla($string) {
    $base_datos = new elementDBD();
    $base_datos->establecerConexion();
    $resultado = $base_datos->execQuery($string);
    
    for ($i = 0; $i < $resultado->num_rows; $i++) {
        echo "<tr>";
        $row = $resultado->fetch_assoc();
        foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "<td>".enlaceModificar($row)."</td>";
        echo "<td>".enlaceBorrar($row)."</td>";
        echo "</tr>";
    }
    $base_datos->cerrarConexion();
}

//Comprueba en la BD los datos del login
function comprobarLogin($usuario,$pass){
    $baseDeDatos=new elementDBD();
    $baseDeDatos->establecerConexion();
    $nombre=$baseDeDatos->comprobarUsuario($usuario,$pass);
    $baseDeDatos->cerrarConexion();
    
    if($nombre!==null){
        session_start();
        $_SESSION["conectado"]="Si";
        $_SESSION["nombre"]=$nombre;
        echo "<br>Login Correcto";
    }else{
        echo $usuario;
        echo "<br>Login Incorrecto ";
    }
}

//Crea una nueva instancia en la base de datos
function crearNuevo($tabla,$params,$values){
    $baseDeDatos=new elementDBD();
    $baseDeDatos->establecerConexion();
    $resultado=$baseDeDatos->insert($tabla, $params, $values);
    $baseDeDatos->cerrarConexion();
    
    if(count($resultado)===1){
        echo "<br>Creado correctamente<br>";
    }else{
        echo "<br>Ha habido fallos al insertar en la base de datos<br>";
        echo $resultado[0].'<br>';
    }
    
}

function modificarDatos($tabla,$datos){
    $baseDeDatos=new elementDBD();
    $baseDeDatos->establecerConexion();
    
    $where=null;
    foreach ($datos as $key => $value) {
        if($where===null){
            $where=array();
            $where[$key]=$value;
        }
    }
    $resultado=$baseDeDatos->update($tabla, $datos,$where);
    $baseDeDatos->cerrarConexion();
    
    if($resultado===true){
        return true;
    }else{
        return false;
    }
}

function borrarDatos($tabla,$clave){
    $baseDeDatos=new elementDBD();
    $baseDeDatos->establecerConexion();
    
    $where=array();
    $where["NIF"]=$clave;
    
    $resultado=$baseDeDatos->delete($tabla,$where);
    $baseDeDatos->cerrarConexion();
    
    if($resultado===true){
        return true;
    }else{
        return false;
    }
}
?>


