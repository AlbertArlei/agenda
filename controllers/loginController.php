<?php

class loginController
{
    public function render()
    {
        $content = './views/login.php';
        $mainTemplateStyle = '/public/css/mainTemplate.css';
        $style = '/public/css/login.css';
        $dataBase = 'models/conexao.php';
        $loginJs = '/models/login.js';
        include('./templates/mainTemplate.php');
    }
}

$loginController = new loginController();
$loginController->render();