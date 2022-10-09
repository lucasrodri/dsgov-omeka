<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ($author = option('author')) : ?>
        <meta name="author" content="<?php echo $author; ?>" />
    <?php endif; ?>
    <?php if ($copyright = option('copyright')) : ?>
        <meta name="copyright" content="<?php echo $copyright; ?>" />
    <?php endif; ?>
    <?php if ($description = option('description')) : ?>
        <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view' => $this)); ?>

    <!-- Stylesheets -->
    <?php
    queue_css_file(array('normalize', 'style'));
    queue_css_url('https://fonts.googleapis.com/css?family=Hind|Caudex:400,400i,700,700i');

    #<!-- Fonte Rawline-->
    queue_css_url('https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css');
    #<!-- Fonte Raleway-->
    queue_css_url('https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap');
    #<!-- Design System de Governo-->
    queue_css_file('dsgov.min', 'all', false, 'dsgov');
    #<!-- Fontawesome-->
    queue_css_url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
    #<!-- Estilos do tema -->
    queue_css_file(array('style-govbr', 'contrast'));

    echo head_css();
    ?>

    <!-- JavaScripts -->
    <?php
    #queue_js_file(array('mmenu','bigpicture'), 'js');
    queue_js_file(array('bigpicture', 'govbr'), 'js');
    echo head_js();
    ?>
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
<a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
<div id="wrap">
    <?php fire_plugin_hook('public_body', array('view' => $this)); ?>
    <?php fire_plugin_hook('public_header', array('view' => $this)); ?>
    <div class="template-base">
        <nav class="br-skiplink">
            <a class="br-item" href="#content" accesskey="1">Ir para o conteúdo (1/4) <span class="br-tag text ml-1">1</span></a>
            <a class="br-item" href="#header-navigation" accesskey="2">Ir para o menu (2/4) <span class="br-tag text ml-1">2</span></a>
            <a class="br-item" href="#main-searchbox" accesskey="3">Ir para a busca (3/4) <span class="br-tag text ml-1">3</span></a>
            <a class="br-item" href="#footer" accesskey="4">Ir para o rodapé (4/4) <span class="br-tag text ml-1">4</span></a>
        </nav>
        <header class="br-header mb-4" id="header" data-sticky="data-sticky">
            <div class="container-lg">
                <div class="header-top">
                    <div class="header-logo"><img src="<?php echo img("govbr-logo-large.png", "img") ?>" alt="Logo do Governo"></span>
                        <div class="header-sign"><?php echo get_theme_option('cabinet_text'); ?></div>
                    </div>
                    <div class="header-actions">
                        <div class="header-links dropdown">
                            <button class="br-button circle small" type="button" data-toggle="dropdown" aria-label="Abrir Acesso Rápido"><i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                            </button>
                            <div class="br-list">
                                <div class="header">
                                    <div class="title">Acesso Rápido</div>
                                </div>
                                <a class="br-item br-item-accessiblity" href="https://www.gov.br/pt-br/orgaos-do-governo">Órgãos do Governo</a>
                                <a class="br-item br-item-accessiblity" href="https://www.gov.br/acessoainformacao/pt-br">Acesso à Informação</a>
                                <a class="br-item br-item-accessiblity" href="http://www4.planalto.gov.br/legislacao">Legislação</a>
                                <a class="br-item br-item-accessiblity" href="https://www.gov.br/governodigital/pt-br/acessibilidade-digital">Acessibilidade</a>
                            </div>
                        </div><span class="br-divider vertical mx-half mx-sm-1"></span>
                        <div class="header-functions dropdown">
                            <button class="br-button circle small" type="button" data-toggle="dropdown" aria-label="Abrir Funcionalidades do Sistema"><i class="fas fa-th" aria-hidden="true"></i>
                            </button>
                            <div class="br-list">
                                <div class="header">
                                    <div class="title">Funcionalidades do Sistema</div>
                                </div>


                                <div class="align-items-center br-item">
                                    <button id="increase-font" class="br-button circle small" type="button" accesskey="1"><b>A+</b><span class="text">Aumentar Fonte</span>
                                    </button>
                                </div>
                                <div class="align-items-center br-item">
                                    <button id="decrease-font" class="br-button circle small" type="button" accesskey="2"><b>A-</b><span class="text">Diminuir Fonte</span>
                                    </button>
                                </div>
                                <div class="align-items-center br-item">
                                    <button class="br-button circle small" type="button" accesskey="3" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()"><i class="fas fa-adjust" aria-hidden="true"></i><span class="text">Alto contraste</span>
                                    </button>
                                </div>


                            </div>
                        </div>
                        <div class="header-search-trigger">
                            <button class="br-button circle" type="button" aria-label="Abrir Busca" data-toggle="search" data-target=".header-search"><i class="fas fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="header-login">
                            <div class="header-sign-in">
                                <button class="br-sign-in small" type="button" onclick="myFunctionEntrar()"><i class="fas fa-user" aria-hidden="true"></i><span class="d-sm-inline">Entrar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="header-menu">
                        <div class="header-menu-trigger" id="header-navigation">
                            <button class="br-button small circle" type="button" aria-label="Menu" data-toggle="menu" data-target="#main-navigation" id="navigation"><i class="fas fa-bars" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="header-info">
                            <div class="header-title"><?php echo '<a class="linkTitulo" href="' . html_escape(WEB_ROOT) . '" ' . tag_attributes($props) . '>' . option('site_title') . "</a>\n"; ?></div>
                            <div class="header-subtitle"><?php echo get_theme_option('institution_text'); ?></div>
                        </div>
                    </div>
                    <div class="header-search" id="main-searchbox">
                        <div class="br-input has-icon">
                            <label for="searchbox">Texto da pesquisa</label>
                            <input id="searchbox" type="text" placeholder="Pesquise a publicação" />
                            <button class="br-button circle small" type="button" aria-label="Pesquisar" onclick="myFunctionBusca()"><i class="fas fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                        <button class="br-button circle search-close ml-1" type="button" aria-label="Fechar Busca" data-dismiss="search"><i class="fas fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>

        </header>

        <main id="main">
            <div class="container-lg d-flex">
                <div class="row">
                    <div class="br-menu" id="main-navigation">
                        <div class="menu-container">
                            <div class="menu-panel">
                                <div class="menu-header">
                                    <div class="menu-title"><img src="<?php echo img("govbr-logo-large.png", "img") ?>" alt="Logo do Governo" /></div>
                                    <div class="menu-close">
                                        <button class="br-button circle" type="button" aria-label="Fechar o menu" data-dismiss="menu"><i class="fas fa-times" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <?php echo govbr_menu(); ?>
                                <div class="menu-footer">
                                    <div class="menu-links">
                                        <a href="https://www.gov.br/pt-br/orgaos-do-governo">Órgãos do Governo&nbsp;<i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a>
                                        <a href="http://www4.planalto.gov.br/legislacao">Legislação&nbsp;<i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a>
                                    </div>

                                    <div class="menu-social">
                                        <div class="text-semi-bold mb-1">Redes Sociais</div>
                                        <div class="sharegroup">
                                            <div class="share"><a class="br-button circle" href="<?php echo get_theme_option('twitter_text'); ?>" aria-label="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="share"><a class="br-button circle" href="<?php echo get_theme_option('youtube_text'); ?>" aria-label="Youtube"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="share"><a class="br-button circle" href="<?php echo get_theme_option('facebook_text'); ?>" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="share"><a class="br-button circle" href="<?php echo get_theme_option('flickr_text'); ?>" aria-label="Flicker"><i class="fab fa-flickr" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="share"><a class="br-button circle" href="<?php echo get_theme_option('instagram_text'); ?>" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="share"><a class="br-button circle" href="<?php echo get_theme_option('soundcloud_text'); ?>" aria-label="Soundcloud"><i class="fab fa-soundcloud" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-info">
                                        <div class="text-center text-down-01">Todo o conteúdo deste site está publicado sob a licença <strong>Creative Commons Atribuição-SemDerivações 3.0</strong></div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-scrim" data-dismiss="menu" tabindex="0"></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <article class="container" id="content" role="main">
        
            <?php fire_plugin_hook('public_content_top', array('view' => $this)); ?>