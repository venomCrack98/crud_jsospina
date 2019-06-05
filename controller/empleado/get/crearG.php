<?php
	include_once("../../modelo/modelo2.php");
	
	$exito=new modelo2();
	$exito2=new modelo2();
	$datos=$exito->read("areas","*");
	$roles=$exito2->read("roles","*");

?>