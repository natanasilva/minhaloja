<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Natan Aguiar - NataNet - Tecnologia">
    <meta name="generator" content="">
    <title>Minha Loja - Contato</title>

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
    <main>
        <div class="card card-body">
            <form action="#" method="post" class="row g-3">
                <div class="col-md-5">
                    <label for="nomeContato" class="form-label">Seu nome</label>
                    <input type="text" name="nomeContato" class="form-control" id="nomeContato" required>
                </div>
                <div class="col-md-5">
                    <label for="emailContato" class="form-label">Seu Email</label>
                    <input type="email" name="emailContato" class="form-control" id="emailContato" required>
                </div>
                <div class="col-md-2">
                    <label for="telContato" class="form-label">Seu telefone</label>
                    <input type="text" min="1" name="telContato" class="form-control" id="telContato" required>
                </div>
                <div class="col-md-12">
                    <label for="mensagemContato" class="form-label">Sua Mensagem</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Escreva a sua mensagem aqui!" id="mensagemContato" style="height: 100px"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                </div>
            </form>

        </div>
    </main>
    <?php include_once 'pages/footer.php'; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>