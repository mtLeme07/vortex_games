<?php
session_start(); // Inicia a sessão ou retoma a sessão existente

// Verifica se o usuário está autenticado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php"); // Redireciona para a página de login se não estiver autenticado
    exit(); // Garante que o redirecionamento ocorra e o script pare aqui
}

//conecta ao banco de dados
$connect = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($connect, "vortex");
    mysqli_set_charset($connect,"UTF8");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="styles/style.css" rel="stylesheet">

    <title>Vortex Games</title>
</head>
<body>



<!--HEADER: Logo e Titulo-->
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="main.php"/></svg>
        <img class="ml-2 mx-auto" src="assets/vortex_logo.png" alt="" width="60" height="60">
        <span class="fs-4"><em>Vortex Games</em></span>
      </a>
<!--HEADER: Itens-->
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="cart.php" class="nav-link">Carrinho</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Sair</a></li>
      </ul>
    </header>

<p class="h2 text-center"><strong>Jogos Disponíveis:</strong></p>

<div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


       <!--
      CARD DE EXEMPLO:
      
       <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="assets/dbd.jpeg" width="50%" height="325" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
            <div class="card-body">
            <h5 class="card-title">Dead by Daylight</h5>
              <p class="card-text ">R$60,00</p>
              <div class="d-flex">
                <div class="btn-group">
                  <button type="button" class="ml-5 btn btn-outline-primary">Colocar no Carrinho</button>
                </div>
              </div>
            </div>
          </div>
        </div>
-->
<?php
$query = mysqli_query($connect,"SELECT * FROM jogos");
    while($result = mysqli_fetch_array($query)){
        echo "<div class='col'>
          <div class='card shadow-sm'>
            <img class='bd-placeholder-img card-img-top' src='assets/". $result[3] ."' width='50%' height='325' preserveAspectRatio='xMidYMid slice' focusable='false'></img>
            <div class='card-body'>
            <h5 class='card-title'>" . $result[1] . "</h5>
              <p class='card-text '>R$" . $result[2] ."</p>
              <div class='d-flex'>
                <div class='btn-group'>
                <form method='post' action='setcookie.php'>
                  <button name='buy" . $result[0] ."' type='submit' class='ml-5 btn btn-outline-primary'>Colocar no Carrinho</button>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>";
    }
 ?>

      </div>
    </div>
</div>
</body>
</html>