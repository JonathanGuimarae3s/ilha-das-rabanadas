+
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="shortcut icon" href="./imgs/img-home/logo.webp" type="image/x-icon">
</head>
<style>
  * {
    box-sizing: border-box;
    margin: 0;
  }

  #grid {

    display: grid;
    grid-template-columns: 500px 500px;

  }

  #img {
    align-items: center;
  }

  header {
    background-color: #F2AC57;
  }

  h1 {
    font-size: 20px;
    font-style: normal;
    font-family: Arial, Helvetica, sans-serif;
  }

  #btn {
    align-items: center;
    text-align: center;
    background-color: rgba(65, 191, 97, 0.43);
    color: black;
    justify-content: center;
    padding: 5px 10px 10px 5px;
    border: 30px;
    width: 400px;
    border-radius: 5px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 16px;
  }

  #btn:hover {
    background-color: #41BF61;
    color: white;
  }
</style>

<body>
  <header>
    <div class="text-center">
      <img id="img" src="./imgs/img-home/logo.webp" alt="" width="200px">
    </div>
  </header>
  <br>
  <div class="text-center">
    <h1>Cadastro</h1>
  </div>
  <br>
  <main>

    <div id="grid" class="d-flex flex-column align-items-center justify-content-center" style="background-color:#f2f2f2 ; ">
      <form action="insert" method="POST">
        <div>
          <div id="grid" class="row">
            <div class="col">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" name="nome" id="nome" class="form-control" placeholder="Seu nome" aria-describedby="helpId">
            </div>
            <div class="col">
              <label for="sobrenome" class="form-label">Sobrenome</label>
              <input type="text" name="sobrenome" id="sobrenome" class="form-control" placeholder="Seu sobrenome" aria-describedby="helpId">
            </div>
          </div>
          <br>
          <div class="col-5">
            <label for="cep" class="form-label">Cep</label>
            <input type="text" name="cep" id="cep" class="form-control" placeholder="11111-111" aria-describedby="helpId">
          </div>
          <br>
          <div id="grid" class="row">
            <div class="col">
              <label for="rua" class="form-label">Rua</label>
              <input type="text" name="rua" id="rua" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="col">
              <label for="numero" class="form-label">numero</label>
              <input type="text" name="numero" id="numero" class="form-control" placeholder="" aria-describedby="helpId">

            </div>
          </div>
          <br>
          <div id="grid" class="row">
            <div class="col">
              <label for="bairro" class="form-label">Bairro</label>
              <input type="text" name="bairro" id="bairro" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="col">
              <label for="cidade" class="form-label">Cidade</label>
              <input type="text" name="cidade" id="cidade" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
          </div>
          <br>
          <div class="col-5">
            <label for="email" class="form-label">E_mail</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Seu email" aria-describedby="helpId">
          </div>
          <br>
          <div id="grid" class="row">
            <div class="col">
              <label for="senha" class="form-label"> Senha</label>
              <input type="password" name="senha" id="senha" class="form-control" placeholder="Seu senha" aria-describedby="helpId">
            </div>
            <div class="col">
              <label for="senha" class="form-label">Confime sua enha</label>
              <input type="password" name="senha" id="senha" class="form-control" placeholder="Seu senha" aria-describedby="helpId">
            </div>



          </div>
        </div>

        <br>
        <div class="text-center">

          <input id="btn" class="btn" type="submit" value="Finalizar">

        </div>
      </form>
    </div>

    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>