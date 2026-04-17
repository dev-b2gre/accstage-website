<?php
/**
 * Template da homepage.
 *
 * @package accstage-custom
 */

get_header();
get_template_part('template-parts/hero', 'home');
?>

<section class="acc-section acc-section--soft">
    <div class="acc-wrap acc-grid-2">
        <div>
            <p class="acc-eyebrow acc-label">Manifesto</p>
            <h2 class="acc-title-lg">O espaço não está vazio.<br/>É matéria arquitetónica.</h2>
        </div>
        <div class="acc-editorial">
            <p><?php esc_html_e('A ACCSTAGE afasta-se da arquitetura descartável. Trabalhamos com geometrias puras, proporção disciplinada e materiais que ganham carácter com o tempo.', 'accstage-custom'); ?></p>
            <p><a class="acc-button" href="<?php echo esc_url(home_url('/sobre-nos/')); ?>"><?php esc_html_e('Ler manifesto completo', 'accstage-custom'); ?></a></p>
        </div>
    </div>
</section>

<section class="acc-section">
    <div class="acc-wrap">
        <div class="acc-grid-2" style="align-items:end; border-bottom:1px solid var(--acc-line); padding-bottom: 1.2rem; margin-bottom: 3rem;">
            <h2 class="acc-title-lg">Arquivo selecionado</h2>
            <p class="acc-label" style="text-align:right; color:var(--acc-muted);">2018 — 2026</p>
        </div>
        <?php get_template_part('template-parts/project', 'grid'); ?>
    </div>
</section>

<section class="acc-section acc-section--soft">
    <div class="acc-wrap">
        <div class="acc-values">
            <article class="acc-value">
                <b>01</b>
                <h3 class="acc-title-md">Rigor</h3>
                <p><?php esc_html_e('Cada linha nasce de decisão técnica e não de efeito visual efémero.', 'accstage-custom'); ?></p>
            </article>
            <article class="acc-value">
                <b>02</b>
                <h3 class="acc-title-md">Permanência</h3>
                <p><?php esc_html_e('Projetamos para atravessar décadas com dignidade material e espacial.', 'accstage-custom'); ?></p>
            </article>
            <article class="acc-value">
                <b>03</b>
                <h3 class="acc-title-md">Precisão</h3>
                <p><?php esc_html_e('A execução é tratada com o mesmo nível de exigência da fase conceptual.', 'accstage-custom'); ?></p>
            </article>
        </div>
    </div>
</section>

<section class="acc-section acc-home-contact" aria-labelledby="acc-home-contact-title">
    <div class="acc-wrap">
        <div class="acc-home-contact__content">
            <p class="acc-label"><?php esc_html_e('Contacto oficial', 'accstage-custom'); ?></p>
            <h2 id="acc-home-contact-title" class="acc-title-lg"><?php esc_html_e('ACCSTAGE Lda. — Head Office', 'accstage-custom'); ?></h2>

            <div class="acc-editorial acc-home-contact__details">
                <p><?php esc_html_e('R. António Luis Gomes 120', 'accstage-custom'); ?></p>
                <p><?php esc_html_e('4430-195 Vila Nova de Gaia', 'accstage-custom'); ?></p>
                <p><a href="tel:+351255913065"><?php esc_html_e('Business Contact: +351 255 913 065', 'accstage-custom'); ?></a></p>
                <p><a href="mailto:info@accstage.com">info@accstage.com</a></p>
                <p><a class="acc-button" href="<?php echo esc_url(home_url('/contacto/')); ?>"><?php esc_html_e('Falar com a Accstage', 'accstage-custom'); ?></a></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
