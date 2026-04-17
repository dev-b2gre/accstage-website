<?php
/**
 * Template part para detalhe de projeto.
 *
 * @package accstage-custom
 */

$project_slug = get_query_var('acc_project_slug');
$project = $project_slug ? accstage_custom_get_project_by_slug((string) $project_slug) : null;

if (! $project) {
    return;
}

$gallery = ! empty($project['gallery']) ? $project['gallery'] : [$project['image'], $project['image'], $project['image']];
?>
<section class="acc-project-detail-hero" style="background-image: linear-gradient(to top, rgba(0, 0, 0, 0.86), rgba(0, 0, 0, 0.22)), url('<?php echo esc_url($project['image']); ?>');">
    <div class="acc-wrap acc-project-detail-hero__inner">
        <p class="acc-label"><?php esc_html_e('Projeto selecionado', 'accstage-custom'); ?></p>
        <h1 class="acc-title-xl"><?php echo esc_html($project['title']); ?></h1>
        <p class="acc-lead"><?php echo esc_html($project['hero_lead']); ?></p>
    </div>
</section>

<section class="acc-project-detail-meta">
    <div class="acc-wrap">
        <ul class="acc-project-detail-meta__list">
            <li><span class="acc-label"><?php esc_html_e('Localização', 'accstage-custom'); ?></span><strong><?php echo esc_html($project['location']); ?></strong></li>
            <li><span class="acc-label"><?php esc_html_e('Ano', 'accstage-custom'); ?></span><strong><?php echo esc_html($project['year']); ?></strong></li>
            <li><span class="acc-label"><?php esc_html_e('Área', 'accstage-custom'); ?></span><strong><?php echo esc_html($project['area']); ?></strong></li>
            <li><span class="acc-label"><?php esc_html_e('Estado', 'accstage-custom'); ?></span><strong><?php echo esc_html($project['status']); ?></strong></li>
        </ul>
    </div>
</section>

<section class="acc-section acc-project-detail-story">
    <div class="acc-wrap acc-project-detail-story__grid">
        <div>
            <h2 class="acc-title-md"><?php echo esc_html($project['concept']); ?></h2>
        </div>
        <div class="acc-editorial">
            <p><?php echo esc_html($project['description']); ?></p>
        </div>
    </div>
</section>

<section class="acc-section acc-project-detail-gallery">
    <div class="acc-wrap acc-project-detail-gallery__grid">
        <figure class="acc-project-detail-gallery__item acc-project-detail-gallery__item--wide">
            <img src="<?php echo esc_url($gallery[0]); ?>" alt="<?php echo esc_attr($project['title']); ?>" loading="lazy"/>
        </figure>
        <figure class="acc-project-detail-gallery__item acc-project-detail-gallery__item--tall">
            <img src="<?php echo esc_url($gallery[1]); ?>" alt="<?php echo esc_attr($project['title']); ?>" loading="lazy"/>
        </figure>
        <figure class="acc-project-detail-gallery__item acc-project-detail-gallery__item--panorama">
            <img src="<?php echo esc_url($gallery[2]); ?>" alt="<?php echo esc_attr($project['title']); ?>" loading="lazy"/>
        </figure>
    </div>
</section>

<section class="acc-section acc-project-detail-facts">
    <div class="acc-wrap acc-project-detail-facts__grid">
        <div>
            <p class="acc-label"><?php esc_html_e('Detalhes do projeto', 'accstage-custom'); ?></p>
            <h2 class="acc-title-lg"><?php esc_html_e('Rigor técnico com expressão mínima.', 'accstage-custom'); ?></h2>
        </div>
        <ul class="acc-list">
            <li><strong><?php esc_html_e('Programa', 'accstage-custom'); ?></strong><p><?php echo esc_html($project['type']); ?></p></li>
            <li><strong><?php esc_html_e('Abordagem', 'accstage-custom'); ?></strong><p><?php esc_html_e('Composição monolítica, luz controlada e materialidade contínua.', 'accstage-custom'); ?></p></li>
            <li><strong><?php esc_html_e('Entrega', 'accstage-custom'); ?></strong><p><?php esc_html_e('Coordenação total entre conceito, detalhe e obra.', 'accstage-custom'); ?></p></li>
        </ul>
    </div>
</section>

<section class="acc-section acc-project-detail-cta">
    <div class="acc-wrap">
        <p class="acc-label"><?php esc_html_e('Próximo passo', 'accstage-custom'); ?></p>
        <h2 class="acc-title-lg"><?php echo esc_html($project['cta_title']); ?></h2>
        <a class="acc-button acc-button--solid" href="<?php echo esc_url(home_url('/contacto/')); ?>"><?php esc_html_e('Falar com a equipa', 'accstage-custom'); ?></a>
    </div>
</section>
