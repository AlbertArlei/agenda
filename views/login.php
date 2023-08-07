<div id="form-conteiner">
    <form action="../models/formularioUsuario.php" method="POST"  id="form-register" class="esconder" action="">
        <span>Cadastro</span>
        <input type="text" placeholder="Nome" name="nome">
        <input type="text" placeholder="Sobrenome" name="sobrenome">
        <input type="text" placeholder="número EX: 99 99999-9999" name="numero">
        <input type="text" placeholder="E-mail" name="email">
        <input type="text" placeholder="senha" name="senha">
        <input type="password" placeholder="confirme a senha" name="senha2">
        <input type="submit" value="Cadastrar">
        <span id="login">Já estou cadastrado</span>
    </form>
    <form id="form-login" action="../models/formularioLogin.php" method="POST" class="mostrar">
        <span>Entrar na conta</span>
        <input type="text" placeholder="E-mail" name="email">
        <input type="text" placeholder="Senha" name="senha">
        <input type="submit" value="Entrar">
        <span id="criarConta">Ainda não sou cadastrado</span>
    </form>
</div>
<script src="<?php echo $loginJs; ?>"></script>