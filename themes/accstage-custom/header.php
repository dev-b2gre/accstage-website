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
            <a href="<?php echo esc_url(function_exists('accstage_i18n_url') ? accstage_i18n_url('/projetos/') : home_url('/projetos/')); ?>"><?php echo esc_html(function_exists('accstage_translate') ? accstage_translate('navigation.projects', __('Projetos', 'accstage-custom')) : __('Projetos', 'accstage-custom')); ?></a>
            <a href="<?php echo esc_url(function_exists('accstage_i18n_url') ? accstage_i18n_url('/servicos/') : home_url('/servicos/')); ?>"><?php echo esc_html(function_exists('accstage_translate') ? accstage_translate('navigation.services', __('Serviços', 'accstage-custom')) : __('Serviços', 'accstage-custom')); ?></a>
            <a href="<?php echo esc_url(function_exists('accstage_i18n_url') ? accstage_i18n_url('/sobre-nos/') : home_url('/sobre-nos/')); ?>"><?php echo esc_html(function_exists('accstage_translate') ? accstage_translate('navigation.about', __('Sobre nós', 'accstage-custom')) : __('Sobre nós', 'accstage-custom')); ?></a>
            <a href="<?php echo esc_url(function_exists('accstage_i18n_url') ? accstage_i18n_url('/contacto/') : home_url('/contacto/')); ?>"><?php echo esc_html(function_exists('accstage_translate') ? accstage_translate('navigation.contact', __('Contacto', 'accstage-custom')) : __('Contacto', 'accstage-custom')); ?></a>
        </nav>

        <div class="acc-header-actions">
            <?php if (function_exists('accstage_language_switcher')) : ?>
                <?php echo wp_kses_post(accstage_language_switcher()); ?>
            <?php endif; ?>
            <a class="acc-button" href="<?php echo esc_url(function_exists('accstage_i18n_url') ? accstage_i18n_url('/contacto/') : home_url('/contacto/')); ?>"><?php echo esc_html(function_exists('accstage_translate') ? accstage_translate('navigation.cta', __('Fale Connosco', 'accstage-custom')) : __('Fale Connosco', 'accstage-custom')); ?></a>
        </div>
    </div>
</header>
<main class="acc-main">
