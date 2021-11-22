<?php

    function registro($username, $password, $money, $dateNasc){
        $dir = "./Users/";
        $Users = scandir($dir);


        print_r($Users);
        $tamanho = sizeof($Users);

        for ($i = 1; $i < $tamanho-1; $i++) { 
            $x = file("./Users/user[$i].txt");
            echo $x;
        }
    
    }
?>