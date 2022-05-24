<?php

namespace App\Controllers;

class cadastro_usuario extends BaseController
{
    
    public function index()
    {
        $controle = $this->validar();
        if($controle ==true){
            return redirect()->to('/public/login');
        }
        
        $m_c_u = model ('model_cadastro_usuario');
        
        $data["array_usuarios"] = $m_c_u->listar_usuarios();
        $data["usuario"] = $m_c_u->usuario_vazio();
        return view('view_cadastro_usuario',$data);
    } 
    
    public function validar()
    {
        session_start();
        if(empty($_SESSION["WYV_SA"]["ID"])==1){
            return true;
        }else{
            return false;
        }
        return true;
    }

	public function salvar()
    {
        $controle = $this->validar();
        if($controle == true){
            return redirect()->to('/public/login');
        }
        $nome = $_POST["txt_nome"];
        $login = $_POST["txt_login"];
        $senha = $_POST["txt_senha"];
        $status = $_POST["sl_status"];
        $nivel = $_POST["sl_nivel"];

        if ($_POST["txt_id"]!=''){
            $id = $_POST["txt_id"];
        } else {
            $id ="";
        }
        $m_c_u = model('model_cadastro_usuario');
        $m_c_u->salvar($id, $nome, $login, $senha, $status, $nivel);
        return redirect()->to('/public/cadastro_usuario');
    }
    
    public function editar()
    {
        $controle = $this->validar();
        if($controle ==true){
            return redirect()->to('/public/login');
        }
        $m_c_u = model('model_cadastro_usuario');

        $uri = service('uri');
        $id = $uri->getSegment(3);
        $data["array_usuarios"] = $m_c_u->listar_usuarios();
        $data["usuario"] = $m_c_u->usuario($id);
        return view('view_cadastro_usuario',$data);
    }
    public function excluir(){
        $controle = $this->validar();
        if($controle ==true){
            return redirect()->to('/public/login');
        }
        $m_c_u = model('model_cadastro_usuario');
        $uri = service('uri');
        $id = $uri->getSegment(3);

        if(!empty($id)){
            $m_c_u->excluir($id);
        }
        return redirect()->to('public/cadastro_usuario');
    }


    
}
