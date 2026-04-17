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
                    <p><?php esc_html_e('Sede oficial em Mondim de Basto, com atuação em projetos de arquitetura e construção premium em diferentes escalas.', 'accstage-custom'); ?></p>
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
                    <p class="acc-contact-location__title"><?php esc_html_e('Rua do Professor, 221 Ac, Nossa Senhora da Piedade', 'accstage-custom'); ?></p>
                    <p><?php esc_html_e('4880-203 Mondim de Basto', 'accstage-custom'); ?></p>
                    <p><?php esc_html_e('Vila Real, Portugal', 'accstage-custom'); ?></p>
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
    </div>
</section>
<?php get_footer();
