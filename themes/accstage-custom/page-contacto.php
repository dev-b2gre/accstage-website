<?php
/**
 * Template Name: Contacto ACCSTAGE
 *
 * @package accstage-custom
 */

get_header();
?>
<section class="acc-page-hero acc-contact-hero" aria-labelledby="acc-contact-title">
    <div class="acc-wrap">
        <p class="acc-label"><?php esc_html_e('Contacto', 'accstage-custom'); ?></p>
        <h1 id="acc-contact-title" class="acc-title-xl"><?php esc_html_e('Vamos conversar sobre o seu próximo projeto.', 'accstage-custom'); ?></h1>
        <p class="acc-lead"><?php esc_html_e('Partilhe o contexto e os objetivos. A ACCSTAGE responde com enquadramento técnico, próximos passos e acompanhamento profissional.', 'accstage-custom'); ?></p>
    </div>
</section>

<section class="acc-section acc-contact-main" aria-labelledby="acc-contact-main-title">
    <div class="acc-wrap">
        <h2 id="acc-contact-main-title" class="screen-reader-text"><?php esc_html_e('Informação de contacto e formulário', 'accstage-custom'); ?></h2>
        <div class="acc-contact-layout">
            <aside class="acc-contact-panel" aria-labelledby="acc-contact-panel-title">
                <div class="acc-contact-panel__intro">
                    <p class="acc-label"><?php esc_html_e('Introdução', 'accstage-custom'); ?></p>
                    <h3 id="acc-contact-panel-title" class="acc-title-md"><?php esc_html_e('ACCSTAGE Lda.', 'accstage-custom'); ?></h3>
                    <p><?php esc_html_e('Sede oficial em Vila Nova de Gaia, com atuação em projetos de arquitetura e construção premium em diferentes escalas.', 'accstage-custom'); ?></p>
                </div>

                <div class="acc-contact-panel__block">
                    <p class="acc-label"><?php esc_html_e('Contactos principais', 'accstage-custom'); ?></p>
                    <ul class="acc-list acc-contact-list">
                        <li>
                            <span class="acc-label"><?php esc_html_e('Email', 'accstage-custom'); ?></span>
                            <a href="mailto:info@accstage.com">info@accstage.com</a>
                        </li>
                        <li>
                            <span class="acc-label"><?php esc_html_e('Business Contact', 'accstage-custom'); ?></span>
                            <a href="tel:+351255913065">+351 255 913 065</a>
                        </li>
                        <li>
                            <span class="acc-label"><?php esc_html_e('Empresa', 'accstage-custom'); ?></span>
                            <p><?php esc_html_e('ACCSTAGE Lda.', 'accstage-custom'); ?></p>
                        </li>
                    </ul>
                </div>

                <div class="acc-contact-panel__block acc-contact-location">
                    <p class="acc-label"><?php esc_html_e('Head Office', 'accstage-custom'); ?></p>
                    <p class="acc-contact-location__title"><?php esc_html_e('R. António Luis Gomes 120', 'accstage-custom'); ?></p>
                    <p><?php esc_html_e('4430-195 Vila Nova de Gaia', 'accstage-custom'); ?></p>
                    <p><?php esc_html_e('Portugal', 'accstage-custom'); ?></p>
                    <p class="acc-contact-location__note"><?php esc_html_e('Reuniões presenciais por marcação prévia.', 'accstage-custom'); ?></p>
                </div>
            </aside>

            <div class="acc-contact-form-wrap">
                <p class="acc-label"><?php esc_html_e('Formulário', 'accstage-custom'); ?></p>
                <h3 class="acc-title-md"><?php esc_html_e('Iniciar contacto', 'accstage-custom'); ?></h3>

                <form class="acc-contact-form" method="post" action="#" aria-label="<?php esc_attr_e('Formulário de contacto', 'accstage-custom'); ?>">
                    <div class="acc-grid-2">
                        <p>
                            <label for="acc-nome"><?php esc_html_e('Nome completo', 'accstage-custom'); ?></label>
                            <input id="acc-nome" type="text" name="nome" autocomplete="name" required />
                        </p>
                        <p>
                            <label for="acc-email"><?php esc_html_e('Email profissional', 'accstage-custom'); ?></label>
                            <input id="acc-email" type="email" name="email" autocomplete="email" required />
                        </p>
                    </div>

                    <div class="acc-grid-2">
                        <p>
                            <label for="acc-telefone"><?php esc_html_e('Telefone', 'accstage-custom'); ?></label>
                            <input id="acc-telefone" type="tel" name="telefone" autocomplete="tel" />
                        </p>
                        <p>
                            <label for="acc-tipo"><?php esc_html_e('Tipo de projeto', 'accstage-custom'); ?></label>
                            <input id="acc-tipo" type="text" name="tipo_projeto" placeholder="<?php esc_attr_e('Residencial, comercial, cultural...', 'accstage-custom'); ?>" />
                        </p>
                    </div>

                    <p>
                        <label for="acc-mensagem"><?php esc_html_e('Detalhes do pedido', 'accstage-custom'); ?></label>
                        <textarea id="acc-mensagem" name="mensagem" required></textarea>
                    </p>

                    <button class="acc-button acc-button--solid" type="submit"><?php esc_html_e('Enviar pedido', 'accstage-custom'); ?></button>
                </form>
            </div>
        </div>

        <section class="acc-contact-map" aria-labelledby="acc-contact-map-title">
            <div class="acc-contact-map__header">
                <p class="acc-label"><?php esc_html_e('Localização', 'accstage-custom'); ?></p>
                <h3 id="acc-contact-map-title" class="acc-title-md"><?php esc_html_e('Visitar a sede da ACCSTAGE', 'accstage-custom'); ?></h3>
                <p><?php esc_html_e('R. António Luis Gomes 120, 4430-195 Vila Nova de Gaia', 'accstage-custom'); ?></p>
            </div>
            <div class="acc-contact-map__frame">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d275.7514817144818!2d-8.607553886053505!3d41.121118020952885!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2464d2e16197bd%3A0x16c64e6f0fa301c9!2sR.%20Ant%C3%B3nio%20Luis%20Gomes%20120%2C%204430-195%20Vila%20Nova%20de%20Gaia!5e1!3m2!1spt-PT!2spt!4v1776434976636!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="<?php esc_attr_e('Mapa da sede da ACCSTAGE em Vila Nova de Gaia', 'accstage-custom'); ?>"></iframe>
            </div>
        </section>
    </div>
</section>
<?php get_footer();
