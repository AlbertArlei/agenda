<?php

include('conexao.php');

$jsonPayload = file_get_contents('php://input');
$form = json_decode($jsonPayload);

$mes = $form->mes;

$read = mysqli_query($conn, "SELECT dia, horario FROM tabelaAgenda WHERE mes = $mes"); // mude "tabelaAgenda" para o nome da sua tabela em que esta a agenda
$dados = [];

while($agendamentos = mysqli_fetch_assoc($read)){
    $dados[] = $agendamentos;
}

header('Content-Type: application/json');
echo json_encode($dados);

