<?php
    /* Arquivo que contém a função que cria os registros */
    include('registerexecute.php');

    /* Recuperando os valores das inputs */
    $user_html = $_REQUEST["user"];
    $password1_html = $_REQUEST["password1"];
    $password2_html = $_REQUEST["password2"];
    $saldo_html = $_REQUEST["saldo"];
    $dataNasciment_html = $_REQUEST["dataNascimento"];

    // function returnSize($dir){
    //     return sizeof(array_values(array_diff(scandir($dir), array('.','..'))));
    // }
    // $local_dir = 'C:\xampp\htdocs\Trabalho_Flavio_PHP_CaioDiasCozendey_GuilhermeAlbuquerqueFraga\Users';
    // $sizefiles = returnSize($local_dir);

    /* Função que verifica se as senha são iguais */
    function verificaSenha($senha1, $senha2){
        if ($senha1 == $senha2) {
            return true;
        }
        else{
            return false;
        }
    }       

    $local_dir = './users';

    $files = cleanScand($local_dir);
    function cleanScand($dir){
        return array_values(array_diff(scandir($dir), array('.','..')));
    }

    $size = sizeof(cleanScand($local_dir));


    /* Verifica o retorno da função verificaSenha e executa a função de registro */
    if (verificaSenha($password1_html, $password2_html) == true){
        $nome_arquivo = ($size+1) . '.txt';
        $arquivo = fopen($nome_arquivo, 'w+');
        fwrite($arquivo, $user_html . PHP_EOL);
        fwrite($arquivo, $password1_html . PHP_EOL);
        fwrite($arquivo, $dataNasciment_html . PHP_EOL);
        fwrite($arquivo, $saldo_html.'R$' . PHP_EOL);
        $move_arquivo = "users/$nome_arquivo";
        rename($nome_arquivo, $move_arquivo);
        fclose($arquivo);
        echo "<script> alert('GOD! Usuário criado com sucesso!')</script>";
        include('index.php');
        //verificaRegistro($user_html, $password1_html, $saldo_html, $dataNasciment_html);
    }
    else{
        echo "<script> alert('As senha não são iguais!'); </script>";
        include('registerscreen.php');
    }
?>