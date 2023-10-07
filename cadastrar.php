<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKA o brabo</title>
    <link rel="stylesheet" href="style.css">
    <!-- LINK FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root{

            /* colors */

            --black: black;
            --primary-color: #151414;
            --text-color: #ffffff;
            --text-color-header: #ffffff;
            --background-text: #ffffff;
            --background-a-btn: #15c5d2;
            --border-a-btn: #11939c;

            /* fonts */

            --montserrat: 'Montserrat', 'sans-serif';

            /* font size */
            --size-a-header: 18px;
            --size-a-btn: 18px;
            --size-h1-main: 32px;
            --size-p-main: 22px;
        }

        /* DEFAULT */

        body{
            background: linear-gradient(180deg, #151514, #12c5d2);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        /* MAIN STYLE */
        main[name='main']{
            width: 100vw;
            height: 100vh;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            padding: 10rem;
            gap: 2rem;
        }
        main[name='main'] a{
            text-decoration: none;

            font-family: var(--montserrat);
            font-size: var(--size-a-header);
            font-weight: 300;

            color: var(--text-color);

            padding: 0.5rem;

            transition: 0.7s all;

            border-radius: 12px;
        }
        main[name='main'] a:hover{
            color: var(--primary-color);
            background-color: var(--background-text);
        }
    </style>
</head>
<body>
    <main name="main" id="main" class="main">
        <h1>
            <?php
                require 'connection.php';
                if($_POST){
                    if(empty($_POST['login']) || empty($_POST['name']) || empty($_POST['password'])){
                        echo "Preencha todos os campos!";
                    }else{
                        $login = $_POST['login'];
                        $name = $_POST['name'];
                        $password = $_POST['password'];
                        $nivel = $_POST['nivel'];

                        $sql = "SELECT * FROM user WHERE login = :login";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(':login', $login);
                        if($stmt->execute()){
                            if($stmt->rowCount() > 0){ 
                                echo "Login já utilizado! Tente outro.";
                            }else{
                                $sql = "INSERT INTO user VALUES (null, :login, :name, :password, :nivel)";
                                $stmt = $pdo->prepare($sql);
                                $stmt->bindParam(':login', $login);
                                $stmt->bindParam('name', $name);
                                $stmt->bindParam('password', $password);
                                $stmt->bindParam('nivel', $nivel);
                                if($stmt->execute()){
                                    echo "Cadastro realizado com sucesso!";
                                    echo '<meta http-equiv="refresh" content="5; url=cadastro.php">';

                                }else{
                                    echo "Erro ao realizar cadastro!";
                                }
                            }
                        }
                    }
                }
            ?>
        </h1>
        <a href="./cadastro.php">Voltar</a>
    </main>
</body>
</html>