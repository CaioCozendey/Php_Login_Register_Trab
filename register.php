<?php
    /* Arquivo que contém a função que cria os registros */
    include('registerexecute.php');

    /* Recuperando os valores das inputs */
    $user_html = $_REQUEST["user"];
    $password1_html = $_REQUEST["password1"];
    $password2_html = $_REQUEST["password2"];
    $saldo_html = $_REQUEST["saldo"];
    $dataNasciment_html = $_REQUEST["dataNascimento"];

    function returnSize($dir){
        return sizeof(array_values(array_diff(scandir($dir), array('.','..'))));
    }
    $local_dir = 'C:\xampp\htdocs\Trabalho_Flavio_PHP_CaioDiasCozendey_GuilhermeAlbuquerqueFraga\Users';
    $sizefiles = returnSize($local_dir);

    /* Função que verifica se as senha são iguais */
    function verificaSenha($senha1, $senha2){
        if ($senha1 == $senha2) {
            return true;
        }
        else{
            return false;
        }
    }       

    /* Verifica o retorno da função verificaSenha e executa a função de registro */
    if (verificaSenha($password1_html, $password2_html) == true){
        for ($i = 0, $x = 1; $i < 3, $x < 3; $i++, $x++) { 
            echo "caralho$i";   
        }
        //verificaRegistro($user_html, $password1_html, $saldo_html, $dataNasciment_html);
    }
    else{
        echo "<script> alert('As senha não são iguais!'); </script>";
        include('registerscreen.php');
    }

?>