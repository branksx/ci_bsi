<?php namespace App\Models;
use CodeIgniter\Model;



class model_cadastro_usuario extends Model
{
	function __construct(){
		$this->db = db_connect();	
	}

	public function listar_usuarios()
	{
		$query = $this->db->query("SELECT * FROM usuario");
		$ret   = $query->getResultArray();
		return $ret;
	}

	public function usuario($id){
		$query = $this->db->query('SELECT * FROM usuario WHERE ID = ' .$id);
		$ret = $query->getResultArray();
		return $ret[0];
	}
	
	public function usuario_vazio(){
		$ret["ID"] = "";
		$ret["Nome"] = "";
		$ret["Login"] = "";
		$ret["Senha"] = "";
		$ret["Nivel"] = "";
		$ret["Status"] = "";
		return $ret;
	}
	public function salvar($id, $nome, $login, $senha, $status, $nivel){
		if($id == ""){
			$sql = "INSERT INTO usuario (Nome,Login,Senha,Status,Nivel) VALUES
			('$nome','$login','$senha','$status','$nivel')";
		}else{
			if($senha == ""){
				$sql = "UPDATE usuario SET Nome='$nome', Login='$login', Status'$status', Nivel'$nivel'
				WHERE ID = $id ";
			} else {
				$sql = "UPDATE usuario SET Nome='$nome', Login='$login', Status='$status', Nivel='$nivel', Senha='$senha'
				WHERE ID = $id ";
			}
		}
		
		$this->db->query($sql);
	}

	public function excluir($id){
		$sql = "DELETE FROM usuario WHERE ID = ". $id;
		$this->db->query($sql);
	}
}