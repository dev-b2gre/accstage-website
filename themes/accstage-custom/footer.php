<?php
/**
 * Footer do tema.
 *
 * @package accstage-custom
 */
?>
</main>
<footer class="acc-site-footer">
    <div class="acc-wrap">
        <div class="acc-site-footer__top">
            <div class="acc-site-footer__brand">
                <p class="acc-label"><?php esc_html_e('ACCSTAGE Lda.', 'accstage-custom'); ?></p>
                <h2 class="acc-title-md"><?php esc_html_e('Arquitetura e construção premium com direção precisa, materialidade rigorosa e visão de longo prazo.', 'accstage-custom'); ?></h2>
                <a class="acc-button" href="<?php echo esc_url(home_url('/contacto/')); ?>"><?php esc_html_e('Agendar contacto', 'accstage-custom'); ?></a>
            </div>

            <nav class="acc-site-footer__nav" aria-label="<?php esc_attr_e('Navegação de rodapé', 'accstage-custom'); ?>">
                <p class="acc-label"><?php esc_html_e('Navegação', 'accstage-custom'); ?></p>
                <p><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Início', 'accstage-custom'); ?></a></p>
                <p><a href="<?php echo esc_url(home_url('/projetos/')); ?>"><?php esc_html_e('Projetos', 'accstage-custom'); ?></a></p>
                <p><a href="<?php echo esc_url(home_url('/sobre-nos/')); ?>"><?php esc_html_e('Sobre nós', 'accstage-custom'); ?></a></p>
                <p><a href="<?php echo esc_url(home_url('/contacto/')); ?>"><?php esc_html_e('Contacto', 'accstage-custom'); ?></a></p>
            </nav>
        </div>

        <div class="acc-site-footer__meta">
            <div class="acc-site-footer__contact">
                <p class="acc-label"><?php esc_html_e('Head Office', 'accstage-custom'); ?></p>
                <p><?php esc_html_e('Rua do Professor, 221 Ac, Nossa Senhora da Piedade', 'accstage-custom'); ?></p>
                <p><?php esc_html_e('4880-203 Mondim de Basto', 'accstage-custom'); ?></p>
                <p><?php esc_html_e('Vila Real, Portugal', 'accstage-custom'); ?></p>
                <p><a href="tel:+351255913065"><?php esc_html_e('Business Contact: +351 255 913 065', 'accstage-custom'); ?></a></p>
                <p><a href="mailto:info@accstage.com">info@accstage.com</a></p>
            </div>

            <div class="acc-site-footer__social">
                <p class="acc-label"><?php esc_html_e('Redes sociais', 'accstage-custom'); ?></p>
                <ul class="acc-site-footer__social-list">
                    <?php foreach (accstage_custom_social_links() as $social) : ?>
                        <?php if (! empty($social['url'])) : ?>
                            <li><a href="<?php echo esc_url($social['url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($social['label']); ?></a></li>
                        <?php else : ?>
                            <li><span><?php echo esc_html($social['label']); ?></span></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <small>© <?php echo esc_html(date_i18n('Y')); ?> ACCSTAGE Lda. <?php esc_html_e('Todos os direitos reservados.', 'accstage-custom'); ?></small>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
