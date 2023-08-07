<?php
class HomeController
{
   public function render()
   {
      $content = './views/home.php';
      $mainTemplateStyle = '/public/css/mainTemplate.css';
      $style = '/public/css/home.css';
      $calendario = '/models/calendario.js';
      $formulario = '/models/formularioAgendamento.js';
      $buscarAgendamento = '/models/buscarAgendamentos.js';
      $dataBase = 'models/conexao.php';
      include('./templates/mainTemplate.php');
   }
}

$controller = new HomeController;
$controller->render();