<?php
function inicia($usuario, $senha){
    //O código começa logo após as functions abaixo
    
    //Função que calcula idade do usuário e retorna true se for menor e false caso seja um ser milenar a frente do tempo
    function verificaIdade($idadeVerificada){
        $data = new DateTime($idadeVerificada );
        $resultado = $data->diff( new DateTime( date('Y-m-d') ) );
        $idade = $resultado->format( '%Y anos' );   
        if ($idade < 18) {
            return true;
        } else {
            return false;
        }
    }

    function returnSize($dir){
        return sizeof(array_values(array_diff(scandir($dir), array('.','..') ) ) );
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
    function login($nomeFunction, $idadeFunction, $saldofunction, $newSaldo){
        if (verificaIdade($idadeFunction) == true) {
            $print = 'Olá ' . ucfirst(trim($nomeFunction)) . '! Vá tomar o seu Toddynho.';
            echo "<script> alert('$print'); </script>";
            echo "<meta http-equiv='refresh' content='0;url=https://www.toddynho.com.br/'>";
        } else {
            if (verificaSaldo($saldofunction) == true) {
                $print = 'Olá ' . ucfirst(trim($nomeFunction)) .'!<br> Seu saldo é de ' . str_replace(['R$', '-'], '',  $saldofunction) . ' negativos. <br> Não se desespere, nenhum obstáculo é tão grande para quem desiste!';
                $abrindoMagica = fopen("naomecha_magica/magica.txt", "w");
                fwrite($abrindoMagica, $newSaldo);
                include('TelaSaldoNegativo.php');
            } 
            else{
                $print = 'Olá ' . ucfirst(trim($nomeFunction)) .'! <br> Seu saldo é de ' . str_replace('R$', '', $saldofunction) .  '.<br> Não se alegre muito. A desgraça vem logo após a alegria.';
                $abrindoMagica = fopen("naomecha_magica/magica.txt", "w");
                fwrite($abrindoMagica, $newSaldo);
                include('TelaSaldoPositivo.php');
            }
        }
    }
    
    //Define o fuso horário de São Paulo
    date_default_timezone_set('America/Sao_Paulo');
    //Pasta dos usuários
    $local_dir = './users';
    //Função que retorna um array com os arquivos da pasta users
    function cleanScand($dir){
        return array_values(array_diff(scandir($dir), array('.','..')));
    }
    //Pega o tamanho do array da function cleanScand
    $size = sizeof(cleanScand($local_dir));
    // Um for que efetua ++ a até o número de arquivos da pasta +1, dessa forma efetuando login em todo usuários independente da quantidade
    for ($i = 1; $i < $size+1; $i++) { 
        $caminho = "./users/".$i.".txt";
        $arqopen = fopen("$caminho", "r");
        $user = file("$caminho");
        if ($usuario == trim($user[0]) && $senha == trim($user[1])) {
            $nome = $user[0];
            $dataNascimento = $user[2];
            $saldo = $user[3];
            login($nome, $dataNascimento, $saldo, "./users/".$i.".txt");
            break;
        }
        else if($i == $size){
            echo "<script> alert('Usuário inválido!')</script>";
            include('index.php');
        }
    }
}
