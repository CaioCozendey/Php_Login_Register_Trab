<?php

    function registro($username, $password, $money, $dateNasc){
        $dir = "./Users";
        $Users = scandir($dir);

        var_dump($Users);
    }

?>