<?php

require_once 'pages/connect.php';
require_once 'pages/functions.php';

$suppliers = select("suppliers", null, null, " ORDER BY id_suppliers");

if (isset($_GET['id'])) {
    $filter['id_suppliers'] = $_GET['id'];
    $supplier = select("suppliers", null, $filter, " LIMIT 1")[0];
}

?>
<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Natan Aguiar - NataNet - Tecnologia">
    <meta name="generator" content="">
    <title>Minha Loja - Produtos</title>

    <link rel="canonical" href="http://localhost/cursosutd/php/exerciciomod2/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- js para as mascaras. -->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="./assets/js/masks.js"></script>
    <!-- Meus Icones -->
    <link rel="apple-touch-icon" href="./assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="./assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="./assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="./assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="./assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="./assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

</head>
<body>
    <?php include_once 'pages/nav.php'; ?>
    <main>
        <h2 class="display-6 text-center mb-4">Editando o Fornecedor Disponíveis</h2>
        <div class="row text-center">
            <div class="card card-body">
                <form action="pages/editar.php?action=2" method="POST">
                    <div class="card">
                        <div class="card-header">
                            Edição de Fornecedor
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <label> Nome Produto: <span class="text-danger">*</span> </label><br>
                                    <input type="text" name="suppliers_name" class="form-control" required placeholder="Digite o nome" value="<?= $supplier['suppliers_name']; ?>"><br>
                                </div>

                                <div class="col-md-4">
                                    <label> Código: <span class="text-danger">*</span></label><br>
                                    <input type="text" name="suppliers_code" class="form-control" required placeholder="Digite o Código" maxlength="12" value="<?= $supplier['suppliers_code']; ?>"><br>
                                </div>

                                <div class="col-md-6">
                                    <label> CNPJ do Fornecedor: <span class="text-danger">*</span> </label><br>
                                    <input type="text" name="cnpj_suppliers" class="form-control cnpj-mask" required placeholder="Digite o CNPJ" value="<?= $supplier['cnpj_suppliers']; ?>"><br>
                                </div>

                                <input type="hidden" name="id_suppliers" value="<?= $supplier['id_suppliers']; ?>">

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success"> Enviar Dados </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>


            </div>

        </div>
    </main>
    <?php include_once 'pages/footer.php'; ?>
    </div>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>