<?php
/**
 * Template Name: Projetos ACCSTAGE
 *
 * @package accstage-custom
 */

get_header();

$project_slug = accstage_custom_resolve_project_slug_from_request();
$project = $project_slug ? accstage_custom_get_project_by_slug((string) $project_slug) : null;
$projects_total = count(accstage_custom_get_projects_data());

if ($project_slug && $project) {
    set_query_var('acc_project_slug', $project_slug);
    set_query_var('acc_project_detail_data', $project);
    get_template_part('template-parts/project', 'detail');
    set_query_var('acc_project_detail_data', null);
} elseif ($project_slug && ! $project) {
    ?>
    <section class="acc-page-hero acc-projects-hero">
        <div class="acc-wrap">
            <div class="acc-projects-hero__head">
                <p class="acc-label"><?php echo esc_html(accstage_translate('projects.not_found.label', 'Arquivo ACCSTAGE')); ?></p>
                <h1 class="acc-title-xl"><?php echo esc_html(accstage_translate('projects.not_found.title', 'Projeto não encontrado')); ?></h1>
            </div>
            <div class="acc-projects-hero__meta">
                <p><?php echo esc_html(accstage_translate('projects.not_found.body', 'O projeto solicitado não existe no arquivo atual. Consulte a seleção completa de projetos.')); ?></p>
                <a class="acc-button" href="<?php echo esc_url(accstage_i18n_url('/projetos/')); ?>"><?php echo esc_html(accstage_translate('projects.not_found.cta', 'Ver todos os projetos')); ?></a>
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
                <p class="acc-label"><?php echo esc_html(accstage_translate('projects.archive.label', 'Arquivo de projetos')); ?></p>
                <h1 class="acc-title-xl"><?php echo esc_html(accstage_translate('projects.archive.title', 'Projetos')); ?></h1>
            </div>

            <div class="acc-projects-hero__meta">
                <p><?php echo esc_html(sprintf(accstage_translate('projects.archive.lead', 'Arquivo com %d intervenções selecionadas, com linguagem minimalista, rigor técnico e foco na permanência.'), $projects_total)); ?></p>
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
