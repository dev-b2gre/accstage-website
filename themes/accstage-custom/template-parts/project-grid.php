<?php
/**
 * Grelha editorial de projetos.
 *
 * @package accstage-custom
 */

$context = get_query_var('acc_project_grid_context', 'default');

$projects = [
    [
        'title' => __('Obsidian House', 'accstage-custom'),
        'location' => __('Kyoto, Japão', 'accstage-custom'),
        'type' => __('Residencial', 'accstage-custom'),
        'year' => '2023',
        'slug' => 'obsidian-house',
        'class' => 'acc-project-card acc-project-card--wide',
        'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBtektfDe5K5CkWyOeEXcERbPcGhICCwWSD1qMBrmZi4UFEShZjLKPY8HRtwoBVPsSqE80KPA8zaP-V7rwPtI0bMFTUHxtHuPUpOVnX-5yvMiV3Erm4TvaGt1vcP67O0wrHjaUvfPTwOsf_H01aeyVEisyMfoHCjwft9cPK0AhbYfErjWeONLw5Ks1d4d7LBneOZEPy8hhdRkcgUcqgFOb8Kc93PXOaPpdyJcYu8fLuoU8EnMcyi49-Erd_Jda7M2dGP1pLa6eS-6LH',
    ],
    [
        'title' => __('Pavilion X', 'accstage-custom'),
        'location' => __('Berlim, Alemanha', 'accstage-custom'),
        'type' => __('Cultural', 'accstage-custom'),
        'year' => '2024',
        'slug' => 'pavilion-x',
        'class' => 'acc-project-card acc-project-card--tall',
        'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCg3GgLas3E6BoaTmQ1nYtvokBfWXf1xbNe9zkVBo-a4tUjzcpwsj0ZE69FGfKD4N0OF_Z1outNIiwjma_OVmYyUa67eADE00x_w3KLrjfTKjG7IkjQIHLDdBCwbQ1_ZTlQD6IcLmo12r0zFMJCcXaC-NR53VmVjBlkOIo6hjf-slEf59_Gdu-76n0d3ufZJUKqYem3A6CkezEu8xR09vbNyStc8m_oB7PtQtfMktJLEOt4ULBuv-3KF2BRST2zMRL-YBb_QvaQv-uV',
    ],
    [
        'title' => __('Brutal Form 04', 'accstage-custom'),
        'location' => __('Londres, Reino Unido', 'accstage-custom'),
        'type' => __('Comercial', 'accstage-custom'),
        'year' => '2022',
        'slug' => 'brutal-form-04',
        'class' => 'acc-project-card acc-project-card--square',
        'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB8Kf2rhtEZwX1--MvU0UoR0CSoka_lYnk1IZJAyDsjMJfd5IB4MZjutqD_F_4GN1cioDj9bqDm6rUGGEEKljc3QvjW8B2QI86I1icaKAlCx-IqN0iIVFq-d3HzPlrN2apAx5uaTVLTXZfjg7q3KIC2uixj9I8MOUDreST0hQJb0TCc3eRKj6JSCoEx4q4l1lHD-p8ZVEkg5t4tJR-kdACe2kAZZEv20P3emfLt7N5cXx_quSayg7FDLC4u9Iajl5Qvif6tJDBbMCYV',
    ],
    [
        'title' => __('Gallery Mono', 'accstage-custom'),
        'location' => __('Nova Iorque, EUA', 'accstage-custom'),
        'type' => __('Arquivo', 'accstage-custom'),
        'year' => '2021',
        'slug' => 'gallery-mono',
        'class' => 'acc-project-card acc-project-card--panorama',
        'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAryhy7iU5MeBoCmkCg-z5u39VmVLVJPd4HRm9TRW0-LEcpbGEoeK6WTUS-8mLo7nCkJCh5KzcfxOTFt0_X0DL4C9vhcqvkJ4TptJDgxcgXnQAWg6mPWJl8nMnr0yF5Kb2yT0a6EfPCknD8YdaXCrud77x0uJ4XlqC_kATR4HhaHLR7n05DusMPaPf4lHRlIfT0hGUNMS2tqOCGOjvT-dJSe9REXDCDvW1wmrr1_m-MD6-Ts5ldlzo4TN5mbVys9-ai-EvuJgf8CzKk',
    ],
];
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
