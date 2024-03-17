<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo ao Login - Sistemas de Gerenciamento de Entregas</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="./css/styles.css">
    <!-- BootStrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
</head>

<body class="index">
    <!--header -->
    <header class="header d-flex justify-content-between">
        <a href="indexx.php" class="logo logo-md">Sistema de Gerenciamento de Entregas</a>
        <nav id="menu">
            <ul>
                <li>
                    <a href="indexx.php" class="logo logo-lg">Sistema de Gerenciamento de Entregas</a>
                </li>
                <li>
                    <a href="#">Enviar um pacote</a>
                </li>
                <li>
                    <a href="#">Ratrear meu pacote</a>
                </li>
                <li>
                    <a href="#">Cadastrar pedidos</a>
                </li>
                <li>
                    <a href="#">Entrar em contato</a>
                </li>
                <li class="divider">
                    <a href="#">Minha conta <i class="fa-solid fa-circle-user"></i></a>
                </li>
                <li>
                    <a href="#">Logout <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                </li>
            </ul>
        </nav>
    </header>
    <!--header end -->
    <div class="container my-4">
        <div class="title d-flex justify-content-between my-4">Cadastrar pedidos</div>
        <form action="process.php" method="POST">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="descricao" placeholder="Descrição do produto">
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="rua" placeholder="Nome da rua">
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="numero" placeholder="Número">
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="complemento" placeholder="Complemento">
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="cep" placeholder="CEP">
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="peso" placeholder="Peso da carga">
            </div>

            <div class="form-element">
                <input type="submit" class="btn btn-success" name="create" value="Cadastrar pedido">
                <a href="indexx.php" class="btn btn-primary">Voltar</a>
            </div>

        </form>
    </div>

</body>

</html>