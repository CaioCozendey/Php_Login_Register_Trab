<?php
function inicia($usuario, $senha){
    //O código começa logo após as 3 functions abaixo
    
    //Função que verifica a idade do usuário após user e senha já validado
    function verificaIdade($idadeVerificada){
        $dataNasc = new DateTime($idadeVerificada);
        $dataAtual = new DateTime("now");
        $idade = $dataAtual->format('Y') - $dataNasc->format('Y');
        if ($idade < 18) {
            return true;
        } else {
            return false;
        }
    }

    function returnSize($dir){
        return sizeof(array_values(array_diff(scandir($dir), array('.','..'))));
    }

    function returnDir(){
        return './users';
    }


    //Função para verificar se o saldo é positivo ou negativo após idade já validada
    function verificaSaldo($saldoDaFunction){
        if ($saldoDaFunction <= 0) {
            return true;
        } else {
            return false;
        }
    }

    function num(){
        return "3";
    }

    

    //Função que printa os valores após a confirmação da verifcação de saldo e idade
    //Encaminha pra tela conforme os resultados, utilizando o include
    //Os echos foram armazenados em variaveis para serem impressos de melhor maneira
    function login($nomeFunction, $idadeFunction, $saldofunction){
        if (verificaIdade($idadeFunction) == true) {
            $print = 'Olá ' . ucfirst(trim($nomeFunction)) . '! Vá tomar o seu Toddynho.';
            echo "<script> alert('$print'); </script>";
            echo "<meta http-equiv='refresh' content='0;url=https://www.toddynho.com.br/'>";
        } else {
            if (verificaSaldo($saldofunction) == true) {
                $print = 'Olá ' . ucfirst(trim($nomeFunction)) .'!<br> Seu saldo é de ' . str_replace(['R$', '-'], '',  $saldofunction) . ' negativos. <br> Não se desespere, nenhum obstáculo é tão grande para quem desiste!';
                include('TelaSaldoNegativo.php');
            } 
            else{
                $print = 'Olá ' . ucfirst(trim($nomeFunction)) .'! <br> Seu saldo é de ' . str_replace('R$', '', $saldofunction) .  '.<br> Não se alegre muito. A desgraça vem logo após a alegria.';
                include('TelaSaldoPositivo.php');
            }
        }
    }
    
    //Define o fuso horário de São Paulo
    
    date_default_timezone_set('America/Sao_Paulo');
    $local_dir = './users';
    function cleanScand($dir){
        return array_values(array_diff(scandir($dir), array('.','..')));
    }

    $size = sizeof(cleanScand($local_dir));
    for ($i = 1; $i < $size+1; $i++) { 
        $caminho = "./users/".$i.".txt";
        $arqopen = fopen("$caminho", "r");
        $user = file("$caminho");
        if ($usuario == trim($user[0]) && $senha == trim($user[1])) {
            $nome = $user[0];
            $dataNascimento = $user[2];
            $saldo = $user[3];
            login($nome, $dataNascimento, $saldo);
        }
        if ($i == $size) {
            goto end;
        }     
        // FALTA ISSO FALTA ISSO FALTA ISSO FALTA ISSO FALTA ISSO FALTA ISSO FALTA ISSO FALTA ISSO FALTA ISSO FALTA ISSO FALTA ISSO FALTA ISSO
        end:
        echo "<script> alert('Usuário inválido!')</script>";
        include('index.php');
        break;
        exit;
        sds;
    }

    
    

}
