<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastreio de Encomendas</title>
     <!-- Google Font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="./css/styles.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">  
    
</head>
<header class="header d-flex justify-content-between">
    <a href="indexx.php" class="logo logo-md">Sistema de Gerenciamento de Entregas</a>
    <nav id="menu" class="nav justify-content-end">
        <ul>
            <li class="">
                <a href="indexx.php" class="logo logo-lg">Sistema de Gerenciamento de Entregas</a>
            </li>
            <li class="divider">
                <a href="#">Minha conta <i class="fa-solid fa-circle-user"></i></a>
            </li>
            <li class="nav-item">
                <a href="index.php" class="">Logout <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            </li>
        </ul>
    </nav>
</header>
<div class="container my-4">
    <header class="d-flex justify-content-between my-4">
        <h1>Calcular Encomendas</h1>
    </header>
    <form action="" class="" method="POST">
        <div class="col-auto">
            <label for="Cep de origem"></label>
            <input type="text" class="form-control" placeholder="CEP de origem" name="cep">
        </div>
        <div class="col-auto">
            <label for="Cep de destino"></label>
            <input type="text" class="form-control" placeholder="CEP de destino" name="sCepDestino">
        </div>
        <div class="col-auto">
            <label for="Peso"></label>
            <input type="text" class="form-control" placeholder="Peso" name="nVlPeso">
        </div>
        <div class="col-auto">
            <label for="Comprimento"></label>
            <input type="text" class="form-control" placeholder="Comprimento" name="nVlComprimento">
        </div>
        <div class="col-auto">
            <label for="Altura"></label>
            <input type="text" class="form-control" placeholder="Altura" name="nVlAltura">
        </div>
        <div class="col-auto">
            <label for="Largura"></label>
            <input type="text" class="form-control" placeholder="Largura" name="nVlLargura">
        </div>
        <br>
        <div class="col-auto">
            <label for="Serviço"></label>
            <select name="nCdServico" id="">
                <option value="04014">Sedex</option>
                <option value="04510">PAC</option>
            </select>
        </div>
        <br>
        <div class="col-auto">
            <button class="btn btn-primary" type="submit" id="calcular">Calcular</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require "vendor/autoload.php";

        // Recupera os dados do formulário
        $cepOrigem = $_POST['cep'];
        $cepDestino = $_POST['sCepDestino'];
        $peso = $_POST['nVlPeso'];
        $comprimento = $_POST['nVlComprimento'];
        $altura = $_POST['nVlAltura'];
        $largura = $_POST['nVlLargura'];
        $codigoServico = $_POST['nCdServico'];

        // Cria uma instância da classe PrecoPrazo
        $frete = new PrecoPrazo();

        // Configura os parâmetros para o cálculo do frete
        $frete->setCodigoServico($codigoServico)
            ->setCepOrigem($cepOrigem)
            ->setCepDestino($cepDestino)
            ->setComprimento($comprimento)
            ->setAltura($altura)
            ->setLargura($largura)
            ->setDiametro(0) // Valor padrão, não precisa ser especificado
            ->setPeso($peso);

        try {
            // Calcula o frete
            $result = $frete->calculate();

            // Exibe o resultado
            echo "<div class='alert alert-success mt-3' role='alert'>";
            echo "Valor do frete: R$ " . $result['cServico']['Valor'] . "<br>";
            echo "Prazo de entrega: " . $result['cServico']['PrazoEntrega'] . " dias";
            echo "</div>";
        } catch (FreteException $e) {
            // Em caso de erro, exibe uma mensagem de erro
            echo "<div class='alert alert-danger mt-3' role='alert'>";
            echo "Ocorreu um erro ao calcular o frete: " . $e->getMessage();
            echo "</div>";
        }
    }
    ?>
</div>
</html>
