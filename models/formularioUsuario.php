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
    $select = mysqli_query($conn, "SELECT email, nome, sobrenome, numero FROM usuario WHERE email = '$email' AND nome = '$nome' AND sobrenome = '$sobrenome' AND numero = '$numero'");
    if($select->num_rows > 0){
        header('Location: /agenda/');
    }else{
        if($senha === $senha2){
            $insert = mysqli_query($conn, "INSERT INTO usuario (email, nome, sobrenome, numero, senha) VALUES ('$email', '$nome', '$sobrenome', '$numero', '$senha')");
            header('Location: /agenda/login');
        }else{
            header('Location: /agenda/');
        }
        
    }
}