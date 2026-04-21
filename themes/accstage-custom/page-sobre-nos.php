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
        <p class="acc-label"><?php echo esc_html(accstage_translate('about.hero.label', 'Sobre nós')); ?></p>
        <h1 id="acc-about-title" class="acc-title-xl"><?php echo esc_html(accstage_translate('about.hero.title', 'Arquitetos de intenção.')); ?></h1>
        <p class="acc-lead"><?php echo esc_html(accstage_translate('about.hero.lead', 'Não desenhamos para ocupar espaço. Desenhamos para o definir com permanência, silêncio formal e precisão absoluta.')); ?></p>
    </div>
</section>

<section class="acc-section acc-section--soft acc-about-manifesto">
    <div class="acc-wrap acc-grid-2">
        <div>
            <p class="acc-label"><?php echo esc_html(accstage_translate('about.manifesto.label', 'Manifesto')); ?></p>
            <h2 class="acc-title-lg"><?php echo esc_html(accstage_translate('about.manifesto.title', 'Geometria disciplinada. Matéria com legado.')); ?></h2>
        </div>
        <div class="acc-editorial">
            <p><?php echo esc_html(accstage_translate('about.manifesto.body_1', 'A ACCSTAGE atua na fronteira entre arquitetura e direção espacial. Cada projeto nasce de uma leitura rigorosa do lugar, da luz e da proporção para alcançar presença inequívoca sem excesso formal.')); ?></p>
            <p><?php echo esc_html(accstage_translate('about.manifesto.body_2', 'Assumimos cada obra como composição editorial tridimensional: sequência, vazio, ritmo e materialidade em equilíbrio. O objetivo é claro — criar espaços intemporais, capazes de manter relevância estética e técnica durante décadas.')); ?></p>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/about', 'pillars'); ?>

<section class="acc-section acc-about-facts" aria-labelledby="acc-about-facts-title">
    <div class="acc-wrap">
        <h2 id="acc-about-facts-title" class="screen-reader-text"><?php echo esc_html(accstage_translate('about.facts.sr_title', 'Dados do estúdio')); ?></h2>
        <ul class="acc-list acc-about-facts__list">
            <li>
                <span class="acc-label"><?php echo esc_html(accstage_translate('about.facts.company_label', 'Empresa')); ?></span>
                <p><?php echo esc_html(accstage_translate('about.facts.company_value', 'ACCSTAGE Lda.')); ?></p>
            </li>
            <li>
                <span class="acc-label"><?php echo esc_html(accstage_translate('about.facts.office_label', 'Head Office')); ?></span>
                <p><?php echo esc_html(accstage_translate('about.facts.office_value', 'R. António Luis Gomes 120, 4430-195 Vila Nova de Gaia')); ?></p>
            </li>
            <li>
                <span class="acc-label"><?php echo esc_html(accstage_translate('about.facts.contact_label', 'Contacto')); ?></span>
                <p><?php echo esc_html(accstage_translate('about.facts.contact_value', '+351 255 913 065 · info@accstage.com')); ?></p>
            </li>
        </ul>
    </div>
</section>

<?php get_footer();
