<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('view_login');
	}
    
    public function logar()
    {
        session_start();

        $login = $_POST["txt_login"];
        $senha = $_POST["txt_senha"];

        $m_login = model("model_login");
        $retorno = $m_login->consultar_login($login,$senha);

        if($retorno == false){
            $_SESSION["WYV_SA"]["ID"] = "";
            $_SESSION["WYV_SA"]["Nome"] = "";
            return redirect()->to('/public/login');
        }else{
            $_SESSION["WYV_SA"]["ID"] = $retorno["ID"];
            $_SESSION["WYV_SA"]["Nome"] = $retorno["Nome"];
            return redirect()->to('/public/home');
        
        }
    }

    public function logout()
    {
        unset($_SESSION["WYV_SA"]["ID"]);
        unset($_SESSION["WYV_SA"]["Nome"]);
        unset($_SESSION["WYV_SA"]["Nivel"]);
            return redirect()->to('/public/login');
    }

    public function alterar_senha(){

        session_start();
        $id = $_SESSION["WYV_SA"]["ID"];
        $senhaAntiga = $_POST[""];
        $senhaNova = $_POST[""];
        $senhaNova2 = $_POST[""];
        $m_login = model("model_login");
        $m_login->alterar_senha($id,$senhaAntiga, $senhaNova, $senhaNova2);
        
    }
}
