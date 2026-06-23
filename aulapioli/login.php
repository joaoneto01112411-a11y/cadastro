<?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login== "admin" && $senha == "admin"){
        echo ("<script>window.location.replace('aluno.php');</script>");
    } else {
        echo("<script>alert('Login ou senha inválido! Tente novamente');</script>");
        echo ("<script>window.location.replace('aluno.php');</script>");
    }
?>