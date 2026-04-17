<?php
/**
 * Bloco de pilares editoriais da página Sobre Nós.
 *
 * @package accstage-custom
 */

$pilares = [
    [
        'titulo' => __('Rigor', 'accstage-custom'),
        'descricao' => __('Aplicamos critérios técnicos estritos em todas as fases, do conceito ao detalhe construtivo.', 'accstage-custom'),
    ],
    [
        'titulo' => __('Qualidade', 'accstage-custom'),
        'descricao' => __('Selecionamos materiais e soluções pela sua capacidade de envelhecer com nobreza e coerência.', 'accstage-custom'),
    ],
    [
        'titulo' => __('Confiança', 'accstage-custom'),
        'descricao' => __('Construímos relações transparentes, com compromisso rigoroso entre visão, prazo e execução.', 'accstage-custom'),
    ],
    [
        'titulo' => __('Detalhe', 'accstage-custom'),
        'descricao' => __('A precisão milimétrica é o alicerce silencioso de cada espaço que desenhamos.', 'accstage-custom'),
    ],
];
?>
<section class="acc-section acc-about-pillars" aria-labelledby="acc-about-pillars-title">
    <div class="acc-wrap">
        <div class="acc-about-pillars__grid">
            <div>
                <h2 id="acc-about-pillars-title" class="acc-title-lg"><?php esc_html_e('Os nossos pilares', 'accstage-custom'); ?></h2>
            </div>
            <div class="acc-about-pillars__items">
                <?php foreach ($pilares as $pilar) : ?>
                    <article class="acc-about-pillars__item">
                        <h3 class="acc-title-md"><?php echo esc_html($pilar['titulo']); ?></h3>
                        <p><?php echo esc_html($pilar['descricao']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
