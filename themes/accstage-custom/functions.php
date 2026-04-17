<?php
/**
 * Core setup do tema ACCSTAGE Custom.
 *
 * @package accstage-custom
 */

if (! defined('ABSPATH')) {
    exit;
}

if (! function_exists('accstage_custom_setup')) {
    /**
     * Setup principal do tema.
     */
    function accstage_custom_setup(): void
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

        register_nav_menus([
            'primary' => __('Menu principal', 'accstage-custom'),
            'footer'  => __('Menu rodapé', 'accstage-custom'),
        ]);
    }
}
add_action('after_setup_theme', 'accstage_custom_setup');

/**
 * Enfileirar estilos/scripts do tema.
 */
function accstage_custom_enqueue_assets(): void
{
    $theme = wp_get_theme();

    wp_enqueue_style('accstage-custom-style', get_stylesheet_uri(), [], $theme->get('Version'));
    wp_enqueue_script('accstage-custom-script', get_template_directory_uri() . '/assets/js/theme.js', [], $theme->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'accstage_custom_enqueue_assets');

/**
 * Classes utilitárias para body.
 *
 * @param array<int, string> $classes Classes existentes.
 * @return array<int, string>
 */
function accstage_custom_body_classes(array $classes): array
{
    $classes[] = 'accstage-theme';

    if (is_front_page()) {
        $classes[] = 'accstage-front-page';
    }

    return $classes;
}
add_filter('body_class', 'accstage_custom_body_classes');

/**
 * Título de fallback para secções editoriais.
 */
function accstage_custom_page_heading(): string
{
    if (is_front_page()) {
        return __('Monólitos habitáveis para um tempo duradouro.', 'accstage-custom');
    }

    $title = get_the_title();

    return $title ? $title : __('ACCSTAGE', 'accstage-custom');
}
