<?php
include_once("../../../modelo/modelo3.php");
$id=$_POST['id'];
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

$borrar=new modelo3();

$borrar->delete("empleado_rol"," empleado_id=$id");

for($nivel=0;$nivel<1;$nivel++){
    $borrar=new modelo3();
    $borrar->update("empleados","id=$id",array("id"=>"$id",
                                            "nombre"=>"'$nombre'",
                                            "email"=>"'$email'",
                                            "sexo"=>"'$genero'",
                                            "area_id"=>"$area",
                                            "boletin"=>"'$op'",
                                            "descripcion"=>"'$des'"));
}

$ultimo=array_unique($arr);
                 
foreach($ultimo as $a){
    $rol=new modelo3();
    $rol->create("empleado_rol","empleado_id,rol_id","$id,$a");
}

echo "<script>
 		window.location.href='../../../web/index.php';
 </script>";
?>