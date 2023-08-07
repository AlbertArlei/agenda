<?php
include('conexao.php');

    session_start();
    $jsonPayload = file_get_contents('php://input');
    $form = json_decode($jsonPayload);

    $id = $_SESSION['id'];
    $numero = $_SESSION['numero'];
    $nome = $_SESSION['nome'] . ' ' . $_SESSION['sobrenome'];
    $email = $_SESSION['email'];
    $dia = $form->dia;
    $mes = $form->mes;
    $horario = $form->horario;
    $procedimento = $form->procedimento;
    
    $select = mysqli_query($conn, "SELECT dia, mes, horario FROM agenda WHERE dia = '$dia' AND mes = '$mes' AND horario = '$horario'");
    if($select->num_rows > 0){
        exit();
    }
    $create = mysqli_query($conn, "INSERT INTO agenda (id_usuario, dia, mes, horario, nome, numero, email, procedimento) VALUES ('$id', '$dia', '$mes', '$horario', '$nome', '$numero', '$email', '$procedimento')");
    
