<?php
/**
 * Bloco de equipa da página Sobre Nós.
 *
 * @package accstage-custom
 */

$equipa = [
    [
        'nome' => __('Elias Thorne', 'accstage-custom'),
        'cargo' => __('Principal', 'accstage-custom'),
    ],
    [
        'nome' => __('Clara Vance', 'accstage-custom'),
        'cargo' => __('Lead Designer', 'accstage-custom'),
    ],
    [
        'nome' => __('Julian Reed', 'accstage-custom'),
        'cargo' => __('Direção de Forma', 'accstage-custom'),
    ],
];
?>
<section class="acc-section acc-about-team" aria-labelledby="acc-about-team-title">
    <div class="acc-wrap">
        <header class="acc-about-team__header">
            <p class="acc-label"><?php esc_html_e('Equipa', 'accstage-custom'); ?></p>
            <h2 id="acc-about-team-title" class="acc-title-lg"><?php esc_html_e('Arquitetos de intenção', 'accstage-custom'); ?></h2>
        </header>

        <div class="acc-about-team__grid">
            <?php foreach ($equipa as $indice => $membro) : ?>
                <article class="acc-about-team__member<?php echo $indice === 1 ? ' acc-about-team__member--offset' : ''; ?><?php echo $indice === 2 ? ' acc-about-team__member--raised' : ''; ?>">
                    <div class="acc-about-team__portrait" aria-hidden="true"></div>
                    <h3><?php echo esc_html($membro['nome']); ?></h3>
                    <p class="acc-label"><?php echo esc_html($membro['cargo']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
