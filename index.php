<?php include 'script.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Duo | O melhor Layout</title>
    <meta name="description" content="O melhor Layout" />
    <meta name="keywords" content="Duo,melhor layout">
    <meta name="author" content="Gabriel da Costa">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#ffffff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="language" content="pt-br">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="revisit-after" content="1 days">
    <meta http-equiv="expires" content="-1">
    <meta name="og:title" content="Duo">
    <meta name="og:description" content="O melhor Layout">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="/assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/assets/css/custom.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
    <!--Header-->
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav restrito-responsivo">
                <div class=" restrita-resp">
                    <li class="nav-item">
                        <img alt="Icone de area restrita" src="/assets/icones/area_restrita.png">
                        <a class="nav-link" href="#">ÁREA RESTRITA</a>
                    </li>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarText">
                <div class="nav-roxo">
                    <ul class="navbar-nav me-auto nav-edit mt-2">
                        <li class="nav-item franqueado">
                            <img alt="Icone de franqueado" src="/assets/icones/editar.png">
                            <a class="nav-link" href="#">SEJA UM FRANQUEADO</a>
                        </li>
                        <li class="nav-item consultor">
                            <img alt="Icone de consultor" src="/assets/icones/seja_consultor.png">
                            <a class="nav-link" href="#">SEJA UM CONSULTOR(A)</a>
                        </li>
                        <li class="nav-item comprar">
                            <a class="nav-link" href="#">QUERO COMPRAR</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-nav me-auto nav-edit">
                    <li class="nav-item restrita-desk">
                        <img alt="Icone de area restrita" src="/assets/icones/area_restrita.png">
                        <a class="nav-link" href="#">ÁREA RESTRITA</a>
                    </li>
                </div>
            </div>
        </nav>
        <!--Texto-->
        <div class="gradiente">
            <div class="centro pad-duvidas">
                <h1>Dúvidas</h1>
                <p>
                    <b>Listamos aqui algumas dúvidas frequentes,</b>
                    caso a sua dúvida esteja aqui você pode entrar em contato conosco
                    <a class="clique" href="#" rel="noopener" target="_top">clicando aqui</a>.
                </p>
            </div>
        </div>
        <!--Texto-->
    </div>
    <!--Fim Header-->

    <!--Accordions-->
    <div class="body-accordion">
        <div class="centro-accordion">
            <?php
            if (count($lista_tarefa->lista_tarefas)) {
                $i = 0;
                foreach ($lista_tarefa->lista_tarefas as $lista_tarefas) {
                    $i++;
            ?>
                    <div class="accordion accordion-flush" id="accordion<?= $lista_tarefas->id ?>">
                        <div class="accordion-item">
                            <div class="accordion-header" id="flush-heading<?= $lista_tarefas->id ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-<?= $lista_tarefas->id ?>" aria-expanded="false" aria-controls="flush-<?= $lista_tarefas->id ?>">
                                    <?= $lista_tarefas->titulo ?> <div class="linha"></div>
                                </button>
                            </div>
                            <div id="flush-<?= $lista_tarefas->id ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= $lista_tarefas->id ?>" data-bs-parent="#accordion<?= $lista_tarefas->id ?>">
                                <div class="accordion-body">
                                    <?= $lista_tarefas->descricao ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php }
            } else { ?>
                <b>Nenhum resultado encontrado</b>
            <?php } ?>
        </div>
    </div>
    <!--Fim Accordions-->

    <div class="footer"></div>

    <script src="/assets/js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>