<?php

    function pre_r($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    


    $local_dir = './users';
    function cleanScand($dir){
        return array_values(array_diff(scandir($dir), array('.','..')));
    }

    $size = sizeof(cleanScand($local_dir));

    for ($i = 1; $i <= $size; $i++) { 
        $caminho = "./users/".$i.".txt";
        $arqopen = fopen("$caminho", "r");
        $user = file("$caminho");

        echo $user[0] ."<br>";
        echo $user[1] ."<br>";
        echo $user[2] ."<br>";
        echo $user[3] ."<br>";
    }


    echo $size;
?>