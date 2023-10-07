
<?php
    session_start();
    if($_GET){
        if(isset($_GET['logout'])){
            unset($_SESSION['login-effect']);
        }
    }
    if(!isset($_SESSION['login-effect'])){
        header('Location: ./');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKA o brabo</title>
    <link rel="stylesheet" href="homeStyle.css">
    <!-- LINK FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header name="header-page" id="header-page" class="header-page">
        <img src="./assets/icons/fantasmao.webp" alt="Fantasmao do apenas um show" width="100px">
        <a href="./home.php">Página inicial</a>
        <a href="./cadastro.php">Cadastrar</a>
        <a href="https://github.com/furPedroRibeiro/apenasumshow_aula_session" target="_blank">Github</a>
        <a href="https://www.linkedin.com/in/pedro-ribeiro-abaa0b293/" target="_blank">Linkedin</a>
    </header>
    <main name="main" id="main" class="main">
        <h1>Apenas uma session - PW III</h1>
        <p>Seja bem vindo novamente, agora que você está logado vamos ver se você tem um nível alto ou não, hahahhaha</p>
        <div class="options">
            <a href="cadastro.php" class="a-btn-main">Cadastrar</a>
            <a href="https://github.com/furPedroRibeiro/apenasumshow_aula_session" class="a-btn-main" target="_blank">Github</a>
            <a href="?logout=true" class="a-btn-main">Sair</a>
        </div>
    </main>
    <footer name="footer-page" id="footer-page" class="footer-page"></footer>
</body>
</html>