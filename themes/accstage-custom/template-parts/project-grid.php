<?php
/**
 * Grelha editorial de projetos.
 *
 * @package accstage-custom
 */

$context = get_query_var('acc_project_grid_context', 'default');
$projects = accstage_custom_get_projects_data();
?>
<div class="acc-project-grid<?php echo $context === 'portfolio' ? ' acc-project-grid--portfolio' : ''; ?>">
    <?php foreach ($projects as $project) : ?>
        <?php
        $project_url = accstage_i18n_url('/projetos/' . $project['slug'] . '/');
        $project_image = isset($project['hero_image']) ? trim((string) $project['hero_image']) : '';
        ?>
        <article class="acc-project-card acc-project-card--premium">
            <a class="acc-project-card__media" href="<?php echo esc_url($project_url); ?>" aria-label="<?php echo esc_attr(sprintf(accstage_translate('projects.items.aria_view_detail', 'Ver detalhe de %s'), $project['title'])); ?>">
                <?php if ($project_image !== '') : ?>
                    <img src="<?php echo esc_url($project_image); ?>" alt="<?php echo esc_attr($project['title']); ?>" loading="lazy"/>
                <?php else : ?>
                    <span class="acc-project-placeholder" aria-hidden="true">
                        <span class="acc-project-placeholder__label"><?php echo esc_html(accstage_translate('projects.items.image_placeholder', 'Imagem principal')); ?></span>
                        <span class="acc-project-placeholder__title"><?php echo esc_html($project['title']); ?></span>
                    </span>
                <?php endif; ?>
            </a>
            <div class="acc-project-card__meta">
                <div>
                    <h3>
                        <a class="acc-project-card__title-link" href="<?php echo esc_url($project_url); ?>">
                            <?php echo esc_html($project['title']); ?>
                        </a>
                    </h3>
                    <p><?php echo esc_html($project['list_tag']); ?></p>
                </div>
                <a class="acc-label acc-project-card__link" href="<?php echo esc_url($project_url); ?>">
                    <?php echo esc_html(accstage_translate('projects.items.view_project', 'Ver projeto')); ?>
                </a>
            </div>
        </article>
    <?php endforeach; ?>
</div>
