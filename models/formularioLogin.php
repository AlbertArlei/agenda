<?php

if (isset($_POST['email'])) {
    include('conexao.php');
    session_start();
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $dados = [];
    $select = mysqli_query($conn, "SELECT id, nome, sobrenome, email FROM tabelaUsuario WHERE email = '$email' AND senha = '$senha'"); // mude o "tabelaUsuario" pelo nome da sua tabela de usuarios
    if ($select->num_rows > 0) {
        while ($dado = mysqli_fetch_assoc($select)) {
            $_SESSION['id'] = $dado['id'];
            $_SESSION['nome'] = $dado['nome'] . ' ' . $dado['sobrenome'];
            $_SESSION['email'] = $dado['email'];
            header('Location: /agenda/');
        }
    } else {
        header('Location: /agenda/login');
    }
}