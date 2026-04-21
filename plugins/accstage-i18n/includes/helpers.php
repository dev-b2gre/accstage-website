<?php
/**
 * Helpers globais para tema/plugin.
 *
 * @package accstage-i18n
 */

if (! defined('ABSPATH')) {
    exit;
}

if (! function_exists('accstage_current_language')) {
    function accstage_current_language(): string
    {
        return accstage_i18n()->get_current_language();
    }
}

if (! function_exists('accstage_translate')) {
    function accstage_translate(string $key, string $fallback = ''): string
    {
        return accstage_i18n()->translate($key, $fallback);
    }
}

if (! function_exists('accstage_language_switcher')) {
    function accstage_language_switcher(): string
    {
        return accstage_i18n()->render_language_switcher();
    }
}

if (! function_exists('accstage_i18n_url')) {
    function accstage_i18n_url(string $path = '/', ?string $lang = null): string
    {
        return accstage_i18n()->build_url($path, $lang);
    }
}
