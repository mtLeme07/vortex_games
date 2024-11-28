<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="styles/style.css" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Jogos</title>
</head>

<body>


<div class="center mt-3">
  <img class="d-block mx-auto mb-4" src="assets/vortex_logo.png" alt="" width="120" height="120">
  <p class="h1 text-center"><strong><em> Vortex Games </em></strong></p>
</div>



    <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2">Faça seu Login</h1>
      </div>

      <div class="modal-body p-5 pt-0">
        <form action="login_validate.php" method="post">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="username" name="username" required>
            <label for="floatingInput">Usuário</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="password" name="password" required>
            <label for="floatingPassword">Senha</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Entrar</button>
        </form>
      </div>
    </div>
  </div>
</div>



</body>

</html>