<?php namespace App\Models;
use CodeIgniter\Model;



class model_home extends Model
{
	function __construct(){
		$this->db = db_connect();	
	}
	
	public function funcao_teste(){
		//$db = \Config\Database::connect('default');  //versão completa
		//$db = db_connect();	  // versão resumida
		$query = $this->db->query('SELECT * FROM agenda');
		$ret   = $query->getResultArray();
		return $ret;		
	}

	public function salvar_agenda($nome, $end, $tel){
		$sql = "INSERT INTO agenda(Nome,Telefone,Endereco) 
		VALUES ('".$nome."','".$end."','".$tel."')";
		$this->db->query($sql);
	}
}