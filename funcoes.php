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
        return 'C:\xampp\htdocs\Trabalho_Flavio_PHP_CaioDiasCozendey_GuilhermeAlbuquerqueFraga\Users';
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
    
    //Abre os 4 arquivos
    $arq1 = fopen("./Users/1.txt", "r");
    // $arq2 = fopen("./Users/2.txt", "r");
    // $arq3 = fopen("./Users/3.txt", "r");
    // $arq4 = fopen("./Users/4.txt", "r");

    // //Divide todas as linhas do arquivo em vetores para melhor manipulação
    
    // $user1 = file("./Users/1.txt");
    // $user2 = file("./Users/2.txt");
    // $user3 = file("./Users/3.txt");
    // $user4 = file("./Users/4.txt");

    //Vericia os valores que o usuário inseriu no html passado como parametro e defini os valores das variaveis
    //de acordo com o usuário selecionado
    //Caso os valores de login não estejam de acordo com os já registrados no txt, retorna um alert como login inválido
    //Os valores foram definidos nas variáveis, para serem passados como parametros e possibilitarem um código menor
    //Reduzimos mais de 30 linhas fazendo dessa maneiras
    //Se der ponto extra humilde 

    //Define o fuso horário de São Paulo
    
    date_default_timezone_set('America/Sao_Paulo');
    $local_dir = returnDir();
    $tamanhoArq = returnSize($local_dir);
    for ($i = 0, $x = 1; $i < $tamanhoArq, $x < $tamanhoArq+1; $i++, $x++) { 
        $useropen = fopen("./Users/".$x.".txt");
        $user = file("./Users/".$x.".txt");
        if ($usuario == trim($user[$x[0]]) && $senha == trim($user[$x[1]])) {
            // $nome = $user[$i][0];
            // $dataNascimento = $user[$i][2];
            // $saldo = $user[$i][3];
            // login($nome, $dataNascimento, $saldo);
            // break;
            echo $user[$i[1]];  
        }
        else {
            echo "<script> alert('Usuário inválido!')</script>";
            include('index.php');
            break;
        }
    }

    // if ($usuario == trim($user1[0]) && $senha == trim($user1[1])) {
    //     $nome = $user1[0];
    //     $dataNascimento = $user1[2];
    //     $saldo = $user1[3];
    //     login($nome, $dataNascimento, $saldo);
    // } elseif ($usuario == trim($user2[0]) && $senha == trim($user2[1])) {
    //     $nome = $user2[0];
    //     $dataNascimento = $user2[2];
    //     $saldo = $user2[3];
    //     login($nome, $dataNascimento, $saldo);
    // } elseif ($usuario == trim($user3[0]) && $senha == trim($user3[1])) {
    //     $nome = $user3[0];
    //     $dataNascimento = $user3[2];
    //     $saldo = $user3[3];
    //     login($nome, $dataNascimento, $saldo);
    // } elseif ($usuario == trim($user4[0]) && $senha == trim($user4[1])) {
    //     $nome = $user4[0];
    //     $dataNascimento = $user4[2];
    //     $saldo = $user4[3];
    //     login($nome, $dataNascimento, $saldo);
}
