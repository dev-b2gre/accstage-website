<?php
/**
 * Template Name: Projetos ACCSTAGE
 *
 * @package accstage-custom
 */

get_header();

$project_slug = get_query_var('acc_project_slug');
$project = $project_slug ? accstage_custom_get_project_by_slug((string) $project_slug) : null;

if ($project_slug && $project) {
    get_template_part('template-parts/project', 'detail');
} elseif ($project_slug && ! $project) {
    ?>
    <section class="acc-page-hero acc-projects-hero">
        <div class="acc-wrap">
            <div class="acc-projects-hero__head">
                <p class="acc-label"><?php esc_html_e('Arquivo ACCSTAGE', 'accstage-custom'); ?></p>
                <h1 class="acc-title-xl"><?php esc_html_e('Projeto não encontrado', 'accstage-custom'); ?></h1>
            </div>
            <div class="acc-projects-hero__meta">
                <p><?php esc_html_e('O projeto solicitado não existe no arquivo atual. Consulte a seleção completa de projetos.', 'accstage-custom'); ?></p>
                <a class="acc-button" href="<?php echo esc_url(home_url('/projetos/')); ?>"><?php esc_html_e('Ver todos os projetos', 'accstage-custom'); ?></a>
            </div>
        </div>
    </section>
    <?php
} else {
    set_query_var('acc_project_grid_context', 'portfolio');
    ?>
    <section class="acc-page-hero acc-projects-hero">
        <div class="acc-wrap">
            <div class="acc-projects-hero__head">
                <p class="acc-label"><?php esc_html_e('Arquivo de projetos', 'accstage-custom'); ?></p>
                <h1 class="acc-title-xl"><?php esc_html_e('Projetos', 'accstage-custom'); ?></h1>
            </div>

            <div class="acc-projects-hero__meta">
                <p><?php esc_html_e('Quatro intervenções selecionadas, com linguagem minimalista, rigor técnico e foco na permanência.', 'accstage-custom'); ?></p>
            </div>
        </div>
    </section>

    <section class="acc-section">
        <div class="acc-wrap">
            <?php get_template_part('template-parts/project', 'grid'); ?>
        </div>
    </section>
    <?php

    set_query_var('acc_project_grid_context', null);
}

get_footer();
