<?php

ini_set("display_errors", true);

# Chamando a conexão com o banco de dados
require_once 'pages/connect.php';
require_once 'pages/functions.php';

$products = select("products", null, null, " ORDER BY id_product");

?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Natan Aguiar - NataNet - Tecnologia">
    <meta name="generator" content="">
    <title>Minha Loja - Produtos</title>

    <link rel="canonical" href="http://localhost/cursosutd/php/exerciciomod2/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Meus Icones -->
    <link rel="apple-touch-icon" href="./assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="./assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="./assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="./assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="./assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="./assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <!-- Table style -->
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/b-2.3.6/b-html5-2.3.6/b-print-2.3.6/r-2.4.1/datatables.min.css" rel="stylesheet" />
</head>

<body>
    <?php include_once 'pages/nav.php'; ?>
    <main>
        <h2 class="display-6 text-center mb-4">Produtos Disponíveis</h2>
        <div>
            <div class="card-body">
                <?php if (empty($products)) : ?>
                    <div class="alert alert-danger alert-dismissible text-center" role="alert"> Não temos produtos cadastrados na loja neste momento</div>
                <?php else : ?>
                    <table id="TableProdutos" class="table table-bordered table-hover">
                        <thead class="text-center bg-dark text-white">
                            <th> Id </th>
                            <th> Nome </th>
                            <th> Código </th>
                            <th> Preço </th>
                            <th> Estoque </th>
                            <th> Data de Cadastro </th>
                            <th> Ações </th>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product) : ?>
                                <tr>
                                    <td width="5%" class="text-center"><?= $product['id_product']; ?></td>
                                    <td><?= $product['product_name']; ?></td>
                                    <td><?= $product['product_code']; ?></td>
                                    <td><?= $product['product_price']; ?></td>
                                    <td><?= $product['product_stock']; ?></td>
                                    <td><?= $product['product_created_in']; ?></td>
                                    <td>
                                        <a href="editaProduto.php?id=<?= $product['id_product']; ?>" class="btn btn-warning btn-xs">
                                            <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                        </a>
                                        <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#deletar-<?= $product['id_product']; ?>">
                                            <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="deletar-<?= $product['id_product']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="./pages/excluir.php" method="POST">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Registro?</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Deseja excluir o produto <strong><?= $product['product_name']; ?></strong>? Essa alteração não pode ser desfeita!
                                                            <input type="hidden" name="id_product" value="<?= $product['id_product']; ?>">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não, Sair!</button>
                                                            <button type="submit" class="btn btn-success">Sim, pode continuar !</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif ?>
            </div>
        </div>
        <div class="row text-center">
            <p><a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Cadastrar Produto</a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <form action="pages/inserir.php?action=1" method="POST">
                        <div class="card">
                            <div class="card-header">
                                Cadastro de Produto
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label> Nome Produto: <span class="text-danger">*</span> </label><br>
                                        <input type="text" name="product_name" class="form-control" required placeholder="Digite o nome"><br>
                                    </div>

                                    <div class="col-md-4">
                                        <label> Código: <span class="text-danger">*</span></label><br>
                                        <input type="text" name="product_code" class="form-control" required placeholder="Digite o Código" maxlength="12"><br>
                                    </div>

                                    <div class="col-md-6">
                                        <label> Preço: <span class="text-danger">*</span> </label><br>
                                        <input type="text" name="product_price" class="form-control" required placeholder="Digite o Preço"><br>
                                    </div>

                                    <div class="col-md-6">
                                        <label> Estoque: <span class="text-danger">*</span></label><br>
                                        <input type="number" min=0 step=1 name="product_stock" class="form-control" required placeholder="Digite o Estoque"><br>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success"> Cadastrar Dados do Produto </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </main>
    <?php include_once 'pages/footer.php'; ?>
    </div>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- DataTables  & Plugins -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/b-2.3.6/b-html5-2.3.6/b-print-2.3.6/r-2.4.1/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#TableProdutos').DataTable({
                "language": {
                    "sProcessing": "Processando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "Não foram encontrados resultados",
                    "sEmptyTable": "Nenhum dado disponivel nesta tabela",
                    "sInfo": "Mostrando registros de _START_ a _END_ de um total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros de 0 a 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de um total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Carregando...",
                    "oPaginate": {
                        "sFirst": "Primeiro",
                        "sLast": "Último",
                        "sNext": "Seguinte",
                        "sPrevious": "Anterior"
                    },
    
                    "oAria": {
                        "sSortAscending": ": Ativar para ordenar a coluna em ordem ascendente",
                        "sSortDescending": ": Ativar para ordenar a coluna em ordem descendente"
                    }
                },
            });
        });
    </script>
</body>

</html>