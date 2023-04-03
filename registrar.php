<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Natan Aguiar - NataNet - Tecnologia">
    <meta name="generator" content="">
    <title>Minha Loja - Ciar Conta</title>
    <link rel="canonical" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Meus Icones -->
    <link rel="apple-touch-icon" href="./assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="./assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="./assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="./assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="./assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="./assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


    <!-- js para as mascaras. -->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="./assets/js/masks.js"></script>

</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>

    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
                    <img class="me-2" src="./assets/img/logo.png" alt="" width="40" height="32">
                    <title>Minha Loja</title>
                    <span class="fs-4">Minha Loja</span>
                </a>
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 text-dark text-decoration-none" href="index.php">Início</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="produtos.php">Produtos</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="fornecedores.php">Fornecedores</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="contato.php">Contate-nos</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="logar.php">Minha Conta</a>
                </nav>
            </div>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Crie sua Conta</h1>
                <p class="fs-5 text-muted">Com um registro você poderá acessar a sua area administrativa.</p>
            </div>
        </header>

        <main>
            <div class="row text-center">

                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body login-card-body">
                                <p class="login-box-msg">Preencha os dados para crias a sua conta.</p>
                                <form action="pages/inserir.php?action=3" method="POST" class="row g-3">
                                    <div class="col-md-6">
                                        <label for="users_name" class="form-label">Seu nome</label>
                                        <input type="text" name="users_name" class="form-control" id="users_name" placeholder="Seu nome completo">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="users_email" class="form-label">Seu Email</label>
                                        <input type="email" name="users_email" class="form-control" id="users_email" placeholder="Seu endereço de email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="users_password" class="form-label">Sua Senha</label>
                                        <input type="password" name="users_password" class="form-control" id="users_password">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="users_cpf" class="form-label">Seu CPF</label>
                                        <input type="text" name="users_cpf" class="form-control cpf-mask" id="users_cpf" placeholder="Seu CPF">
                                    </div>
                                    <div class="col-3">
                                        <label for="users_phone" class="form-label">Seu Telefone</label>
                                        <input type="text" name="users_phone" class="form-control cel-sp-mask" id="users_phone" placeholder="Seu telefone">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="users_city" class="form-label">Cidade</label>
                                        <input type="text" name="users_city" class="form-control" id="users_city" placeholder="Sua cidade / Bairro / Logradouro">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="users_state" class="form-label">Estado</label>
                                        <select id="users_state" name="users_state" class="form-select">
                                            <option selected>Selecione um Estado...</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espírito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                            <option value="EX">Estrangeiro</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="users_cep" class="form-label">CEP</label>
                                        <input type="text" name="users_cep" class="form-control cep-mask" id="users_cep" placeholder="Seu CEP">
                                        <input type="text" name="users_access_levels" class="form-control" value="3" id="users_access_levels" hidden>
                                        
                                    </div>
                                    
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Criar Minha Conta</button>
                                    </div>
                                </form>
                                <p class="mb-0">
                                    <a href="logar.php" class="text-center">Ja tem conta? Fazer Login</a>
                                </p>
                            </div>
                            <!-- /.login-card-body -->





                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include_once 'pages/footer.php'; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>