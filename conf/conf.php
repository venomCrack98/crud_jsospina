<?php
class conf{
	protected $crud;
	public function __construct(){
		try{
			$this->crud=new PDO("mysql:host=localhost; dbname=crud","root","");
			$this->crud->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->crud->exec("SET CHARACTER SET utf8");
			return $this->crud;
			
		}catch(Exception $e){
			die("error con coneccion de base de datos".$e->getMessage());
		}
	}
}
?>