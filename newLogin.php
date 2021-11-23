<?php


    //TESTE - TESTE - TESTE - TESTE - TESTE - TESTE - TESTE - TESTE - TESTE - TESTE - TESTE - TESTE - TESTE - TESTE
    
    function pre_r($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    $local_dir = 'C:\xampp\htdocs\Trabalho_Flavio_PHP_CaioDiasCozendey_GuilhermeAlbuquerqueFraga\Users';

    $files = cleanScand($local_dir);
    $sizefiles = returnSize($local_dir);
    pre_r($files);

    function cleanScand($dir){
        return array_values(array_diff(scandir($dir), array('.','..')));
    }

    function returnSize($dir){
        return sizeof(array_values(array_diff(scandir($dir), array('.','..'))));
    }

    for ($i = 1; $i <= $sizefiles; $i++) { 
        $arq[$i] = fopen("./Users/$i.txt", "r");
        $user[$i] = file("./Users/$i.txt");
        print_r($user[$i[3]]) . "<br>";
        if ($usuario == trim($user[$i[0]]) && $senha == trim($user[$i[1]])) {
            $nome = $user[$i[0]];
            $dataNascimento = $user[$i[2]];
            $saldo = $user[$i[3]];
            login($nome, $dataNascimento, $saldo);
        }   
    }     

?>