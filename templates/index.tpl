<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <title>Noticias</title>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=TU_ID_DE_GA4"></script>
    <script>
        {literal}
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'TU_ID_DE_GA4');
        {/literal}
    </script>
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="container">
                <div class="logo">
                    <img src="images/logo/logo_mega.png" alt="Logo">
                </div>
                <nav>
                    <ul class="nav-links">
                        <li><a href="#">Portada</a></li>
                        <li><a href="#">Teleseries</a></li>
                        <li><a href="#">Programas</a></li>
                        <li><a href="#">Capítulos</a></li>
                        <li><a href="#">Programación</a></li>
                        <li><a href="#">Mega te ayuda</a></li>
                        <li><a href="#">Entretenimiento</a></li>
                        <li><a href="#">Mega GO</a></li>
                        <li><a href="#">Meganoticias</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="container">
            <div class="articles">
                {foreach $articles as $article}
                    <div class="card__product" data-modal="modal-{$article.id}">
                        <img src="{$article.image_url}" alt="{$article.titulo}">
                        <div class="card__product-title">
                            <h3>{$article.titulo}</h3>
                        </div>
                    </div>
                {/foreach}
            </div>
        </section>
        <section class="modals">
            {foreach $articles as $article}
                <div class="modal modal-{$article.id}">
                    <div class="modal__card">
                        <button class="modal__close" data-modal="{$article.id}">&times;</button>
                        <div class="modal__image" style="background-image: url('{$article.image_big_url}');">
                            <div class="modal__header">
                                <h1>{$article.titulo}</h1>
                                <p>{$article.sub_content}</p>
                            </div>
                        </div>
                        <div class="modal__content">
                            <h2>{$article.titulo}</h2>
                            <p>{$article.contenido}</p>
                            <p><em>Por {$article.autor} el {$article.fecha}</em></p>
                            {if $article.video_url}
                                <iframe width="560" height="315" src="{$article.video_url}" frameborder="0" allowfullscreen></iframe>
                            {/if}
                        </div>
                    </div>
                </div>
            {/foreach}
        </section>
    </main>
    <script src="js/main.js"></script>
</body>
</html>
