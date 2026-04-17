<?php
/**
 * Template Name: Projetos ACCSTAGE
 *
 * @package accstage-custom
 */

get_header();
?>
<section class="acc-page-hero">
    <div class="acc-wrap">
        <p class="acc-label"><?php esc_html_e('Arquivo', 'accstage-custom'); ?></p>
        <h1 class="acc-title-lg"><?php esc_html_e('Projetos com identidade monolítica.', 'accstage-custom'); ?></h1>
    </div>
</section>

<section class="acc-section">
    <div class="acc-wrap">
        <?php get_template_part('template-parts/project', 'grid'); ?>
    </div>
</section>

<?php get_footer();
