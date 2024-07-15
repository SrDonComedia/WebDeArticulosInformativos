<?php
/* Smarty version 5.3.1, created on 2024-07-15 06:45:35
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_6694a96f1a0d08_26520432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d78678d146c1f470114cffe7fb36a6c5703aa9c' => 
    array (
      0 => 'index.tpl',
      1 => 1721018697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6694a96f1a0d08_26520432 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\mi_sitio_noticias\\templates';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <title>Noticias</title>
    <!-- Google Analytics -->
    <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=TU_ID_DE_GA4"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'TU_ID_DE_GA4');
        
    <?php echo '</script'; ?>
>
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
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('articles'), 'article');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach0DoElse = false;
?>
                    <div class="card__product" data-modal="modal-<?php echo $_smarty_tpl->getValue('article')['id'];?>
">
                        <img src="<?php echo $_smarty_tpl->getValue('article')['image_url'];?>
" alt="<?php echo $_smarty_tpl->getValue('article')['titulo'];?>
">
                        <div class="card__product-title">
                            <h3><?php echo $_smarty_tpl->getValue('article')['titulo'];?>
</h3>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        </section>
        <section class="modals">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('articles'), 'article');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach1DoElse = false;
?>
                <div class="modal modal-<?php echo $_smarty_tpl->getValue('article')['id'];?>
">
                    <div class="modal__card">
                        <button class="modal__close" data-modal="<?php echo $_smarty_tpl->getValue('article')['id'];?>
">&times;</button>
                        <div class="modal__image" style="background-image: url('<?php echo $_smarty_tpl->getValue('article')['image_big_url'];?>
');">
                            <div class="modal__header">
                                <h1><?php echo $_smarty_tpl->getValue('article')['titulo'];?>
</h1>
                                <p><?php echo $_smarty_tpl->getValue('article')['sub_content'];?>
</p>
                            </div>
                        </div>
                        <div class="modal__content">
                            <h2><?php echo $_smarty_tpl->getValue('article')['titulo'];?>
</h2>
                            <p><?php echo $_smarty_tpl->getValue('article')['contenido'];?>
</p>
                            <p><em>Por <?php echo $_smarty_tpl->getValue('article')['autor'];?>
 el <?php echo $_smarty_tpl->getValue('article')['fecha'];?>
</em></p>
                            <?php if ($_smarty_tpl->getValue('article')['video_url']) {?>
                                <iframe width="560" height="315" src="<?php echo $_smarty_tpl->getValue('article')['video_url'];?>
" frameborder="0" allowfullscreen></iframe>
                            <?php }?>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </section>
    </main>
    <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
