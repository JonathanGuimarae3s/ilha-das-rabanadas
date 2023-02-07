<!doctype html>
<html lang="en">

<head>
  <title>Ilhas das rabanadas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
#container-form{
  
  max-width: 780px;
background-color: rgba(217, 180, 72, 0.3);
}
form{
width: 50%

 
}
.inputs {
max-width: 80%
}
.btn{
  width: 155px;
  height: 40px;
}
#entrar{
 background-color: rgba(65, 191, 97, 0.55)
}
#cadastrar{
  background-color: rgba(255, 189, 89, 0.74);
}



</style>
</head>

<body>
  
  <main>
  <div id="container-form" class="m-auto d-flex flex-column align-items-center">
    <div class="header text-center ">
    <h1>Ilha das rabanadas</h1>
    </div>
    <form method="POST" >
    <div class="inputs mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="abc@mail.com">
    </div>
    <div class="inputs mb-3">
      <label for="" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="password">
    </div>
    <p>Esqueceu a senha?</p>
    <div class="d-flex align-items gap-3">
     <input id="entrar" class="btn " type="submit" value="Entrar" name="SendLogin">
      <button id="cadastrar"class="btn">Cadastrar</button>
      
    </div></form>
    <span>Retornar ao site</span>
  </div>

  </main>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>