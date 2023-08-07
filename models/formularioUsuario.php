<?php
session_start();
include('conexao.php');

if(isset($_POST['nome'])){
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $numero = $_POST['numero'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];
    $select = mysqli_query($conn, "SELECT email, nome, sobrenome, numero FROM tabelaUsuario WHERE email = '$email' AND nome = '$nome' AND sobrenome = '$sobrenome' AND numero = '$numero'"); // mude o "tabelaUsuario" pelo nome da sua tabela de usuarios
    if($select->num_rows > 0){
        header('Location: /agenda/');
    }else{
        if($senha === $senha2){
            $insert = mysqli_query($conn, "INSERT INTO tabelaUsuario (email, nome, sobrenome, numero, senha) VALUES ('$email', '$nome', '$sobrenome', '$numero', '$senha')"); // mude o "tabelaUsuario" pelo nome da sua tabela de usuarios
            header('Location: /agenda/login');
        }else{
            header('Location: /agenda/');
        }
        
    }
}