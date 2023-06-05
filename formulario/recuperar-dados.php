<?php

    if($_POST){
        
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $email = $_POST["email"];
        $hobbie = $_POST["hobbie"];


        if (strlen($nome) < 6){
            echo "O nome deve conter no minimo 6 caracteres";
            exit;
        }

        if($idade < 18){
            echo "Erro a idade minima é 18 anos!";
            exit;
        }


        echo "nome: " . $nome . "<br>";
        echo "idade: " . $idade . "<br>";
        echo "email: " . $email . "<br>";
        echo "hobbie: " . $hobbie ; "<br>";
    }

?>

