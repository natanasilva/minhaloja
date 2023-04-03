<?php
session_start();
if(!isset($_SESSION['usuarioNome']) || $_SESSION['usuarioNiveisAcessoId'] != 2 ){
    session_destroy();
    header( "Location: index.php");
    exit;
}
# Chamando a conexão com o banco de dados
require_once 'pages/connect.php';
require_once 'pages/functions.php';

$products = select("products", null, null, " ORDER BY id_product LIMIT 12");

function limita_caracteres($texto, $limite, $quebra = true)
{
    $tamanho = strlen($texto);
    if ($tamanho <= $limite) { //Verifica se o tamanho do texto é menor ou igual ao limite
        $novo_texto = $texto;
    } else { // Se o tamanho do texto for maior que o limite
        if ($quebra == true) { // Verifica a opção de quebrar o texto
            $novo_texto = trim(substr($texto, 0, $limite)) . "...";
        } else { // Se não, corta $texto na última palavra antes do limite
            $ultimo_espaco = strrpos(substr($texto, 0, $limite), " "); // Localiza o útlimo espaço antes de $limite
            $novo_texto = trim(substr($texto, 0, $ultimo_espaco)) . "..."; // Corta o $texto até a posição localizada
        }
    }
    return $novo_texto; // Retorna o valor formatado
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
    <title>Minha Loja</title>

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

</head>

<body>
    <?php include_once 'pages/nav.php'; ?>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <p class="fs-5 text-muted">Bem vindo(a) a nossa loja <strong><?php echo $_SESSION['usuarioNome']; ?></strong>. Temos os melhores produtos e os melhores preços pra você!!!</p>
    </div>
    <main>
        <?php if (empty($products)) : ?>
            <div class="alert alert-danger alert-dismissible text-center" role="alert"> Não temos produtos cadastrados na loja neste momento</div>
        <?php else : ?>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <?php foreach ($products as $product) : ?>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal"><?= limita_caracteres($product['product_name'], 25);  ?></h4>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">Preço<br>R$ <strong><?= $product['product_price']; ?></strong></h1>
                                    <h4>Estoque - <strong><?= $product['product_stock']; ?></strong></h4>
                                </div>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Comprar Esse Produto</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif ?>
    </main>
    <?php include_once 'pages/footer.php'; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>