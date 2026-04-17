<?php
/**
 * Fallback index.
 *
 * @package accstage-custom
 */

get_header();
?>
<section class="acc-page-hero">
    <div class="acc-wrap">
        <p class="acc-label"><?php esc_html_e('Publicações', 'accstage-custom'); ?></p>
        <h1 class="acc-title-lg"><?php echo esc_html(accstage_custom_page_heading()); ?></h1>
    </div>
</section>
<section class="acc-section">
    <div class="acc-wrap">
        <?php if (have_posts()) : ?>
            <div class="acc-list">
                <?php while (have_posts()) : the_post(); ?>
                    <article>
                        <h2 class="acc-title-md"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?></p>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e('Sem conteúdo disponível de momento.', 'accstage-custom'); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
