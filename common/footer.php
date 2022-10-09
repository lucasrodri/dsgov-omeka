        </article>

        <footer class="br-footer" id="footer">
            <div class="container-lg">
                <div class="logo text-left"><img src="<?php echo img("govbr-negativa.png", "img") ?>" alt="Logo do Governo" /></div>
                <?php echo get_theme_option('footer_text'); ?>
                <div class="d-none d-sm-block">
                    <div class="row align-items-end justify-content-between py-5">
                        <div class="col social-network">
                            <p class="text-up-01 text-extra-bold text-uppercase">Redes Sociais</p>
                            <a class="mr-3 text-white" href="<?php echo get_theme_option('twitter_text'); ?>"></a><i class="fab fa-twitter"></i></a>
                            <a class="mr-3 text-white" href="<?php echo get_theme_option('youtube_text'); ?>"></a><i class="fab fa-youtube"></i></a>
                            <a class="mr-3 text-white" href="<?php echo get_theme_option('facebook_text'); ?>"></a><i class="fab fa-facebook"></i></a>
                            <a class="mr-3 text-white" href="<?php echo get_theme_option('flickr_text'); ?>"></a><i class="fab fa-flickr"></i></a>
                            <a class="mr-3 text-white" href="<?php echo get_theme_option('instagram_text'); ?>"></a><i class="fab fa-instagram"></i></a>
                            <a class="mr-3 text-white" href="<?php echo get_theme_option('soundcloud_text'); ?>"></a><i class="fab fa-soundcloud"></i></a>
                        </div>
                        <div class="col assigns text-right">
                            <a href="http://www.acessoainformacao.gov.br/"><img class="ml-4" src="<?php echo img("logo-acesso-footer.svg", "img") ?>" alt="Acesso a Informação" /></a>
                            <!--<a href="http://www.brasil.gov.br/"><img class="ml-4" src="" alt="Logo do Governo" /></a>-->
                        </div>
                    </div>
                </div>
            </div><span class="br-divider my-3"></span>
            <div class="container-lg">
                <div class="info">
                    <div class="text-down-01 text-medium pb-3">Todo o conteúdo deste site está publicado sob a&nbsp;<strong><a href="https://creativecommons.org/licenses/by-nd/3.0/deed.pt_BR">licença Creative Commons Atribuição-SemDerivações 3.0 Não Adaptada</a>.</strong></div>
                </div>
            </div>
            <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>
        </footer>

        </div><!-- end wrap -->
        <script src="/themes/ibictgovbr/dsgov/dsgov-init.js?v=3.0.3" id="dsgov-js-js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js?v=3.0.3" type="text/javascript"></script>
        <script src="/themes/ibictgovbr/js/govbr_footer.js?v=3.0.3" id="dsgov-js-js" type="text/javascript"></script>
        </body>

        </html>