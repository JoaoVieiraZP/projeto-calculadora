<?php

require_once "funcoesCalculo.php";

$resultado = "";
session_start(); //Iniciando a session! Permintindo uso de varáveis de session!

if(!empty($_GET['inputTemp'])){

    $graus = $_GET['inputTemp'];

    if($_GET['selectOperacoes'] == "Celsius"){
        $resultado = $graus . "ºC em Farrenheit são " . celsius($graus) . "°F";
    }
    else if($_GET['selectOperacoes'] == "Farhrenheit"){
        $resultado = $graus . "°F em Celsius são " . farhrenheit($graus) . "ºC";
    }

    //echo $resultado;
    //Guarda o resultado na variável de session
    $_SESSION['resultado'] = $resultado;

    //Comando HEADER (PHP) redireciona para uma página especificada
    header('location:../temperatura.php');
    die();
}


?>