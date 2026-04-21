<?php
/**
 * Template Name: Contacto ACCSTAGE
 *
 * @package accstage-custom
 */

get_header();

$contact_status = isset($_GET['acc_contact_status']) ? sanitize_key(wp_unslash((string) $_GET['acc_contact_status'])) : '';
$error_keys_raw = isset($_GET['acc_contact_errors']) ? sanitize_text_field(wp_unslash((string) $_GET['acc_contact_errors'])) : '';
$error_keys = $error_keys_raw !== '' ? array_filter(array_map('sanitize_key', explode(',', $error_keys_raw))) : [];
$has_errors = ! empty($error_keys);

$field_errors = [
    'nome'         => in_array('nome', $error_keys, true),
    'email'        => in_array('email', $error_keys, true),
    'telefone'     => in_array('telefone', $error_keys, true),
    'tipo_projeto' => in_array('tipo_projeto', $error_keys, true),
    'mensagem'     => in_array('mensagem', $error_keys, true),
];
?>
<section class="acc-page-hero acc-contact-hero" aria-labelledby="acc-contact-title">
    <div class="acc-wrap">
        <p class="acc-label"><?php echo esc_html(accstage_translate('contact.hero.label', 'Contacto')); ?></p>
        <h1 id="acc-contact-title" class="acc-title-xl"><?php echo esc_html(accstage_translate('contact.hero.title', 'Vamos conversar sobre o seu próximo projeto.')); ?></h1>
        <p class="acc-lead"><?php echo esc_html(accstage_translate('contact.hero.lead', 'Partilhe o contexto e os objetivos. A ACCSTAGE responde com enquadramento técnico, próximos passos e acompanhamento profissional.')); ?></p>
    </div>
</section>

<section class="acc-section acc-contact-main" aria-labelledby="acc-contact-main-title">
    <div class="acc-wrap">
        <h2 id="acc-contact-main-title" class="screen-reader-text"><?php echo esc_html(accstage_translate('contact.sr_title', 'Informação de contacto e formulário')); ?></h2>
        <div class="acc-contact-layout">
            <aside class="acc-contact-panel" aria-labelledby="acc-contact-panel-title">
                <div class="acc-contact-panel__intro">
                    <p class="acc-label"><?php echo esc_html(accstage_translate('contact.panel.intro_label', 'Introdução')); ?></p>
                    <h3 id="acc-contact-panel-title" class="acc-title-md"><?php echo esc_html(accstage_translate('contact.panel.company', 'ACCSTAGE Lda.')); ?></h3>
                    <p><?php echo esc_html(accstage_translate('contact.panel.intro_text', 'Sede oficial em Vila Nova de Gaia, com atuação em projetos de arquitetura e construção premium em diferentes escalas.')); ?></p>
                </div>

                <div class="acc-contact-panel__block">
                    <p class="acc-label"><?php echo esc_html(accstage_translate('contact.panel.contacts_label', 'Contactos principais')); ?></p>
                    <ul class="acc-list acc-contact-list">
                        <li>
                            <span class="acc-label"><?php echo esc_html(accstage_translate('contact.panel.email_label', 'Email')); ?></span>
                            <a href="mailto:info@accstage.com">info@accstage.com</a>
                        </li>
                        <li>
                            <span class="acc-label"><?php echo esc_html(accstage_translate('contact.panel.phone_label', 'Business Contact')); ?></span>
                            <a href="tel:+351255913065">+351 255 913 065</a>
                        </li>
                        <li>
                            <span class="acc-label"><?php echo esc_html(accstage_translate('contact.panel.company_label', 'Empresa')); ?></span>
                            <p><?php echo esc_html(accstage_translate('contact.panel.company', 'ACCSTAGE Lda.')); ?></p>
                        </li>
                    </ul>
                </div>

                <div class="acc-contact-panel__block acc-contact-location">
                    <p class="acc-label"><?php echo esc_html(accstage_translate('contact.panel.office_label', 'Head Office')); ?></p>
                    <p class="acc-contact-location__title"><?php echo esc_html(accstage_translate('contact.panel.address_line_1', 'R. António Luis Gomes 120')); ?></p>
                    <p><?php echo esc_html(accstage_translate('contact.panel.address_line_2', '4430-195 Vila Nova de Gaia')); ?></p>
                    <p><?php echo esc_html(accstage_translate('contact.panel.country', 'Portugal')); ?></p>
                    <p class="acc-contact-location__note"><?php echo esc_html(accstage_translate('contact.panel.note', 'Reuniões presenciais por marcação prévia.')); ?></p>
                </div>
            </aside>

            <div class="acc-contact-form-wrap">
                <p class="acc-label"><?php echo esc_html(accstage_translate('contact.form.label', 'Formulário')); ?></p>
                <h3 class="acc-title-md"><?php echo esc_html(accstage_translate('contact.form.title', 'Iniciar contacto')); ?></h3>

                <form class="acc-contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" aria-label="<?php echo esc_attr(accstage_translate('contact.form.aria_label', 'Formulário de contacto')); ?>">
                    <input type="hidden" name="action" value="accstage_submit_contact_form" />
                    <?php wp_nonce_field('accstage_contact_form_submit', 'accstage_contact_nonce'); ?>

                    <?php if ($has_errors) : ?>
                        <p class="acc-contact-form__feedback acc-contact-form__feedback--error" role="alert">
                            <?php echo esc_html(accstage_translate('contact.form.error_global', 'Por favor, valide os campos assinalados para concluir o envio.')); ?>
                        </p>
                    <?php endif; ?>

                    <div class="acc-grid-2">
                        <p class="<?php echo $field_errors['nome'] ? 'acc-field-error' : ''; ?>">
                            <label for="acc-nome"><?php echo esc_html(accstage_translate('contact.form.name_label', 'Nome completo')); ?></label>
                            <input id="acc-nome" type="text" name="nome" autocomplete="name" required aria-invalid="<?php echo $field_errors['nome'] ? 'true' : 'false'; ?>" />
                            <?php if ($field_errors['nome']) : ?>
                                <span class="acc-contact-form__hint"><?php echo esc_html(accstage_translate('contact.form.name_hint', 'Indique o nome completo.')); ?></span>
                            <?php endif; ?>
                        </p>
                        <p class="<?php echo $field_errors['email'] ? 'acc-field-error' : ''; ?>">
                            <label for="acc-email"><?php echo esc_html(accstage_translate('contact.form.email_label', 'Email profissional')); ?></label>
                            <input id="acc-email" type="email" name="email" autocomplete="email" required aria-invalid="<?php echo $field_errors['email'] ? 'true' : 'false'; ?>" />
                            <?php if ($field_errors['email']) : ?>
                                <span class="acc-contact-form__hint"><?php echo esc_html(accstage_translate('contact.form.email_hint', 'Introduza um email profissional válido.')); ?></span>
                            <?php endif; ?>
                        </p>
                    </div>

                    <div class="acc-grid-2">
                        <p class="<?php echo $field_errors['telefone'] ? 'acc-field-error' : ''; ?>">
                            <label for="acc-telefone"><?php echo esc_html(accstage_translate('contact.form.phone_label', 'Telefone')); ?></label>
                            <input id="acc-telefone" type="tel" name="telefone" autocomplete="tel-national" inputmode="numeric" pattern="[0-9]{9}" minlength="9" maxlength="9" required aria-invalid="<?php echo $field_errors['telefone'] ? 'true' : 'false'; ?>" />
                            <?php if ($field_errors['telefone']) : ?>
                                <span class="acc-contact-form__hint"><?php echo esc_html(accstage_translate('contact.form.phone_hint', 'O telefone deve conter exatamente 9 números.')); ?></span>
                            <?php endif; ?>
                        </p>
                        <p class="<?php echo $field_errors['tipo_projeto'] ? 'acc-field-error' : ''; ?>">
                            <label for="acc-tipo"><?php echo esc_html(accstage_translate('contact.form.project_type_label', 'Tipo de projeto')); ?></label>
                            <input id="acc-tipo" type="text" name="tipo_projeto" placeholder="<?php echo esc_attr(accstage_translate('contact.form.project_type_placeholder', 'Residencial, comercial, cultural...')); ?>" required aria-invalid="<?php echo $field_errors['tipo_projeto'] ? 'true' : 'false'; ?>" />
                            <?php if ($field_errors['tipo_projeto']) : ?>
                                <span class="acc-contact-form__hint"><?php echo esc_html(accstage_translate('contact.form.project_type_hint', 'Selecione ou descreva o tipo de projeto.')); ?></span>
                            <?php endif; ?>
                        </p>
                    </div>

                    <p class="<?php echo $field_errors['mensagem'] ? 'acc-field-error' : ''; ?>">
                        <label for="acc-mensagem"><?php echo esc_html(accstage_translate('contact.form.message_label', 'Detalhes do pedido')); ?></label>
                        <textarea id="acc-mensagem" name="mensagem" required aria-invalid="<?php echo $field_errors['mensagem'] ? 'true' : 'false'; ?>"></textarea>
                        <?php if ($field_errors['mensagem']) : ?>
                            <span class="acc-contact-form__hint"><?php echo esc_html(accstage_translate('contact.form.message_hint', 'Partilhe os detalhes essenciais do pedido.')); ?></span>
                        <?php endif; ?>
                    </p>

                    <div class="acc-contact-form__actions">
                        <button class="acc-button acc-button--solid" type="submit"><?php echo esc_html(accstage_translate('contact.form.submit', 'Enviar pedido')); ?></button>

                        <?php if ($contact_status === 'success') : ?>
                            <p class="acc-contact-form__feedback acc-contact-form__feedback--success" role="status">
                                <?php echo esc_html(accstage_translate('contact.form.success', 'Pedido enviado, entraremos em contacto brevemente.')); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>

        <section class="acc-contact-map" aria-labelledby="acc-contact-map-title">
            <div class="acc-contact-map__header">
                <p class="acc-label"><?php echo esc_html(accstage_translate('contact.map.label', 'Localização')); ?></p>
                <h3 id="acc-contact-map-title" class="acc-title-md"><?php echo esc_html(accstage_translate('contact.map.title', 'Visitar a sede da ACCSTAGE')); ?></h3>
                <p><?php echo esc_html(accstage_translate('contact.map.address', 'R. António Luis Gomes 120, 4430-195 Vila Nova de Gaia')); ?></p>
            </div>
            <div class="acc-contact-map__frame">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d275.7514817144818!2d-8.607553886053505!3d41.121118020952885!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2464d2e16197bd%3A0x16c64e6f0fa301c9!2sR.%20Ant%C3%B3nio%20Luis%20Gomes%20120%2C%204430-195%20Vila%20Nova%20de%20Gaia!5e1!3m2!1spt-PT!2spt!4v1776434976636!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="<?php echo esc_attr(accstage_translate('contact.map.iframe_title', 'Mapa da sede da ACCSTAGE em Vila Nova de Gaia')); ?>"></iframe>
            </div>
        </section>
    </div>
</section>
<?php get_footer();
