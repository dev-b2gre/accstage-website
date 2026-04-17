<?php
/**
 * Template Name: Projetos ACCSTAGE
 *
 * @package accstage-custom
 */

get_header();

set_query_var('acc_project_grid_context', 'portfolio');
?>
<section class="acc-page-hero acc-projects-hero">
    <div class="acc-wrap">
        <div class="acc-projects-hero__head">
            <p class="acc-label"><?php esc_html_e('Arquivo selecionado', 'accstage-custom'); ?></p>
            <h1 class="acc-title-xl"><?php esc_html_e('Projetos', 'accstage-custom'); ?></h1>
        </div>

        <div class="acc-projects-hero__meta">
            <p><?php esc_html_e('Uma seleção editorial de obras residenciais, culturais e comerciais desenhadas para permanecer.', 'accstage-custom'); ?></p>
            <ul class="acc-projects-filter" aria-label="<?php esc_attr_e('Categorias de projeto', 'accstage-custom'); ?>">
                <li><a href="#" aria-current="true"><?php esc_html_e('Todos', 'accstage-custom'); ?></a></li>
                <li><a href="#"><?php esc_html_e('Residencial', 'accstage-custom'); ?></a></li>
                <li><a href="#"><?php esc_html_e('Comercial', 'accstage-custom'); ?></a></li>
                <li><a href="#"><?php esc_html_e('Cultural', 'accstage-custom'); ?></a></li>
            </ul>
        </div>
    </div>
</section>

<section class="acc-section">
    <div class="acc-wrap">
        <?php get_template_part('template-parts/project', 'grid'); ?>
    </div>
</section>

<section class="acc-section acc-projects-note">
    <div class="acc-wrap">
        <blockquote>
            <?php esc_html_e('“A arquitetura é o jogo sábio, correto e magnífico dos volumes sob a luz.”', 'accstage-custom'); ?>
        </blockquote>
    </div>
</section>

<?php
set_query_var('acc_project_grid_context', null);
get_footer();
