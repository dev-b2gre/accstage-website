<?php
/**
 * Núcleo do plugin multilingue.
 *
 * @package accstage-i18n
 */

if (! defined('ABSPATH')) {
    exit;
}

class ACCSTAGE_I18N
{
    private const DEFAULT_LANGUAGE = 'pt';

    /**
     * @var array<string, string>
     */
    private const SUPPORTED_LANGUAGES = [
        'pt' => 'Português',
        'en' => 'English',
        'fr' => 'Français',
        'de' => 'Deutsch',
    ];

    /**
     * @var string
     */
    private $current_language = self::DEFAULT_LANGUAGE;

    /**
     * @var array<string, mixed>
     */
    private $translations = [];

    public function __construct()
    {
        add_action('init', [$this, 'register_rewrite_rules']);
        add_filter('query_vars', [$this, 'register_query_vars']);
        add_filter('request', [$this, 'map_language_request']);
        add_action('wp', [$this, 'bootstrap_language']);
        add_action('wp_head', [$this, 'render_hreflang_tags'], 1);
    }

    public function register_rewrite_rules(): void
    {
        add_rewrite_rule('^(en|fr|de)/?$', 'index.php?acc_lang=$matches[1]', 'top');
        add_rewrite_rule('^(en|fr|de)/(.*)/?$', 'index.php?acc_lang=$matches[1]&acc_i18n_path=$matches[2]', 'top');
    }

    /**
     * @param array<int, string> $vars
     * @return array<int, string>
     */
    public function register_query_vars(array $vars): array
    {
        $vars[] = 'acc_lang';
        $vars[] = 'acc_i18n_path';

        return $vars;
    }

    /**
     * @param array<string, mixed> $query_vars
     * @return array<string, mixed>
     */
    public function map_language_request(array $query_vars): array
    {
        $lang = isset($query_vars['acc_lang']) ? $this->sanitize_language((string) $query_vars['acc_lang']) : self::DEFAULT_LANGUAGE;

        if ($lang !== self::DEFAULT_LANGUAGE) {
            $query_vars['acc_lang'] = $lang;
        }

        if (! isset($query_vars['acc_i18n_path'])) {
            return $query_vars;
        }

        $path = trim((string) $query_vars['acc_i18n_path'], '/');
        unset($query_vars['acc_i18n_path']);

        if ($path === '') {
            return $query_vars;
        }

        if (preg_match('#^projetos/([^/]+)$#', $path, $matches) === 1) {
            $query_vars['pagename'] = 'projetos';
            $query_vars['acc_project_slug'] = sanitize_title($matches[1]);

            return $query_vars;
        }

        if (strpos($path, 'category/') === 0) {
            $query_vars['category_name'] = sanitize_title(substr($path, 9));

            return $query_vars;
        }

        $query_vars['pagename'] = sanitize_title_for_query($path);

        return $query_vars;
    }

    public function bootstrap_language(): void
    {
        $query_lang = get_query_var('acc_lang');
        $this->current_language = $this->sanitize_language(is_string($query_lang) ? $query_lang : '');
        $this->translations = $this->load_translations($this->current_language);

        if ($this->current_language !== self::DEFAULT_LANGUAGE) {
            add_filter('body_class', [$this, 'add_body_language_class']);
        }
    }

    /**
     * @param array<int, string> $classes
     * @return array<int, string>
     */
    public function add_body_language_class(array $classes): array
    {
        $classes[] = 'acc-lang-' . $this->current_language;

        return $classes;
    }

    public function get_current_language(): string
    {
        return $this->current_language;
    }

    /**
     * @return array<string, string>
     */
    public function get_supported_languages(): array
    {
        return self::SUPPORTED_LANGUAGES;
    }

    public function translate(string $key, string $fallback = ''): string
    {
        $value = $this->translations;

        foreach (explode('.', $key) as $segment) {
            if (! is_array($value) || ! array_key_exists($segment, $value)) {
                return $fallback;
            }

            $value = $value[$segment];
        }

        return is_scalar($value) ? (string) $value : $fallback;
    }

    public function build_url(string $path = '/', ?string $lang = null): string
    {
        $language = $lang === null || $lang === ''
            ? $this->current_language
            : $this->sanitize_language((string) $lang);
        $trimmed_path = ltrim($path, '/');

        if ($language === self::DEFAULT_LANGUAGE) {
            return home_url('/' . $trimmed_path);
        }

        return home_url('/' . $language . '/' . $trimmed_path);
    }

    public function get_localized_path_from_request(): string
    {
        $request_uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash((string) $_SERVER['REQUEST_URI']) : '';

        if ($request_uri === '') {
            return '/';
        }

        $raw_path = (string) wp_parse_url($request_uri, PHP_URL_PATH);
        $site_path = (string) wp_parse_url(home_url('/'), PHP_URL_PATH);

        $path = $raw_path;
        if ($site_path !== '' && $site_path !== '/' && strpos($raw_path, $site_path) === 0) {
            $path = (string) substr($raw_path, strlen($site_path));
        }

        $path = '/' . ltrim($path, '/');
        $segments = array_values(array_filter(explode('/', trim($path, '/'))));

        if ($segments !== [] && in_array($segments[0], array_keys(self::SUPPORTED_LANGUAGES), true)) {
            array_shift($segments);
        }

        if ($segments === []) {
            return '/';
        }

        return '/' . implode('/', array_map('sanitize_title', $segments)) . '/';
    }

    public function render_language_switcher(): string
    {
        $current_path = $this->get_localized_path_from_request();
        $items = [];

        foreach (self::SUPPORTED_LANGUAGES as $code => $label) {
            $flag_url = ACCSTAGE_I18N_URL . 'assets/flags/' . $code . '.svg';
            $is_current = $this->current_language === $code;

            $items[] = sprintf(
                '<a class="acc-lang-switcher__link%1$s" href="%2$s" lang="%3$s" hreflang="%3$s" aria-current="%4$s" aria-label="%5$s"><img class="acc-lang-switcher__flag" src="%6$s" alt="" loading="lazy" decoding="async" /><span class="screen-reader-text">%5$s</span><span class="acc-lang-switcher__code">%7$s</span></a>',
                $is_current ? ' is-current' : '',
                esc_url($this->build_url($current_path, $code)),
                esc_attr($code),
                $is_current ? 'true' : 'false',
                esc_attr(sprintf(__('Mudar idioma para %s', 'accstage-i18n'), $label)),
                esc_url($flag_url),
                esc_html(strtoupper($code))
            );
        }

        return '<nav class="acc-lang-switcher" aria-label="' . esc_attr__('Seletor de idioma', 'accstage-i18n') . '">' . implode('', $items) . '</nav>';
    }

    public function render_hreflang_tags(): void
    {
        $path = $this->get_localized_path_from_request();

        foreach (self::SUPPORTED_LANGUAGES as $code => $label) {
            echo '<link rel="alternate" hreflang="' . esc_attr($code) . '" href="' . esc_url($this->build_url($path, $code)) . '" />' . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }

        echo '<link rel="alternate" hreflang="x-default" href="' . esc_url($this->build_url($path, self::DEFAULT_LANGUAGE)) . '" />' . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }

    private function sanitize_language(string $language): string
    {
        $language = strtolower(sanitize_key($language));

        if (! array_key_exists($language, self::SUPPORTED_LANGUAGES)) {
            return self::DEFAULT_LANGUAGE;
        }

        return $language;
    }

    /**
     * @return array<string, mixed>
     */
    private function load_translations(string $language): array
    {
        $file = ACCSTAGE_I18N_DIR . 'languages/' . $language . '.json';

        if (! is_readable($file)) {
            return [];
        }

        $content = file_get_contents($file);

        if (! is_string($content) || $content === '') {
            return [];
        }

        $decoded = json_decode($content, true);

        return is_array($decoded) ? $decoded : [];
    }
}
