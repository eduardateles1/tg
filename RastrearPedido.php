<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastrear Pedido</title>
     <!-- Google Font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="./css/styles.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">  

        <script src="https://code.jquery.com/jquery-3.5.1.slim.js"></script>
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
        <h1>Rastrear Pedidos</h1>
    </header>
<body>
<div class="monitorar">
    <div class="input-wrapper col-auto">
        <form autocomplete="on" style="display: contents;">
            <input class="form-control" autocomplete="on" id="OrderTracking" name="OrderTracking" onclick="fullwindowpopup()" placeholder="Digite o código de rastreio aqui" type="text" />&nbsp;
        </form>
        <div>
        <button class="rastreio btn btn-primary" type="submit">Rastrear encomenda</button>
        <a  class="btn btn-primary" href="indexx.php">Voltar</a>
        </div>
    </div>
</div>
</body>
</html>


<script>
    $(function fullwindowpopup() {
  $(".rastreio").click(function () {
    var numerosro = document.getElementById("OrderTracking").value;
    var w = 650;
    var h = 650;
    var left = Number(screen.width / 2 - w / 2);
    var tops = Number(screen.height / 3 - h / 3);
    return window.open(
      "https://www.linkcorreios.com.br/" + numerosro,
      "",
      "toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=" +
        w +
        ", height=" +
        h +
        ", top=" +
        tops +
        ", left=" +
        left
    );
  });
  $(".dropdown").hover(
    function () {
      $(".dropdown-menu", this).stop(true, true).fadeIn("fast");
      $(this).toggleClass("open");
      $("b", this).toggleClass("caret caret-up");
    },
    function () {
      $(".dropdown-menu", this).stop(true, true).fadeOut("fast");
      $(this).toggleClass("open");
      $("b", this).toggleClass("caret caret-up");
    }
  );
});

</script>