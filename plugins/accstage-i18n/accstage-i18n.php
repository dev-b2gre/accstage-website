<?php
/**
 * Plugin Name: ACCSTAGE I18N
 * Description: Camada multilingue leve com prefixos de idioma para ACCSTAGE.
 * Version: 1.0.0
 * Author: ACCSTAGE
 * Text Domain: accstage-i18n
 *
 * @package accstage-i18n
 */

if (! defined('ABSPATH')) {
    exit;
}

define('ACCSTAGE_I18N_VERSION', '1.0.0');
define('ACCSTAGE_I18N_FILE', __FILE__);
define('ACCSTAGE_I18N_DIR', plugin_dir_path(__FILE__));
define('ACCSTAGE_I18N_URL', plugin_dir_url(__FILE__));

require_once ACCSTAGE_I18N_DIR . 'includes/class-accstage-i18n.php';
require_once ACCSTAGE_I18N_DIR . 'includes/helpers.php';

/**
 * Arranque do plugin.
 *
 * @return ACCSTAGE_I18N
 */
function accstage_i18n(): ACCSTAGE_I18N
{
    static $instance = null;

    if (! ($instance instanceof ACCSTAGE_I18N)) {
        $instance = new ACCSTAGE_I18N();
    }

    return $instance;
}

accstage_i18n();

register_activation_hook(
    ACCSTAGE_I18N_FILE,
    static function (): void {
        accstage_i18n()->register_rewrite_rules();
        flush_rewrite_rules();
    }
);

register_deactivation_hook(
    ACCSTAGE_I18N_FILE,
    static function (): void {
        flush_rewrite_rules();
    }
);
