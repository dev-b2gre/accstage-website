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
        <a class="acc-logo" href="<?php echo esc_url(home_url('/')); ?>">ACCSTAGE</a>

        <nav class="acc-menu" aria-label="<?php esc_attr_e('Navegação principal', 'accstage-custom'); ?>">
            <a href="<?php echo esc_url(home_url('/projetos/')); ?>"><?php esc_html_e('Projetos', 'accstage-custom'); ?></a>
            <a href="<?php echo esc_url(home_url('/sobre-nos/')); ?>"><?php esc_html_e('Sobre nós', 'accstage-custom'); ?></a>
            <a href="<?php echo esc_url(home_url('/contacto/')); ?>"><?php esc_html_e('Contacto', 'accstage-custom'); ?></a>
        </nav>

        <a class="acc-button" href="<?php echo esc_url(home_url('/contacto/')); ?>"><?php esc_html_e('Iniciar comissão', 'accstage-custom'); ?></a>
    </div>
</header>
<main class="acc-main">
