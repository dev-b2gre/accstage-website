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
        <?php $project_url = home_url('/projetos/' . $project['slug'] . '/'); ?>
        <article class="<?php echo esc_attr($project['class']); ?>">
            <a class="acc-project-card__media" href="<?php echo esc_url($project_url); ?>" aria-label="<?php echo esc_attr(sprintf(__('Ver detalhe de %s', 'accstage-custom'), $project['title'])); ?>">
                <img src="<?php echo esc_url($project['image']); ?>" alt="<?php echo esc_attr($project['title']); ?>" loading="lazy"/>
            </a>
            <div class="acc-project-card__meta">
                <div>
                    <h3><?php echo esc_html($project['title']); ?></h3>
                    <p><?php echo esc_html($project['type'] . ' / ' . $project['location']); ?></p>
                </div>
                <span class="acc-label"><?php echo esc_html($project['year']); ?></span>
            </div>
        </article>
    <?php endforeach; ?>
</div>
