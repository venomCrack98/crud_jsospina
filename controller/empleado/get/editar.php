<?php
	include_once("../../../modelo/modelo3.php");
	
	$exito=new modelo3();
    $exito2=new modelo3();
    $exito3=new modelo3();
    $exito4=new modelo3();
    $datos=$exito->read("areas","*");
    $roles=$exito2->read("roles","*");
    $id=$_GET['id'];
    $usu=$exito3->read("empleados","*"," id=$id");
    $emp_rol=$exito4->read("empleado_rol","*","empleado_id=$id");
include_once("../../../view/items/editarF.php");
?>