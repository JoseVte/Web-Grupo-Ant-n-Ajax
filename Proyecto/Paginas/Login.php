<?php
if(!isset($_GET["action"])){?>
    <form method="POST" action="Paginas/Login.php?action=login" class="formLogin" id="formLogin">

        <label for="nif">Inserta tu NIF</label>
        <input type="text" name="nif" id="txtNif" required="true" pattern="^[0-9]{8}[A-Z]$"><br>
        <label for="password">Inserta tu contraseña</label>
        <input type="password" name="pass" id="txtPassword" required="true"><br>
        <input type="submit" id="iniciarLogin" value="Iniciar Sesion">

    </form>
    <script type="text/javascript">
        inicializarEventosLogin();
    </script><?php
}else{
    require '../PHP/funciones.php';
   
    comprobarLogin($_POST["nif"],$_POST["pass"]);
}