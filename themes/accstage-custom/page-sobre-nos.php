<?php
/**
 * Template Name: Sobre Nós ACCSTAGE
 *
 * @package accstage-custom
 */

get_header();
?>
<section class="acc-page-hero acc-about-hero" aria-labelledby="acc-about-title">
    <div class="acc-wrap">
        <p class="acc-label"><?php esc_html_e('Sobre nós', 'accstage-custom'); ?></p>
        <h1 id="acc-about-title" class="acc-title-xl"><?php esc_html_e('Arquitetos de intenção.', 'accstage-custom'); ?></h1>
        <p class="acc-lead"><?php esc_html_e('Não desenhamos para ocupar espaço. Desenhamos para o definir com permanência, silêncio formal e precisão absoluta.', 'accstage-custom'); ?></p>
    </div>
</section>

<section class="acc-section acc-section--soft acc-about-manifesto">
    <div class="acc-wrap acc-grid-2">
        <div>
            <p class="acc-label"><?php esc_html_e('Manifesto', 'accstage-custom'); ?></p>
            <h2 class="acc-title-lg"><?php esc_html_e('Geometria disciplinada. Matéria com legado.', 'accstage-custom'); ?></h2>
        </div>
        <div class="acc-editorial">
            <p><?php esc_html_e('A ACCSTAGE atua na fronteira entre arquitetura e direção espacial. Cada projeto nasce de uma leitura rigorosa do lugar, da luz e da proporção para alcançar presença inequívoca sem excesso formal.', 'accstage-custom'); ?></p>
            <p><?php esc_html_e('Assumimos cada obra como composição editorial tridimensional: sequência, vazio, ritmo e materialidade em equilíbrio. O objetivo é claro — criar espaços intemporais, capazes de manter relevância estética e técnica durante décadas.', 'accstage-custom'); ?></p>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/about', 'pillars'); ?>

<section class="acc-section acc-about-facts" aria-labelledby="acc-about-facts-title">
    <div class="acc-wrap">
        <h2 id="acc-about-facts-title" class="screen-reader-text"><?php esc_html_e('Dados do estúdio', 'accstage-custom'); ?></h2>
        <ul class="acc-list acc-about-facts__list">
            <li>
                <span class="acc-label"><?php esc_html_e('Empresa', 'accstage-custom'); ?></span>
                <p><?php esc_html_e('ACCSTAGE Lda.', 'accstage-custom'); ?></p>
            </li>
            <li>
                <span class="acc-label"><?php esc_html_e('Head Office', 'accstage-custom'); ?></span>
                <p><?php esc_html_e('R. António Luis Gomes 120, 4430-195 Vila Nova de Gaia', 'accstage-custom'); ?></p>
            </li>
            <li>
                <span class="acc-label"><?php esc_html_e('Contacto', 'accstage-custom'); ?></span>
                <p><?php esc_html_e('+351 255 913 065 · info@accstage.com', 'accstage-custom'); ?></p>
            </li>
        </ul>
    </div>
</section>

<?php get_template_part('template-parts/about', 'team'); ?>

<?php get_footer();
