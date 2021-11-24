<?php

    function registro($username, $password, $money, $dateNasc){
        $dir = "./users/";
        $users = scandir($dir);


        print_r($users);
        $tamanho = sizeof($users);

        for ($i = 1; $i < $tamanho-1; $i++) { 
            $x = file("./users/user[$i].txt");
            echo $x;
        }
    
    }
?>