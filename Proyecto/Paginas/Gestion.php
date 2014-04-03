<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/Proyecto/' . 'PHP/funciones.php');

if(isset($_GET["tabla"])){
    $tabla=$_GET["tabla"];
    echo "<div id=\"subtitulo\">Menu de gestion de " . $tabla."</div>";
    echo "<div id=\"enlaceCrear\">".enlaceCrear($tabla)."</div>";

    if($tabla=='Cliente'  || $tabla=='Proveedor'){
        echo '<table class="listar" id="'.$tabla.'">
                <tr>
                    <th>NIF</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>';

        imprimirTabla("SELECT NIF,Nombre,Apellidos,Direccion,Telefono,Email FROM ".$tabla);
        echo "<script type=\"text/javascript\">
             inicializarEventosGestion(\"".$tabla."\");
         </script>";
    }
    
    if($tabla=='Usuario'){
    echo '<table class="listar" id="Usuario">
            <tr>
                <th>NIF</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>NvAcceso</th>
                <th>Pass</th>
                <th></th>
                <th></th>
             </tr>';
        imprimirTabla("SELECT NIF,Nombre,Apellidos,NvAcceso,Pass FROM ".$tabla);
        echo "<script type=\"text/javascript\">
            inicializarEventosGestion(\"".$tabla."\");
         </script>";
    }
    ?>
    <section id="gestion">
        <script type="text/javascript">
            inicializarEventosGestion("<?php echo $tabla; ?>");
        </script>
    </section>
<?php
}else
{
    echo "Error al listar";
}
