<?php
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    
    $sql = 'SELECT * FROM usuarios WHERE login = :login and senha = :pass';
    
    $query = $pdo->prepare($sql);
    $query->bindvalue(':login', $login);
    $query->bindvalue(':pass', $pass);
    $query->execute();

    if($query->rowcount()>0){
        $session['login']=$login;
        $campos=$query->fetch(PDO::FETCH_ASSOC);
        $_SESSION['nome']= $campos['nome'];
        $_SESSION['nivel'] = $campo['nivel'];
    }
?>