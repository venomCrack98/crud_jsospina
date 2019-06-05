<?php
include_once("../conf/conf.php");
class modelo extends conf{
	public function __contruct(){
		parent:: __contruct();
	}
	public function read($table,$data,$condi=false){
		if($condi!=false){
			$table=$table." where ".$condi;
		}
		
		$sql="select $data from $table";
		
		 $work=$this->crud->prepare($sql);
		$work->execute();
		$success=$work->fetchAll(PDO :: FETCH_ASSOC);
		$work->closeCursor();
		$this->crud=null;
		return $success;
	}
	public function update($table,$condi=flase,$values){
		if($condi!=false){
			$condi=" where ".$condi;
		}
		$files="";
		foreach ($values as $key => $value) {
			$files.="$key=$value";
		}
		$datos=substr($files,0,-1);
		$sql="update $table set $datos $condi";
		$work=$this->crud->prepare($sql);
		$work->execute();
		$work->closeCursor();
		$this->crud=null;
	}
	public function create($table,$datos=false,$values){
		if($datos!=false){
			$datos="($datos)";
		}
		$sql="INSERT INTO $table $datos VALUES $values";
		$work=$this->crud->prepare($sql);
		$work->execute();
		$work->closeCursor();
		$this->crud=null;

	}
	public function delete($table,$code){
		$sql="DELETE FROM $table WHERE $code";
		$work=$this->crud->prepare($sql);
		$work->execute();
		$work->closeCursor();
		$this->crud=null;
	}
}
?>