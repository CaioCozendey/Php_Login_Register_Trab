<?php
    // Inclui o arquivo funcoes que contem o codigo que valida o login e printa as telas 
    include('funcoes.php');
    //Recebe os valores dos campos do input
    $user_html = $_REQUEST["user"];
    $password_html = $_REQUEST["password"];

    //Verifica se os campos estão vazio, caso não estejam, executa a function login
    //Usamos strtolower para fazer com que não aja problema caso o usuário digite caracteres maiusculos ou minusculos no usuário
    //mas não utilizamos na senha pois sabemos que a senha deve ser digitada sem erros sensitive case
    if(empty($user_html) || empty($password_html)) {
        echo "<script> alert('Seu usuário e/ou senha estão vazios!'); </script>";
        include('index.php');
    } 
    else{
        inicia(strtolower($user_html), $password_html);
    }
