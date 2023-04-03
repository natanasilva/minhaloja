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
                    <?php if (!isset($_SESSION['usuarioNome'])) : ?>
                        <a class="me-3 py-2 text-dark text-decoration-none" href="logar.php">Minha Conta</a>
                    <?php else : ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Minha Conta
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Meu Perfil</a></li>
                                    <li><a class="dropdown-item" href="#">Meu Pedidos</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="sair.php">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php endif ?>

                </nav>
            </div>
        </header>
