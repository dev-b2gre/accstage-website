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
 * Redirecionar formulário de contacto com status e erros.
 *
 * @param array<int, string> $error_fields Campos inválidos.
 * @param string             $status       Estado final.
 */
function accstage_custom_contact_form_redirect(array $error_fields = [], string $status = 'error'): void
{
    $redirect_url = wp_get_referer();
    if (! $redirect_url) {
        $redirect_url = home_url('/');
    }

    $args = [
        'acc_contact_status' => sanitize_key($status),
    ];

    if (! empty($error_fields)) {
        $sanitized_errors = array_filter(array_map('sanitize_key', $error_fields));
        $args['acc_contact_errors'] = implode(',', array_unique($sanitized_errors));
    }

    wp_safe_redirect(add_query_arg($args, $redirect_url));
    exit;
}

/**
 * Processar submissão do formulário de contacto.
 */
function accstage_custom_handle_contact_form_submit(): void
{
    if (! isset($_POST['accstage_contact_nonce']) || ! wp_verify_nonce(sanitize_text_field(wp_unslash((string) $_POST['accstage_contact_nonce'])), 'accstage_contact_form_submit')) {
        accstage_custom_contact_form_redirect(['nome', 'email', 'telefone', 'tipo_projeto', 'mensagem']);
    }

    $nome = isset($_POST['nome']) ? trim(sanitize_text_field(wp_unslash((string) $_POST['nome']))) : '';
    $email = isset($_POST['email']) ? sanitize_email(wp_unslash((string) $_POST['email'])) : '';
    $telefone_raw = isset($_POST['telefone']) ? trim(wp_unslash((string) $_POST['telefone'])) : '';
    $tipo_projeto = isset($_POST['tipo_projeto']) ? trim(sanitize_text_field(wp_unslash((string) $_POST['tipo_projeto']))) : '';
    $mensagem = isset($_POST['mensagem']) ? trim(sanitize_textarea_field(wp_unslash((string) $_POST['mensagem']))) : '';

    $invalid_fields = [];

    if ($nome === '') {
        $invalid_fields[] = 'nome';
    }

    if ($email === '' || ! is_email($email)) {
        $invalid_fields[] = 'email';
    }

    if ($telefone_raw === '' || preg_match('/^\d{9}$/', $telefone_raw) !== 1) {
        $invalid_fields[] = 'telefone';
    }

    if ($tipo_projeto === '') {
        $invalid_fields[] = 'tipo_projeto';
    }

    if ($mensagem === '') {
        $invalid_fields[] = 'mensagem';
    }

    if (! empty($invalid_fields)) {
        accstage_custom_contact_form_redirect($invalid_fields, 'error');
    }

    $receiver = get_option('admin_email');
    $subject = sprintf(__('Novo pedido de contacto — %s', 'accstage-custom'), $nome);
    $body = implode("\n\n", [
        sprintf(__('Nome: %s', 'accstage-custom'), $nome),
        sprintf(__('Email: %s', 'accstage-custom'), $email),
        sprintf(__('Telefone: %s', 'accstage-custom'), $telefone_raw),
        sprintf(__('Tipo de projeto: %s', 'accstage-custom'), $tipo_projeto),
        __('Detalhes do pedido:', 'accstage-custom'),
        $mensagem,
    ]);

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $email,
    ];

    $mail_sent = wp_mail($receiver, $subject, $body, $headers);

    if (! $mail_sent) {
        accstage_custom_contact_form_redirect([], 'error');
    }

    accstage_custom_contact_form_redirect([], 'success');
}
add_action('admin_post_nopriv_accstage_submit_contact_form', 'accstage_custom_handle_contact_form_submit');
add_action('admin_post_accstage_submit_contact_form', 'accstage_custom_handle_contact_form_submit');

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
