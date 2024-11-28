<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Carrinho de Compras</title>
</head>
<body class="mx-3">

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
        <li class="nav-item"><a href="main.php" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="cart.php" class="nav-link">Carrinho</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Sair</a></li>
      </ul>
    </header>
   
<p class="h2 text-center my-4">Carrinho de Compras:</p>

<div>
    
    <table class="table table-borderless table-striped">
      <thead class="">
      <tr>
        <th scope="col" width="30%">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Preço</th>
        <th scope="col">Quantidade</th>
      </tr>
      </thead>
      <tbody>
 <?php       
 //   <tr>
 //       <td scope='row'><img src='assets/dbd.jpeg' width='200px'></th>
 //       <td class='align-middle'>Mark</td>
 //       <td class='align-middle'>Otto</td>
 //   </tr>
 $connect = mysqli_connect("127.0.0.1", "root", "");
 mysqli_select_db($connect, "vortex");
 mysqli_set_charset($connect,"UTF8");
 $query = mysqli_query($connect,"SELECT * FROM jogos");
 $total = 0;
 while($result = mysqli_fetch_array($query)){
    if(isset($_COOKIE[$result[0]])){
        echo " <tr>
      <td scope='row'><img src='assets/". $result[3] ."' height='100px' width='100px'></th>
        <td class='align-middle'>". $result[1] ."</td>
        <td class='align-middle'>R$". $result[2] ."</td>
        <td class='align-middle'>". $_COOKIE[$result[0]] ."</td>
        
    </tr>";
$total = $total + (float)$result[2] * (float)$_COOKIE[$result[0]];
    }

}



?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Total: R$<?php echo $total; ?></td>
         </tr>
         <tr>
            <td class="colspan-2">    <form method='post' action='limpar.php'>
                  <button type='submit' class='ml-5 btn btn-outline-primary'>Limpar Carrinho</button>
    </form></td><td></td><td></td>
            <td> <form method='post' action='limpar.php'>
                  <button type='submit' class='ml-5 btn btn-outline-primary'>Confirmar Compra</button>
    </form></td>
</tr>
</tbody>
    </table>

   

    
</div>

</body>
</html>