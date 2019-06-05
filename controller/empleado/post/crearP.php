<?php
include_once("../../../modelo/modelo3.php");

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$genero=$_POST['genero'];
$area=$_POST['area'];
$des=$_POST['des'];
if(isset($_POST['op'])){
	$op=$_POST['op'];
}else{
	$op=0;
}
$arr=$_POST['rol'];

$tarea=new modelo3();
$tarea->create("empleados",
"nombre,email,sexo,area_id,boletin,descripcion",
"'$nombre','$email','$genero',$area,$op,'$des'");
$dato=new modelo3();



$codi=$dato->read("empleados"," MAX(id) as id");
foreach($codi as $co){
	$codigo=$co['id'];
}

foreach($arr as $a){
	$las=new modelo3();
	 $las->create("empleado_rol","empleado_id,rol_id"," $codigo,$a ");
 }
 
 echo "
 <script>
 		window.location.href='../../../web/index.php';
 </script>";
?>