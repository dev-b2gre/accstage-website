<?php
/**
 * Template Name: Serviços ACCSTAGE
 *
 * @package accstage-custom
 */

get_header();

$services = [
    [
        'slug'       => 'arquitetura',
        'title'      => __('Arquitetura', 'accstage-custom'),
        'image'      => 'arquitetura.jpg',
        'paragraphs' => [
            __('Integrando uma equipa multidisciplinar, o nosso escritório conta com talentosos designers e arquitetos, que nos permitem desenvolver projetos desde os primeiros esboços e discussão de ideias, até ao acompanhamento e assistência técnica em obra.', 'accstage-custom'),
            __('Os nossos métodos aliam criatividade ao rigor, proporcionando resultados inovadores.', 'accstage-custom'),
            __('Possuímos vasta experiência na elaboração de projetos de carácter residencial, bem como em edifícios de saúde, desportivos e comerciais.', 'accstage-custom'),
            __('A proximidade com o cliente revela-se um fator de extrema importância no sentido de proporcionar os resultados desejados.', 'accstage-custom'),
        ],
    ],
    [
        'slug'       => 'construcao',
        'title'      => __('Construção', 'accstage-custom'),
        'image'      => 'construcao.jpg',
        'paragraphs' => [
            __('Com uma vasta experiência na construção de edifícios de habitação coletiva e individual, a Accstage realiza obras no mercado nacional e no mercado internacional.', 'accstage-custom'),
            __('Para além de edifícios residenciais, construímos também outras tipologias.', 'accstage-custom'),
            __('A experiência adquirida permite-nos encarar o futuro com a confiança necessária que o mercado, cada vez mais exigente, solicita.', 'accstage-custom'),
            __('Oferecemos uma elevada capacidade de resposta face às maiores exigências.', 'accstage-custom'),
            __('Com uma equipa de técnicos altamente qualificados, a Accstage – Building for Tomorrow representa uma opção sólida com vista à obtenção de resultados de excelência, em qualquer fase de obra.', 'accstage-custom'),
            __('Trabalhamos de forma que a nossa confiança seja a confiança dos nossos clientes.', 'accstage-custom'),
        ],
    ],
    [
        'slug'       => 'solucoes-metalicas',
        'title'      => __('Soluções Metálicas', 'accstage-custom'),
        'image'      => 'solucoes-metalicas.jpg',
        'paragraphs' => [
            __('A comercialização de soluções metálicas para arquitetura adveio de uma paixão e da capacidade de trabalhar o metal. Acreditamos que o peso do metal na construção civil será cada vez maior.', 'accstage-custom'),
            __('Com o objetivo de apresentar soluções diferenciadas, procuramos novos desafios que nos permitam evoluir a todos os níveis. Esta postura leva-nos a experimentar novos conceitos.', 'accstage-custom'),
            __('Contamos com uma equipa qualificada e experiente, capaz de criar produtos de grande exigência, com resultados amplamente satisfatórios e inovadores.', 'accstage-custom'),
            __('Garantimos qualidade, precisão e engenharia, sendo por isso altamente competitivos por forma a operar no mercado global.', 'accstage-custom'),
        ],
    ],
    [
        'slug'       => 'jardins-verticais',
        'title'      => __('Jardins Verticais', 'accstage-custom'),
        'image'      => 'jardins-verticais.jpg',
        'paragraphs' => [
            __('O pensamento em relação ao meio ambiente está cada vez mais vincado na visão de quem define as regras de urbanização, de quem projeta e inclusive dos próprios governos. Intervindo diretamente no meio ambiente e na criação e desenvolvimento do território, as questões ecológicas e ambientais são preocupações que integram os nossos trabalhos.', 'accstage-custom'),
            __('O jardim vertical, ou parede verde, consiste numa intervenção paisagística no edificado, onde as paredes ou muros são cobertos por vegetação através de técnicas especializadas. Estas intervenções interferem bastante no microclima dos espaços envolventes.', 'accstage-custom'),
            __('Para além de todas as mais-valias técnicas, nas quais se destacam as melhorias de eficiência térmica, os jardins verticais têm ainda um fator estético de inegável requinte pela sua naturalidade.', 'accstage-custom'),
        ],
    ],
];
?>
<section class="acc-page-hero acc-services-hero" aria-labelledby="acc-services-title">
    <div class="acc-wrap">
        <p class="acc-label"><?php esc_html_e('Serviços', 'accstage-custom'); ?></p>
        <h1 id="acc-services-title" class="acc-title-xl"><?php esc_html_e('Serviços com rigor, visão e execução integrada.', 'accstage-custom'); ?></h1>
        <p class="acc-lead"><?php esc_html_e('A Accstage integra arquitetura, construção e soluções especializadas com foco em qualidade, consistência técnica e valor duradouro.', 'accstage-custom'); ?></p>
    </div>
</section>

<section class="acc-section acc-services" aria-labelledby="acc-services-list-title">
    <div class="acc-wrap acc-services__list">
        <h2 id="acc-services-list-title" class="screen-reader-text"><?php esc_html_e('Áreas de serviço', 'accstage-custom'); ?></h2>

        <?php foreach ($services as $index => $service) : ?>
            <?php
            $image_relative = '/assets/images/services/' . $service['image'];
            $image_path     = get_template_directory() . $image_relative;
            $image_url      = get_template_directory_uri() . $image_relative;
            $has_image      = file_exists($image_path);
            $is_reversed    = $index % 2 !== 0;
            ?>
            <article id="<?php echo esc_attr('servico-' . $service['slug']); ?>" class="acc-services__item<?php echo $is_reversed ? ' acc-services__item--reverse' : ''; ?>" aria-labelledby="<?php echo esc_attr('acc-service-title-' . $service['slug']); ?>">
                <div class="acc-services__media">
                    <?php if ($has_image) : ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($service['title']); ?>" loading="lazy" />
                    <?php else : ?>
                        <div class="acc-services__placeholder" role="img" aria-label="<?php echo esc_attr($service['title']); ?>">
                            <span class="acc-services__placeholder-label"><?php esc_html_e('Imagem de serviço', 'accstage-custom'); ?></span>
                            <strong><?php echo esc_html($service['title']); ?></strong>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="acc-services__content">
                    <p class="acc-label"><?php esc_html_e('Área de serviço', 'accstage-custom'); ?></p>
                    <h2 id="<?php echo esc_attr('acc-service-title-' . $service['slug']); ?>" class="acc-title-lg"><?php echo esc_html($service['title']); ?></h2>
                    <div class="acc-editorial">
                        <?php foreach ($service['paragraphs'] as $paragraph) : ?>
                            <p><?php echo esc_html($paragraph); ?></p>
                        <?php endforeach; ?>
                    </div>
                    <a class="acc-button" href="<?php echo esc_url(home_url('/contacto/')); ?>"><?php esc_html_e('Fale connosco', 'accstage-custom'); ?></a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<?php get_footer();
