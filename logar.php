<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Natan Aguiar - NataNet - Tecnologia">
    <meta name="generator" content="">
    <title>Minha Loja - Entrar</title>

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

    <link rel="stylesheet" href="./assets/fontawesome-free/css/all.min.css" class="rel">
</head>

<body>

    <body>
        <?php include_once 'pages/nav.php'; ?>
        <main>
            <div class="row text-center">

                <div class="card">
                    <div class="row">
                        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                            <h1 class="display-4 fw-normal">Minha Conta</h1>
                            <p class="fs-5 text-muted">Faça o login para acessar a sua area administrativa.</p>
                        </div>
                        <div class="col-12">
                            <div class="card-body login-card-body">
                                <form action="pages/login.php" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="users_email" class="form-label text-lefth">Seu Email</label>
                                            <input type="email" name="users_email" class="form-control" id="users_email" class="form-control" placeholder="Seu Email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="users_password" class="form-label">Sua Senha</label>
                                            <input type="password" name="users_password" class="form-control" id="users_password" class="form-control" placeholder="Sua Senha">
                                        </div>
                                    </div>
                                    <div class="row"><br></div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="icheck-primary">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">
                                                    Lembra a Senha
                                                </label>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-block">Entrar Agora</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>

                                <!-- <div class="social-auth-links text-center mb-3">
                                    <p>- OU -</p>
                                    <a href="#" class="btn btn-block btn-primary">
                                        <i class="fab fa-facebook mr-2"></i> Entre Usando o Facebook
                                    </a>
                                    <a href="#" class="btn btn-block btn-danger">
                                        <i class="fab fa-google-plus mr-2"></i> Entre Usando o Google
                                    </a>
                                </div> -->
                                <!-- /.social-auth-links -->

                                <p class="mb-1">
                                    <a href="recuperarSenha.php">Recuperar a minha senha</a>
                                </p>
                                <p class="mb-0">
                                    <a href="registrar.php" class="text-center">Registre-se Agora</a>
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