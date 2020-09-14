<?php
session_start();
if( $_SESSION["u"]['verificado'] == "0"){
    header ("location:confirmar_codigo.php");
    exit();
}
?>