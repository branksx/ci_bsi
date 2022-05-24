<?php namespace App\Models;
use CodeIgniter\Model;



class model_login extends Model
{
	function __construct(){
		$this->db = db_connect();	
	}

	public function consultar_login($login, $senha)
	{
		$query = $this->db->query("SELECT * FROM usuario WHERE
		Login = '".$login."' AND senha = '".$senha."' ");
		$ret   = $query->getResultArray();
		if(count($ret) == 0){
			return false;
		} else {
			return $ret[0];
		}
	}

	public function alterar_senha($id,$senhaAntiga, $senhaNova, $senhaNova2)
	{
		if($senhaNova == $senhaNova2){
			$query = $this->db->query("SELECT * FROM usuario WHERE
			Login = '".$login."' AND senha = '".$senha."' ");
			$ret   = $query->getResultArray();
			if(count($ret) == 0){
				return false;
			}
		}else{
			if($ret[0]["Senha"] == $senhaAntiga){
				$sql = "UPDATE agenda SET Senha = $senhaNova"
			}
			return false;
		}

	}
}