<?php
/**
 * Header do tema.
 *
 * @package accstage-custom
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="acc-site-header">
    <div class="acc-wrap">
        <?php
        $acc_logo_relative = '/assets/images/Accstage_main_black.png';
        $acc_logo_file     = get_template_directory() . $acc_logo_relative;
        $acc_logo_url      = get_template_directory_uri() . $acc_logo_relative;
        ?>
        <a class="acc-logo" href="<?php echo esc_url(home_url('/')); ?>">
            <?php if (file_exists($acc_logo_file)) : ?>
                <img class="acc-logo__image" src="<?php echo esc_url($acc_logo_url); ?>" alt="<?php esc_attr_e('Accstage', 'accstage-custom'); ?>" />
            <?php else : ?>
                <span class="acc-logo__text"><?php esc_html_e('ACCSTAGE', 'accstage-custom'); ?></span>
            <?php endif; ?>
        </a>

        <nav class="acc-menu" aria-label="<?php esc_attr_e('Navegação principal', 'accstage-custom'); ?>">
            <a href="<?php echo esc_url(home_url('/projetos/')); ?>"><?php esc_html_e('Projetos', 'accstage-custom'); ?></a>
            <a href="<?php echo esc_url(home_url('/sobre-nos/')); ?>"><?php esc_html_e('Sobre nós', 'accstage-custom'); ?></a>
            <a href="<?php echo esc_url(home_url('/contacto/')); ?>"><?php esc_html_e('Contacto', 'accstage-custom'); ?></a>
        </nav>

        <a class="acc-button" href="<?php echo esc_url(home_url('/contacto/')); ?>"><?php esc_html_e('Iniciar comissão', 'accstage-custom'); ?></a>
    </div>
</header>
<main class="acc-main">
