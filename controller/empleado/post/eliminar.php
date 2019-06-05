<?php
include_once("../../../modelo/modelo3.php");
$eli=new modelo3();
$eliM=new modelo3();
$id=$_POST['id'];
$eliM->delete("empleado_rol","empleado_id=$id");
$eli->delete("empleados","id=$id");
?>