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

$hero_image = isset($project['hero_image']) ? trim((string) $project['hero_image']) : '';
$gallery_images = isset($project['gallery_images']) && is_array($project['gallery_images'])
    ? array_values(array_filter($project['gallery_images'], static fn($image) => trim((string) $image) !== ''))
    : [];
$project_description = isset($project['description']) && is_array($project['description']) ? $project['description'] : [];
?>
<section class="acc-project-detail-hero<?php echo $hero_image !== '' ? ' has-image' : ' is-placeholder'; ?>"<?php echo $hero_image !== '' ? ' style="background-image: linear-gradient(to top, rgba(0, 0, 0, 0.86), rgba(0, 0, 0, 0.22)), url(\'' . esc_url($hero_image) . '\');"' : ''; ?>>
    <div class="acc-wrap acc-project-detail-hero__inner">
        <p class="acc-label"><?php esc_html_e('Projeto', 'accstage-custom'); ?></p>
        <h1 class="acc-title-xl"><?php echo esc_html($project['title']); ?></h1>
        <?php if ($hero_image === '') : ?>
            <p class="acc-lead"><?php esc_html_e('Placeholder pronto para imagem principal.', 'accstage-custom'); ?></p>
        <?php endif; ?>
    </div>
</section>

<section class="acc-project-detail-meta">
    <div class="acc-wrap">
        <ul class="acc-project-detail-meta__list">
            <?php if (! empty($project['location'])) : ?>
                <li><span class="acc-label"><?php esc_html_e('Localização', 'accstage-custom'); ?></span><strong><?php echo esc_html($project['location']); ?></strong></li>
            <?php endif; ?>
            <?php if (! empty($project['year'])) : ?>
                <li><span class="acc-label"><?php esc_html_e('Ano', 'accstage-custom'); ?></span><strong><?php echo esc_html($project['year']); ?></strong></li>
            <?php endif; ?>
        </ul>
    </div>
</section>

<section class="acc-section acc-project-detail-story">
    <div class="acc-wrap acc-editorial">
        <?php foreach ($project_description as $paragraph) : ?>
            <p><?php echo esc_html($paragraph); ?></p>
        <?php endforeach; ?>
    </div>
</section>

<section class="acc-section acc-project-detail-gallery">
    <div class="acc-wrap acc-project-detail-gallery__grid">
        <?php if (! empty($gallery_images)) : ?>
            <?php foreach ($gallery_images as $index => $gallery_image) : ?>
                <?php
                $classes = 'acc-project-detail-gallery__item';
                $layout_position = $index % 3;

                if ($layout_position === 0) {
                    $classes .= ' acc-project-detail-gallery__item--wide';
                } elseif ($layout_position === 1) {
                    $classes .= ' acc-project-detail-gallery__item--tall';
                } else {
                    $classes .= ' acc-project-detail-gallery__item--panorama';
                }
                ?>
                <figure class="<?php echo esc_attr($classes); ?>">
                    <img src="<?php echo esc_url($gallery_image); ?>" alt="<?php echo esc_attr($project['title']); ?>" loading="lazy"/>
                </figure>
            <?php endforeach; ?>
        <?php else : ?>
            <figure class="acc-project-detail-gallery__item acc-project-detail-gallery__item--wide">
                <span class="acc-project-placeholder" aria-hidden="true">
                    <span class="acc-project-placeholder__label"><?php esc_html_e('Galeria em atualização', 'accstage-custom'); ?></span>
                    <span class="acc-project-placeholder__title"><?php echo esc_html($project['title']); ?></span>
                </span>
            </figure>
        <?php endif; ?>
    </div>
</section>

<section class="acc-section acc-project-detail-cta">
    <div class="acc-wrap">
        <p class="acc-label"><?php esc_html_e('Contacto', 'accstage-custom'); ?></p>
        <h2 class="acc-title-lg"><?php echo esc_html($project['cta_title']); ?></h2>
        <a class="acc-button" href="<?php echo esc_url(home_url('/contacto/')); ?>"><?php esc_html_e('Falar com a equipa', 'accstage-custom'); ?></a>
    </div>
</section>
