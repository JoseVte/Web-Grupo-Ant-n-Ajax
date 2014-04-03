<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccesoDBD
 *
 * @author pablo
 */
class elementDBD {

    var $conexion;

    public function establecerConexion() {

        $this->conexion = (new mysqli("localhost", "dss", "dss", "base_datos_dss"));


        if ($this->conexion->connect_errno) {
            echo "Fallo al contenctar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
        }
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function setConexion($conexion) {
        $this->conexion = $conexion;
    }

    public function cerrarConexion() {
        $this->getConexion()->close();
    }

    //Comprueba el inicio de sesion, y devuelve el nombre si se puede loguear
    public function comprobarUsuario($usuario, $pass) {
        $query = "select Nombre from Usuario where NIF='" . $usuario . "' and Pass='" . sha1($pass) . "'";
        $resultado = $this->execQuery($query);
        $nombre = $resultado->fetch_array(MYSQLI_ASSOC)["Nombre"];

        if ($nombre !== null) {
            return $nombre;
        } else {
            var_dump($resultado);
            return null;
        }
    }

    //Realiza consultas
    public function execQuery($query) {
        $resultado = $this->conexion->query($query);

        return $resultado;
    }

    private function select_query($columns, $tables, $where) {
        $columns_texto = "";
        $tables_texto = "";
        $where_texto = "";
        foreach ($columns as $colum => $value) {
            $columns_texto.=$colum . ",";
        }

        foreach ($tables as $table) {
            $tables_texto.=$table . ",";
        }

        if (count($where) != 0) {
            $where_texto.="where ";
        }

        foreach ($where as $key => $value) {

            $where_texto.=$key . " like '" . $value . "'" . " AND ";
        }

        return sprintf("select %s from %s %s", trim($columns_texto, ","), trim($tables_texto, ","), trim($where_texto, " AND "));
    }

    //Crea el script de insertar
    private function insertQuery($table, $key, $value) {
        $keys = array();
        $values = array();
        $keys_text = "(";
        $values_text = "(";
        for ($i = 0; $i < count($key); $i++) {
            $keys[$i] = $key[$i];
            $values[$i] = $value[$i];
        }

        foreach ($keys as $key) {
            $keys_text.=$key . ",";
        }
        $keys_text = trim($keys_text, ",") . ")";

        foreach ($values as $value) {
            $values_text.="'" . $value . "'" . ",";
        }

        $values_text = trim($values_text, ",") . ")";


        return sprintf("insert into %s %s values %s", $table, $keys_text, $values_text);
    }

    //Crea el script de borrar
    private function deleteQuery($table, $wheres) {
        $where = "";

        if (count($where) != 0) {
            $where.="where ";
        }
        foreach ($wheres as $key => $value) {
            $where.=$key . " like '" . $value . "' AND ";
        }

        $where = trim($where, " AND ") . "";

        return sprintf("delete from %s %s", $table, $where);
    }

    public function delete($table, $where) {
        $texto = $this->deleteQuery($table, $where);
        $resultado = $this->execQuery($texto);

        return $resultado;
    }

    private function updateQuery($table, $setColumns, $wheres) {

        $set = "";
        $where = "";

        foreach ($setColumns as $key => $value) {
            $set.=$key . "='" . $value . "',";
        }
        $set = trim($set, ",") . "";

        if (count($where) != 0) {
            $where.="where ";
        }
        foreach ($wheres as $key => $value) {
            $where.=$key . " like '" . $value . "' AND ";
        }

        $where = trim($where, " AND ") . "";

        return sprintf("update %s set %s %s", $table, $set, $where);
    }

    public function insert($table, $key, $value) {
        $resultado = array();
        $query = "select " . $key[0] . " from " . $table . " where " . $key[0] . "='" . $value[0] . "'";
        $existe = $this->execQuery($query);
        if (mysqli_num_rows($existe) > 0) {
            $resultado[0] = "Ya existe el " . $table . " con NIF " . $value[0];
            $resultado[1] = "error";
        } else {
            $texto = $this->insertQuery($table, $key, $value);
            $resultado[0] = mysqli_query($this->conexion, $texto);
        }
        return $resultado;
    }

    public function update($table, $set, $where) {
        $texto = $this->updateQuery($table, $set, $where);
        $resultado = $this->execQuery($texto);

        return $resultado;
    }

    public function select($columns, $tables, $where) {
        $texto = $this->select_query($columns, $tables, $where);
        $resultado = $this->execQuery($texto);

        return $resultado;
    }

    function listar($columns, $tables, $where) {
        $url = "var url='ajax/tabla_usuarios.php?";
        $texto = "<script type='text/javascript'>
        function filtrar_nombre(){
        ";

        $url.="table=";
        foreach ($tables as $value) {
            $url.=$value . "_";
        }
        $url = trim($url, "_") . "&";

        foreach ($columns as $key => $value) {
            if ($value == "true") {
                $texto.="var " . $key . "=document.getElementById('" . $key . "').value;\n";
                $url.=$key . "='+" . $key . "+'&";
            } else {
                $url.=$key . "='+" . "false" . "+'&";
            }
        }
        $url = trim($url, "+'&") . ";";
        $texto.=$url . "cargarResultado(url,'respuesta');"
                . "\n } \n</script>";

        $correcto = false;
        $texto.="\n<div id='filter'>";
        foreach ($columns as $key => $value) {
            if ($value == "true") {
                $correcto = true;
                $texto.="<p>" . $key . ": <input type='text' id='" . $key . "'></p>";
            }
        }
        if ($correcto == true) {
            $texto.="<p><input type='submit' id='button_enviar' onclick='filtrar_nombre()'></p>";
        }
        $texto.="</div><div id='respuesta'>";

        $texto.=$this->imprimir_tablas($columns, $tables, $where) . "</div>";

        return $texto;
    }

    public function modify($columns, $tables, $where) {
        $texto = "";

        $url = "var url='ajax/tabla_modify.php?";
        $texto = "<script type='text/javascript'>
        function modify(num){
        ";
        foreach ($tables as $value) {
            $url.="table=" . $value.="&";
        }

        foreach ($where as $key => $value) {
            $url.="ClaveP=" . $key.="_";
        }
        $url = trim($url, "_") . "&";
        foreach ($columns as $key => $value) {

            $texto.="var " . $key . "=document.getElementById('" . $key . "'+num).value;\n";
            $url.=$key . "='+encodeURI(" . $key . ")+'&";
        }
        $url = trim($url, "+'&") . ";";
        $texto.=$url . "cargarResultado(url,'seccion');\n } \n</script>";

        $texto.=$this->imprimir_column($columns, $tables, $where, true, true);

        return $texto;
    }

    public function imprimir_column($columns, $tables, $where, $modify = false, $button = false) {
        $resultado = $this->select($columns, $tables, $where);
        if ($resultado and $resultado->num_rows > 0) {
            $column = "";

            for ($i = 0; $i < $resultado->num_rows; $i++) {
                $row = $resultado->fetch_assoc();
                $column.="<table id='column_database" . $i . "'>";

                foreach ($row as $key => $value) {
                    $column.="<tr>";
                    $column.="<td>" . $key . "</td><td>";
                    if ($modify == true) {
                        $column.="<input type='text'"
                                . "id='" . $key . $i . "' value='" . $value . "'></input></td>";
                    } else {
                        $column.=$value . "</td>";
                    }
                    $column.="</tr>";
                }

                $column.="</table>";
                if ($button) {
                    $column.="<input type='submit' value='modificar' id='button_enviar" . $i . "' onclick='modify(" . $i . ")'><br/><br/>";
                } else {
                    $column.="<br/><br/>";
                }
            }
        } else {
            $column = "No hay resultados";
        }


        return $column;
    }

    public function imprimir_tablas($columns, $tables, $where) {
        $resultado = $this->select($columns, $tables, $where);
        if ($resultado and $resultado->num_rows > 0) {
            $table = "<table id='tabla_usuarios'>";

            for ($i = 0; $i < $resultado->num_rows; $i++) {
                $row = $resultado->fetch_assoc();

                if ($i == 0) {
                    $table.="<tr>";
                    foreach ($row as $key => $value) {
                        $table.="<th>" . $key . "</th>";
                    }
                    $table.="</tr>";
                }

                $table.="<tr>";
                foreach ($row as $key => $value) {
                    $table.="<td>" . $value . "</td>";
                }
                $table.="</tr>";
            }

            $table.="</table>";
        } else {
            $table = "No hay resultados";
        }

        return $table;
    }

}
