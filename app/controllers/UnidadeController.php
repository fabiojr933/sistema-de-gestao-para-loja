<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\Service;
use stdClass;

class UnidadeController extends Controller
{
   public function index()
   {
      $senhaAut = $_SESSION['Fox_senha'];
      $emailAut = $_SESSION['Fox_email'];
      if ($emailAut == null && $senhaAut == null) {
         header("location: " . URL_BASE);
      }
      $data = Service::lista('unidade');
      $dados['dados'] = $data;
      $dados["view"]       = "unidade/index";
      $this->load("template", $dados);
   }

   public function novo()
   {
      $senhaAut = $_SESSION['Fox_senha'];
      $emailAut = $_SESSION['Fox_email'];
      if ($emailAut == null && $senhaAut == null) {
         header("location: " . URL_BASE);
      }
      $dados["view"]       = "unidade/novo";
      $this->load("template", $dados);
   }

   public function editar($id)
   {
      $senhaAut = $_SESSION['Fox_senha'];
      $emailAut = $_SESSION['Fox_email'];
      if ($emailAut == null && $senhaAut == null) {
         header("location: " . URL_BASE);
      }

      $data = Service::get('unidade', 'id', $id);
      $dados['dados'] = $data;
      $dados["view"]       = "unidade/editar";
      $this->load("template", $dados);
   }
   public function salvar()
   {
      $validacao = [];

      $unidade = new \stdClass();
      $unidade->descrição = strtoupper($_POST['descricao']);
     
      $d = Service::salvar($unidade, 'descricao', $validacao, 'unidade');
      $this->redirect(URL_BASE . "unidade/index");
   }

   public function update($id)
   {
      $tabela = 'unidade';
      $campo = 'id';
      
      $unidade = new \stdClass();
      $unidade->descrição = strtoupper($_POST['descricao']);
      Service::editar($unidade, $campo, $tabela);
      $this->redirect(URL_BASE . "unidade/index");
   }


   public function excluir($id)
   {
      Service::excluir('unidade', 'id', $id);
      $this->redirect(URL_BASE . "unidade/index");
   }
}
