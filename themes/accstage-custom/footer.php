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
                <p class="acc-label"><?php echo esc_html(accstage_translate('footer.brand.name', 'ACCSTAGE Lda.')); ?></p>
                <h2 class="acc-title-md"><?php echo esc_html(accstage_translate('footer.brand.description', 'Arquitetura e construção premium com direção precisa, materialidade rigorosa e visão de longo prazo.')); ?></h2>
                <a class="acc-button" href="<?php echo esc_url(accstage_i18n_url('/contacto/')); ?>"><?php echo esc_html(accstage_translate('footer.brand.cta', 'Agendar contacto')); ?></a>
            </div>

            <nav class="acc-site-footer__nav" aria-label="<?php echo esc_attr(accstage_translate('footer.nav.aria_label', 'Navegação de rodapé')); ?>">
                <p class="acc-label"><?php echo esc_html(accstage_translate('footer.nav.title', 'Navegação')); ?></p>
                <p><a href="<?php echo esc_url(accstage_i18n_url('/')); ?>"><?php echo esc_html(accstage_translate('footer.nav.home', 'Início')); ?></a></p>
                <p><a href="<?php echo esc_url(accstage_i18n_url('/projetos/')); ?>"><?php echo esc_html(accstage_translate('footer.nav.projects', 'Projetos')); ?></a></p>
                <p><a href="<?php echo esc_url(accstage_i18n_url('/sobre-nos/')); ?>"><?php echo esc_html(accstage_translate('footer.nav.about', 'Sobre nós')); ?></a></p>
                <p><a href="<?php echo esc_url(accstage_i18n_url('/contacto/')); ?>"><?php echo esc_html(accstage_translate('footer.nav.contact', 'Contacto')); ?></a></p>
            </nav>
        </div>

        <div class="acc-site-footer__meta">
            <div class="acc-site-footer__contact">
                <p class="acc-label"><?php echo esc_html(accstage_translate('footer.contact.office_label', 'Head Office')); ?></p>
                <p><?php echo esc_html(accstage_translate('footer.contact.address_line_1', 'R. António Luis Gomes 120')); ?></p>
                <p><?php echo esc_html(accstage_translate('footer.contact.address_line_2', '4430-195 Vila Nova de Gaia')); ?></p>
                <p><?php echo esc_html(accstage_translate('footer.contact.country', 'Portugal')); ?></p>
                <p><a href="tel:+351255913065"><?php echo esc_html(accstage_translate('footer.contact.phone', 'Business Contact: +351 255 913 065')); ?></a></p>
                <p><a href="mailto:info@accstage.com">info@accstage.com</a></p>
            </div>

            <div class="acc-site-footer__social">
                <p class="acc-label"><?php echo esc_html(accstage_translate('footer.social.title', 'Redes sociais')); ?></p>
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

        <small>© <?php echo esc_html(date_i18n('Y')); ?> ACCSTAGE Lda. <?php echo esc_html(accstage_translate('footer.rights', 'Todos os direitos reservados.')); ?></small>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
