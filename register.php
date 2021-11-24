<?php
    verificaExistenciaUser();    
    /* Função que verifica se as senha são iguais */
    function verificaSenha($senha1, $senha2){
        if ($senha1 == $senha2) {
            return true;
        }
        else{
            return false;
        }
    }       

    //Pasta dos usuários
    $local_dir = './users';
    //Função que retorna um array com os arquivos da pasta users
    function cleanScand($dir){
        return array_values(array_diff(scandir($dir), array('.','..')));
    }

    //Pega o tamanho do array da function cleanScand
    $size = sizeof(cleanScand($local_dir));
    // Um for que efetua ++ a até o número de arquivos da pasta +1, dessa forma efetuando login em todo usuários independente da quantidade
    function verificaExistenciaUser(){
        $local_dir = './users';
        $size = sizeof(cleanScand($local_dir));
        for ($i = 1; $i < $size+1; $i++) { 
            $caminho = "./users/".$i.".txt";            
            $arqopen = fopen("$caminho", "r");
            $user = file("$caminho");
            $user_html = $_REQUEST["user"];
            $password1_html = $_REQUEST["password1"];
            if ($user_html == trim($user[0])) {
                echo "<script> alert('Usuário já cadastrado!') </script>";
                include("registerscreen.php");
                break;
            }
            else if($i == $size){
                criando();
            }
        }
    }
    /* Verifica o retorno da função verificaSenha e executa a função de registro */
    function criando(){
        /* Recuperando os valores das inputs */
        $local_dir = './users';
        $size = sizeof(cleanScand($local_dir));
        $user_html = $_REQUEST["user"];
        $password1_html = $_REQUEST["password1"];
        $password2_html = $_REQUEST["password2"];
        $saldo_html = $_REQUEST["saldo"];
        $dataNasciment_html = str_replace('-', '/', $_REQUEST["dataNascimento"]);
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
    }
?>