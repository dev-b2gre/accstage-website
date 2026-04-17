<?php
/**
 * Template de página genérico.
 *
 * @package accstage-custom
 */

get_header();
?>
<section class="acc-page-hero">
    <div class="acc-wrap">
        <p class="acc-label"><?php esc_html_e('Página', 'accstage-custom'); ?></p>
        <h1 class="acc-title-lg"><?php the_title(); ?></h1>
    </div>
</section>
<section class="acc-section">
    <div class="acc-wrap acc-editorial">
        <?php
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
</section>
<?php
get_footer();
