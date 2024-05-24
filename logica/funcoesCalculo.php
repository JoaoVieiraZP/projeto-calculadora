<?php

function adicao($num1, $num2){
    return($num1 + $num2);
}

function subtracao($num1, $num2){
    return($num1 - $num2);
}

function multiplicacao($num1, $num2){
    return($num1 * $num2);
}

function divisao($num1, $num2){
    return($num1 / $num2);
}

function celsius($graus){
    return($graus * (9/5) + 32);
}

function farhrenheit($graus){
    return(($graus - 32) * (5/9));
}

?>