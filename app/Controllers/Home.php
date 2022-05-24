<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function validar()
    {
        session_start();
        return empty($_SESSION["WYV_SA"]["ID"]);
     
    }
    public function index()
    {
        $controle = $this->validar();
        if($controle ==true){
            return redirect()->to('/public/login');
        }

		$m_home = model('model_home');
		$retorno = $m_home->funcao_teste();
        $data["array_usuario"]["nome"] = $_SESSION["WYV_SA"]["Nome"];
		$data["array_agenda"] = $retorno;
		
        return view('view_home', $data);
    } 
	public function salvar()
    {
        $m_home = model ('model_home');

        $nome = $_POST["txt_nome"];
        $end = $_POST["txt_end"];
        $tel = $_POST["txt_tel"];

        $m_home->salvar_agenda($nome,$end,$tel);

        //$this->index();
        return redirect()->to('public/home');
    }
    
}
