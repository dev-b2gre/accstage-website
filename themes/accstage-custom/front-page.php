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
            <p class="acc-eyebrow acc-label"><?php echo esc_html(accstage_translate('home.manifesto.label', 'Manifesto')); ?></p>
            <h2 class="acc-title-lg"><?php echo wp_kses_post(accstage_translate('home.manifesto.title', 'O espaço não está vazio.<br/>É matéria arquitetónica.')); ?></h2>
        </div>
        <div class="acc-editorial">
            <p><?php echo esc_html(accstage_translate('home.manifesto.body', 'A ACCSTAGE afasta-se da arquitetura descartável. Trabalhamos com geometrias puras, proporção disciplinada e materiais que ganham carácter com o tempo.')); ?></p>
            <p><a class="acc-button" href="<?php echo esc_url(accstage_i18n_url('/sobre-nos/')); ?>"><?php echo esc_html(accstage_translate('home.manifesto.cta', 'Ler manifesto completo')); ?></a></p>
        </div>
    </div>
</section>

<section class="acc-section">
    <div class="acc-wrap">
        <div class="acc-grid-2" style="align-items:end; border-bottom:1px solid var(--acc-line); padding-bottom: 1.2rem; margin-bottom: 3rem;">
            <h2 class="acc-title-lg"><?php echo esc_html(accstage_translate('home.archive.title', 'Arquivo selecionado')); ?></h2>
            <p class="acc-label" style="text-align:right; color:var(--acc-muted);"><?php echo esc_html(accstage_translate('home.archive.years', '2018 — 2026')); ?></p>
        </div>
        <?php get_template_part('template-parts/project', 'grid'); ?>
    </div>
</section>

<section class="acc-section acc-section--soft">
    <div class="acc-wrap">
        <div class="acc-values">
            <article class="acc-value">
                <b>01</b>
                <h3 class="acc-title-md"><?php echo esc_html(accstage_translate('home.values.rigor.title', 'Rigor')); ?></h3>
                <p><?php echo esc_html(accstage_translate('home.values.rigor.body', 'Cada linha nasce de decisão técnica e não de efeito visual efémero.')); ?></p>
            </article>
            <article class="acc-value">
                <b>02</b>
                <h3 class="acc-title-md"><?php echo esc_html(accstage_translate('home.values.permanence.title', 'Permanência')); ?></h3>
                <p><?php echo esc_html(accstage_translate('home.values.permanence.body', 'Projetamos para atravessar décadas com dignidade material e espacial.')); ?></p>
            </article>
            <article class="acc-value">
                <b>03</b>
                <h3 class="acc-title-md"><?php echo esc_html(accstage_translate('home.values.precision.title', 'Precisão')); ?></h3>
                <p><?php echo esc_html(accstage_translate('home.values.precision.body', 'A execução é tratada com o mesmo nível de exigência da fase conceptual.')); ?></p>
            </article>
        </div>
    </div>
</section>

<section class="acc-section acc-home-contact" aria-labelledby="acc-home-contact-title">
    <div class="acc-wrap">
        <div class="acc-home-contact__content">
            <p class="acc-label"><?php echo esc_html(accstage_translate('home.contact.label', 'Contacto oficial')); ?></p>
            <h2 id="acc-home-contact-title" class="acc-title-lg"><?php echo esc_html(accstage_translate('home.contact.title', 'ACCSTAGE Lda. — Head Office')); ?></h2>

            <div class="acc-editorial acc-home-contact__details">
                <p><?php echo esc_html(accstage_translate('home.contact.address_line_1', 'R. António Luis Gomes 120')); ?></p>
                <p><?php echo esc_html(accstage_translate('home.contact.address_line_2', '4430-195 Vila Nova de Gaia')); ?></p>
                <p><a href="tel:+351255913065"><?php echo esc_html(accstage_translate('home.contact.phone', 'Business Contact: +351 255 913 065')); ?></a></p>
                <p><a href="mailto:info@accstage.com">info@accstage.com</a></p>
                <p><a class="acc-button" href="<?php echo esc_url(accstage_i18n_url('/contacto/')); ?>"><?php echo esc_html(accstage_translate('home.contact.cta', 'Falar com a Accstage')); ?></a></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
