<?php
$local = "localhost";// acredito que seja padrão se estiver executando em localhost
$user = "root"; // acredito que seja padrão se estiver executando em localhost
$passwordUser = "";
$db = "";// o nome da sua base de dados

$conn = mysqli_connect($local,$user,$passwordUser,$db);
