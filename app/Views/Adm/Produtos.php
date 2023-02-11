<?php
include "./app/config.php"; ?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo CSS; ?>/produto/cardapio.css">
    <link rel="stylesheet" href="<?php echo CSS_PADRAO; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        .card-footer>a {
            width: 100%;

        }
    </style>
</head>

<body>
    <?php
    include './app/Views/Headers/header-dashboards-adm-acesado.php';
    ?>

    <main>
        <h1 class="text-center">Produtos</h1>
        <div class="container">
            <div id="doces">
                <h3>Doces</h3>
                <div class="d-flex flex-row justify-content-evenly align-items-center flex-wrap">
                    <?php
                    foreach ($this->dados['produtos'] as $produto) {
                        extract($produto); ?>
                        <div class="card">
                            <img class="card-img-top" src="<?php echo IMG; ?>/cardapio/kits.webp" alt="Title">
                            <div class="card-body text-center">
                                <h4 class="card-title"><?php echo $nome; ?></h4>
                                <p class="card-text"><?php echo $descricao; ?></p>
                                <p>R$<?php echo $preco; ?>,00</p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-center gap-2"><a id="edit" href=""><button class="w-100 btn btn-success">Editar</button></a><a id="delete" href=""><button class="btn w-100">Excluir</button></a></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div id="salgadas">
                <h3>Salgadas</h3>
                <div class="d-flex flex-row justify-content-evenly align-items-center flex-wrap">
                    <?php
                    foreach ($this->dados['produtos'] as $produto) {
                        extract($produto); ?>
                        <div class="card">
                            <img class="card-img-top" src="<?php echo IMG; ?>/cardapio/kits.webp" alt="Title">
                            <div class="card-body text-center">
                                <h4 class="card-title"><?php echo $nome; ?></h4>
                                <p class="card-text"><?php echo $descricao; ?></p>
                                <p>R$<?php echo $preco; ?>,00</p>
                            </div>
                            <div class="card-footer"><a href=""><button class="btn btn-success">Comprar</button></a></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div id="veganas">
                <h3>Veganas</h3>
                <div class="d-flex flex-row justify-content-evenly align-items-center flex-wrap">
                    <?php
                    foreach ($this->dados['produtos'] as $produto) {
                        extract($produto); ?>
                        <div class="card">
                            <img class="card-img-top" src="<?php echo IMG; ?>/cardapio/kits.webp" alt="Title">
                            <div class="card-body text-center">
                                <h4 class="card-title"><?php echo $nome; ?></h4>
                                <p class="card-text"><?php echo $descricao; ?></p>
                                <p>R$<?php echo $preco; ?>,00</p>
                            </div>
                            <div class="card-footer"><a href=""><button class="btn btn-success">Comprar</button></a></div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div id="porcoes">
                <h3>Porções</h3>
                <div class="d-flex flex-row justify-content-evenly align-items-center flex-wrap">
                    <?php
                    foreach ($this->dados['produtos'] as $produto) {
                        extract($produto); ?>
                        <div class="card">
                            <img class="card-img-top" src="<?php echo IMG; ?>/cardapio/kits.webp" alt="Title">
                            <div class="card-body text-center">
                                <h4 class="card-title"><?php echo $nome; ?></h4>
                                <p class="card-text"><?php echo $descricao; ?></p>
                                <p>R$<?php echo $preco; ?>,00</p>
                            </div>
                            <div class="card-footer"><a href=""><button class="btn btn-success">Comprar</button></a></div>
                        </div>
                    <?php } ?>
                </div>
            </div>



        </div>

    </main>
    <?php
    include FOOTER; ?>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>