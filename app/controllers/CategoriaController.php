<?php

namespace app\controllers;

use app\core\Controller;
use app\models\dao\LancamentoDao;


class CategoriaController extends Controller
{
   public function index()
   {
      $senhaAut = $_SESSION['Fox_senha'];
      $emailAut = $_SESSION['Fox_email'];
      if ($emailAut == null && $senhaAut == null) {
         header("location: " . URL_BASE);
      }
      $dados["view"]       = "categoria/index";
      $this->load("template", $dados);
   }

   public function novo()
   {
      $senhaAut = $_SESSION['Fox_senha'];
      $emailAut = $_SESSION['Fox_email'];
      if ($emailAut == null && $senhaAut == null) {
         header("location: " . URL_BASE);
      }
      $dados["view"]       = "categoria/novo";
      $this->load("template", $dados);
   }

   public function editar($id)
   {
      $senhaAut = $_SESSION['Fox_senha'];
      $emailAut = $_SESSION['Fox_email'];
      if ($emailAut == null && $senhaAut == null) {
         header("location: " . URL_BASE);
      }
      $data = array('descricao' => 'teste 123');

      $dados['dados'] = $data;
      $dados["view"]       = "categoria/editar";
      $this->load("template", $dados);
   }
}
