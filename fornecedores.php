<?php
session_start();
# Chamando a conexão com o banco de dados
require_once 'pages/connect.php';
require_once 'pages/functions.php';

$suppliers = select("suppliers", null, null, " ORDER BY id_suppliers");

?>
<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Natan Aguiar - NataNet - Tecnologia">
    <meta name="generator" content="">
    <title>Minha Loja</title>

    <link rel="canonical" href="">
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
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Table style -->
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/b-2.3.6/b-html5-2.3.6/b-print-2.3.6/r-2.4.1/datatables.min.css" rel="stylesheet" />
</head>

<body>
    <?php include_once 'pages/nav.php'; ?>
    <main>
        <h2 class="display-6 text-center mb-4">Fornecedores Cadastrados</h2>
        <div>
            <div class="card-body">
                <?php if (empty($suppliers)) : ?>
                    <div class="alert alert-danger alert-dismissible text-center" role="alert"> Não temos Fornecedores cadastrados na loja neste momento</div>
                <?php else : ?>
                    <table class="table table-bordered table-hover" id="tableFornecedores">
                        <thead class="text-center bg-dark text-white">
                            <th> Id </th>
                            <th> Nome </th>
                            <th> Código </th>
                            <th> CNPJ </th>
                            <th> Data de Cadastro </th>
                            <th> Ações </th>
                        </thead>
                        <tbody>

                            <?php foreach ($suppliers as $supplier) : ?>
                                <tr>
                                    <td width="5%" class="text-center"><?= $supplier['id_suppliers']; ?></td>
                                    <td><?= $supplier['suppliers_name']; ?></td>
                                    <td><?= $supplier['suppliers_code']; ?></td>
                                    <td><?= $supplier['cnpj_suppliers']; ?></td>
                                    <td><?= $supplier['suppliers_created_in']; ?></td>

                                    <td>

                                        <a href="editarFornecedor.php?id=<?= $supplier['id_suppliers']; ?>" class="btn btn-warning btn-xs">
                                            <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                        </a>

                                        <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#deletar-<?= $supplier['id_suppliers']; ?>">
                                            <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                        </button>



                                        <!-- Modal -->
                                        <div class="modal fade" id="deletar-<?= $supplier['id_suppliers']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="pages/excluir.php" method="POST">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Registro?</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Deseja excluir esse fornecedor <strong><?= $supplier['suppliers_name']; ?></strong>? Essa alteração não pode ser desfeita!
                                                            <input type="hidden" name="id_suppliers" value="<?= $supplier['id_suppliers']; ?>">
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

            <p>
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Cadastrar Fornecedor
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <form action="pages/inserir.php?action=2" method="POST">
                        <div class="card">
                            <div class="card-header">
                                Cadastro de fornecedor
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label> Nome do Fornecedor: <span class="text-danger">*</span> </label><br>
                                        <input type="text" name="suppliers_name" class="form-control" required placeholder="Digite o nome"><br>
                                    </div>

                                    <div class="col-md-4">
                                        <label> Código do Fornecedor: <span class="text-danger">*</span></label><br>
                                        <input type="text" name="suppliers_code" class="form-control" required placeholder="Digite o Código" maxlength="12"><br>
                                    </div>

                                    <div class="col-md-6">
                                        <label> CNPJ do Fornecedor: <span class="text-danger">*</span> </label><br>
                                        <input type="text" id="cnpj_suppliers" name="cnpj_suppliers" class="form-control cnpj-mask" required placeholder="Digite o CNPJ"><br>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success"> Enviar Dados </button>
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
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/b-2.3.6/b-html5-2.3.6/b-print-2.3.6/r-2.4.1/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tableFornecedores').DataTable({
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
