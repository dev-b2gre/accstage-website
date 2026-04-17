<?php
/**
 * Template Name: Contacto ACCSTAGE
 *
 * @package accstage-custom
 */

get_header();
?>
<section class="acc-page-hero">
    <div class="acc-wrap">
        <p class="acc-label"><?php esc_html_e('Contacto', 'accstage-custom'); ?></p>
        <h1 class="acc-title-lg"><?php esc_html_e('Vamos iniciar uma comissão.', 'accstage-custom'); ?></h1>
    </div>
</section>
<section class="acc-section">
    <div class="acc-wrap acc-grid-2">
        <div class="acc-editorial">
            <p><?php esc_html_e('Partilhe localização, programa e calendário pretendido. A equipa ACCSTAGE responde com enquadramento estratégico e próximos passos.', 'accstage-custom'); ?></p>
            <p><a href="mailto:hello@accstage.com">hello@accstage.com</a></p>
        </div>
        <form class="acc-contact-form" method="post" action="#">
            <div class="acc-grid-2">
                <p>
                    <label for="acc-nome"><?php esc_html_e('Nome', 'accstage-custom'); ?></label>
                    <input id="acc-nome" type="text" name="nome" />
                </p>
                <p>
                    <label for="acc-email"><?php esc_html_e('Email', 'accstage-custom'); ?></label>
                    <input id="acc-email" type="email" name="email" />
                </p>
            </div>
            <p>
                <label for="acc-mensagem"><?php esc_html_e('Visão do projeto', 'accstage-custom'); ?></label>
                <textarea id="acc-mensagem" name="mensagem"></textarea>
            </p>
            <button class="acc-button acc-button--solid" type="submit"><?php esc_html_e('Enviar pedido', 'accstage-custom'); ?></button>
        </form>
    </div>
</section>
<?php get_footer();
