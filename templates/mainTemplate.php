<?php 
include($dataBase);
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo $mainTemplateStyle; ?>">
    <link rel="stylesheet" href="<?php echo $style; ?>">
    <title>home</title>
</head>

<body>
    <header>
        <h1><a href="/agenda/">Agenda</a></h1>
        <nav>
            <div id="account-container">
                <?php if (isset($_SESSION['login'])) {
                    if ($_SESSION['login'] !== true) { ?>
                        <a href="/agenda/account"><i class="fa-regular fa-user" style="color: #000000;"></i></a>
                        <a href="/agenda/sair"><i class="fa-solid fa-right-to-bracket" style="color: #000000;"></i></a>
                        <i class="fa-solid fa-bars" style="color: #000000;"></i>
                    <?php } else { ?>
                        <i class="fa-solid fa-bars" style="color: #000000;"></i>
                        <a href="/agenda/login">Entrar</a>
                    <?php }
                } else { ?>
                <i class="fa-solid fa-bars" style="color: #000000;"></i>
                <a href="/agenda/login">Entrar</a>
                <?php } ?>

            </div>
        </nav>
    </header>
    <main>
        <?php include($content); ?>
    </main>

    <footer>

    </footer>

</body>

</html>