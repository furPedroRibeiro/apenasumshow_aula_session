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

        /* HEADER STYLE */

        header[name='header-page']{

            display: flex;
            align-items: center;
            justify-content: space-around;

            padding-block: 1rem;
        }
        header[name='header-page'] a{
            text-decoration: none;

            font-family: var(--montserrat);
            font-size: var(--size-a-header);
            font-weight: 300;

            color: var(--text-color);

            padding: 0.5rem;

            transition: 0.7s all;

            border-radius: 12px;
        }
        header[name='header-page'] a:hover{
            color: var(--primary-color);
            background-color: var(--background-text);
        }

        /* MAIN STYLE */
        main[name='main']{
            width: 100%;
            height: auto;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            padding: 10rem;
            gap: 2rem;
        }
        main[name='main'] h1{
            font-family: var(--montserrat);
            font-size: var(--size-h1-main);

            color: var(--text-color);
        }
        main[name='main'] form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            gap: 1rem;
        }
        main[name='main'] form label{
            font-family: var(--montserrat);
            font-size: 20px;
            color: var(--text-color);
        }
        main[name='main'] form input{
            text-align: center;

            width: 20rem;

            font-family: var(--montserrat);
            font-size: 18px;
            color: var(--text-color);

            background: transparent;

            padding-bottom: 5px;

            outline: none;
            border: 0px;
            border-bottom: 1px solid var(--background-a-btn);
        }

        main[name='main'] form button{
            cursor: pointer;
            text-decoration: none;

            margin-top: 1rem;
            width: 20rem;
            height: auto;

            font-family: var(--montserrat);
            font-size: var(--size-a-btn);
            font-weight: 600;

            color: var(--text-color);
            background-color: var(--background-a-btn);

            border: 0;
            border-bottom: 5px solid var(--border-a-btn);

            padding: 1rem;

            border-radius: 12px;

            transition: 
                color 0.5s,
                box-shadow 0.5s,
                background-color 0.5s
            ;
        }
        main[name='main'] form button:hover{
            background-color: rgba(255, 255, 255, 0.915);
            color: var(--primary-color);

            box-shadow: inset 0px 0px 15px var(--background-a-btn);
        }
    </style>
</head>
<body>
    <header name="header-page" id="header-page" class="header-page">
        <img src="./assets/icons/fantasmao.webp" alt="Fantasmao do apenas um show" width="100px">
        <a href="./">Página inicial</a>
        <a href="./login.php">Login</a>
        <a href="https://github.com/furPedroRibeiro/apenasumshow_aula_session">Github</a>
        <a href="https://www.linkedin.com/in/pedro-ribeiro-abaa0b293/">Linkedin</a>
    </header>
    <main name="main" id="main" class="main">
        <h1>Faça seu login</h1>
        <form action="logar.php" method="post">
            <label for="name">Login</label>
            <input type="text" name="login" id="login">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password">
            <button type="submit">Entrar</button>
        </form>
    </main>
    <footer name="footer-page" id="footer-page" class="footer-page"></footer>
</body>
</html>