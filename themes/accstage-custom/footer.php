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
        <div>
            <p class="acc-label"><?php esc_html_e('ACCSTAGE', 'accstage-custom'); ?></p>
            <h2 class="acc-title-md"><?php esc_html_e('Arquitetura editorial, silenciosa e intemporal.', 'accstage-custom'); ?></h2>
        </div>
        <div class="acc-grid-2">
            <div>
                <p><a href="mailto:hello@accstage.com">hello@accstage.com</a></p>
                <p><a href="tel:+351000000000">+351 000 000 000</a></p>
            </div>
            <div>
                <p><a href="<?php echo esc_url(home_url('/projetos/')); ?>"><?php esc_html_e('Arquivo de projetos', 'accstage-custom'); ?></a></p>
                <p><a href="<?php echo esc_url(home_url('/sobre-nos/')); ?>"><?php esc_html_e('Manifesto do estúdio', 'accstage-custom'); ?></a></p>
            </div>
        </div>
        <small>© <?php echo esc_html(date_i18n('Y')); ?> ACCSTAGE. <?php esc_html_e('Todos os direitos reservados.', 'accstage-custom'); ?></small>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
