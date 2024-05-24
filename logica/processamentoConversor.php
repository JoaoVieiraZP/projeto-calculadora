<?php

require_once "funcoesCalculo.php";

$resultado = "";
session_start(); //Iniciando a session! Permintindo uso de varáveis de session!

if(!empty($_GET['inputComp'])){

    $medida = $_GET['inputComp'];

    if($_GET['selectOperacoes'] == "Centimetros"){
        $resultado = $medida . "Cm em Metros são " . centimetros($medida) . "M";
    }
    else if($_GET['selectOperacoes'] == "Metros"){
        $resultado = $medida . "M em Centimetros são " . metros($medida) . "Cm";
    }
    else if($_GET['selectOperacoes'] == "Quilometro"){
        $resultado = $medida . "M em Metros são " . quilometros($medida) . "Km";
    }
    else{
        $resultado = $medida . "Km em Quilômetros são " . metrosKM($medida) . "M";
    }

    //echo $resultado;
    //Guarda o resultado na variável de session
    $_SESSION['resultado'] = $resultado;

    //Comando HEADER (PHP) redireciona para uma página especificada
    header('location:../conversor.php');
    die();
}


?>