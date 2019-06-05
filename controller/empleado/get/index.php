<?php
	include_once("../modelo/modelo.php");
	
	$exito=new modelo();
	$exito2=new modelo();
	$datos=$exito->read("empleados","*");
	$areas=$exito2->read("areas","*");

?>