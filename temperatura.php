<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>Temperatura</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>
    
    <div class="div-conteudo">
        <form method="GET" action="logica/processamento.php">
            <label>Temperatura:</label>
            <input type="text" name="inputTemp" placeholder="Digite o número 1">
            <select name="selectOperacoes">
                <option value="Celsius">Celsius para Farhrenheit</option>
                <option value="subtracao">Farhrenheit para Celsius</option>
            </select>
            <input id="botao" type="submit" value="Calcular">
        </form>
        <div class="div-result">
            <p id="resultado">
                <?php
                    //Verificando se existe a variavel de session resultado
                    if(isset($_SESSION['resultado'])){
                        //Caso exista, utiliza um echo para exibir o resultado
                        echo "Resultado é: " , $_SESSION['resultado'];
                    }
                ?>
            </p>
        </div>
        <img src="img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por João Vieira - Análise e Desenvolvimento de Sistemas - AMS</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>