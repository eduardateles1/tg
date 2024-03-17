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
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
</head>
<header class="header d-flex justify-content-between">
    <a href="indexx.php" class="logo logo-md">Sistema de Gerenciamento de Entregas</a>
    <nav id="menu">
        <ul>
            <li>
                <a href="indexx.php" class="logo logo-lg">Sistema de Gerenciamento de Entregas</a>
            </li>
        </ul>
    </nav>
</header>
<!--header end -->
<div class="container my-4">
    <header class="d-flex justify-content-between my-4">
        <h1>Lista de pedidos</h1>
        <div>
            <a href="addEntregas.php" class="btn btn-primary"> Adicionar novo pedido</a>
        </div>
    </header>
    <?php
        session_start();
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Descrição</th>
                <th>Rua</th>
                <th>Número</th>
                <th>Complemento</th>
                <th>Cep</th>
                <th>Peso</th>
                <th>Ação</th>
            </tr>
        <tbody>
            <?php
                    include('config.php');
                    $sql = "SELECT * FROM pedidos";
                    $result = mysqli_query($con,$sql);

                    while($row = mysqli_fetch_array($result)){
                      ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['descricao']; ?></td>
                <td><?php echo $row['rua']; ?></td>
                <td><?php echo $row['numero']; ?></td>
                <td><?php echo $row['complemento']; ?></td>
                <td><?php echo $row['cep']; ?></td>
                <td><?php echo $row['peso']; ?></td>
                <td>
                    <a href="editPedidos.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="deletePedidos.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Deletar</a>
                </td>
            </tr>
            <?php
                    }
                ?>
        </tbody>
        </thead>
    </table>
    <div>
        <a href="indexx.php" class="btn btn-primary">Voltar</a>
        </div>

    <body>

    </body>

</html>