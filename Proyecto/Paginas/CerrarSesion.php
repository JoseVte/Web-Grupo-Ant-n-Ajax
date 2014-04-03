<?php
    session_start();
    $_SESSION = array();
    session_destroy();
?>
<script type="text/javascript">
     $("#Login").load("PHP/Login.php");
</script>
