<?php
/**
 * Core setup do tema ACCSTAGE Custom.
 *
 * @package accstage-custom
 */

if (! defined('ABSPATH')) {
    exit;
}


require_once get_template_directory() . '/template-parts/project-data.php';

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


/**
 * Registar regras para detalhe de projeto em /projetos/{slug}/.
 */
function accstage_custom_register_project_rewrite(): void
{
    add_rewrite_rule('^projetos/([^/]+)/?$', 'index.php?pagename=projetos&acc_project_slug=$matches[1]', 'top');
}
add_action('init', 'accstage_custom_register_project_rewrite');

/**
 * Permitir query var de detalhe de projeto.
 *
 * @param array<int, string> $vars Variáveis permitidas.
 * @return array<int, string>
 */
function accstage_custom_project_query_vars(array $vars): array
{
    $vars[] = 'acc_project_slug';

    return $vars;
}
add_filter('query_vars', 'accstage_custom_project_query_vars');

if (! function_exists('accstage_custom_resolve_project_slug_from_request')) {
    /**
     * Resolve slug do projeto com fallback robusto para várias formas de request.
     *
     * @return string
     */
    function accstage_custom_resolve_project_slug_from_request(): string
    {
        $slug = sanitize_title((string) get_query_var('acc_project_slug'));

        if ($slug !== '') {
            return $slug;
        }

        $pagename = trim((string) get_query_var('pagename'), '/');
        if (preg_match('#^projetos/([^/]+)$#', $pagename, $matches) === 1) {
            return sanitize_title($matches[1]);
        }

        $request_uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash((string) $_SERVER['REQUEST_URI']) : '';
        if ($request_uri !== '') {
            $request_path = trim((string) wp_parse_url($request_uri, PHP_URL_PATH), '/');
            if (preg_match('#^projetos/([^/]+)$#', $request_path, $matches) === 1) {
                return sanitize_title($matches[1]);
            }
        }

        return '';
    }
}

/**
 * Links sociais opcionais para o footer.
 *
 * Preencher via filtro `accstage_custom_social_links` no child theme/plugin.
 *
 * @return array<int, array<string, string>>
 */
function accstage_custom_social_links(): array
{
    $links = [
        [
            'label' => 'LinkedIn',
            'url'   => 'https://www.linkedin.com/company/accstage/',
        ],
        [
            'label' => 'Facebook',
            'url'   => 'https://www.facebook.com/Accstage',
        ],
    ];

    return $links;
}
