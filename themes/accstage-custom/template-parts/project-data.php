<?php
/**
 * Dados editoriais dos projetos ACCSTAGE.
 *
 * @package accstage-custom
 */

if (! defined('ABSPATH')) {
    exit;
}

if (! function_exists('accstage_custom_get_projects_data')) {
    /**
     * Devolve a lista de projetos para listagem e detalhe.
     *
     * @return array<int, array<string, mixed>>
     */
    function accstage_custom_get_projects_data(): array
    {
        $theme_images_base_uri = trailingslashit(get_template_directory_uri()) . 'assets/images/';
        $projects_images_base_uri = $theme_images_base_uri . 'projects/';
        $theme_images_base_path = trailingslashit(get_template_directory()) . 'assets/images/';
        $projects_images_base_path = $theme_images_base_path . 'projects/';

        $resolve_project_image = static function (string $filename) use ($projects_images_base_path, $projects_images_base_uri, $theme_images_base_path, $theme_images_base_uri): string {
            if (file_exists($projects_images_base_path . $filename)) {
                return $projects_images_base_uri . $filename;
            }

            if (file_exists($theme_images_base_path . $filename)) {
                return $theme_images_base_uri . $filename;
            }

            return $projects_images_base_uri . $filename;
        };

        $build_gallery_images = static function (string $prefix, int $start, int $end) use ($resolve_project_image): array {
            $images = [];

            for ($index = $start; $index <= $end; $index++) {
                $images[] = $resolve_project_image(sprintf('%s-%02d.jpg', $prefix, $index));
            }

            return $images;
        };

        return [
            [
                'title' => __('2URBA', 'accstage-custom'),
                'slug' => '2urba',
                'location' => '',
                'year' => '',
                'hero_image' => $resolve_project_image('2urba-hero.jpg'),
                'gallery_images' => $build_gallery_images('2urba', 1, 8),
                'description' => [
                    __('Projeto transversal de duas moradias geminadas para loteamento na cidade de Guimarães. É um projeto dotado de traços minimalistas e modernos, conjugando de uma forma harmoniosa os materiais e o espaço.', 'accstage-custom'),
                    __('Estas moradias incluem três níveis: rés-do-chão com áreas de lazer, cozinha, lavandaria, instalações sanitárias e sala; o 1º andar com três quartos; cave com garagem para dois veículos por unidade habitacional.', 'accstage-custom'),
                ],
                'cta_title' => __('Pretende desenvolver um projeto residencial com esta linguagem?', 'accstage-custom'),
                'list_tag' => __('Residencial', 'accstage-custom'),
            ],
            [
                'title' => __('Projeto Ribeira Verde', 'accstage-custom'),
                'slug' => 'projeto-ribeira-verde',
                'location' => __('Guimarães, Portugal', 'accstage-custom'),
                'year' => '',
                'hero_image' => $resolve_project_image('ribeira-verde-hero.jpg'),
                'gallery_images' => $build_gallery_images('ribeira-verde', 1, 6),
                'description' => [
                    __('O edifício Ribeira Verde pretende introduzir na cidade uma forte relação entre construção e natureza. Elementos naturais como a água, as árvores e outros tipos de vegetação, sobressaem no edificado proposto, aumentando a biodiversidade e os níveis de oxigénio do local.', 'accstage-custom'),
                    __('A valorização da ribeira de couros, que atualmente denota uma presença discreta e sem grande relação com as atividades sociais, representa uma clara mais valia. Este projeto congrega alguns interesses municipais que potencializarão a ligação do parque verde da cidade ao centro histórico.', 'accstage-custom'),
                    __('Com 33 apartamentos, de áreas amplas e confortáveis e acabamento superiores, este edifício aporta qualidade de vida aos seus utilizadores. Dotado de muitas áreas verdes e equipamentos de lazer, o edifício Ribeira Verde oferece uma resposta ecológica à (pouca) oferta existente no mercado imobiliário da cidade de Guimarães.', 'accstage-custom'),
                ],
                'cta_title' => __('Vamos conversar sobre um projeto urbano com impacto positivo?', 'accstage-custom'),
                'list_tag' => __('Habitação multifamiliar', 'accstage-custom'),
            ],
            [
                'title' => __('Projeto Fábrica Camport', 'accstage-custom'),
                'slug' => 'projeto-fabrica-camport',
                'location' => __('Guimarães, Portugal', 'accstage-custom'),
                'year' => '',
                'hero_image' => $resolve_project_image('camport-hero.jpg'),
                'gallery_images' => $build_gallery_images('camport', 1, 12),
                'description' => [
                    __('O design concilia a funcionalidade à organização e aos pressupostos de uma empresa com marca reconhecida na indústria do calçado. A pureza e força do betão jogam constantemente com o alumínio branco e as suas diversas transparências e texturas.', 'accstage-custom'),
                    __('A introdução da luz, interior e exterior, constitui um elemento importante no desenvolvimento da proposta. À noite, todas as fachadas assumem novas formas e dinâmicas. A complexidade da geometria presente no alçado principal foi desenvolvida através de um componente básico, o qual possui uma estreita relação com a empresa: a palmilha, que representa conforto.', 'accstage-custom'),
                ],
                'cta_title' => __('Procura uma abordagem arquitetónica para um espaço industrial?', 'accstage-custom'),
                'list_tag' => __('Industrial', 'accstage-custom'),
            ],
            [
                'title' => __('Quinta do Peixoto', 'accstage-custom'),
                'slug' => 'maison-quinta-do-peixoto',
                'location' => __('Mascotelos, Guimarães', 'accstage-custom'),
                'year' => __('Projeto 2019', 'accstage-custom'),
                'hero_image' => $resolve_project_image('quinta-peixoto-hero.jpg'),
                'gallery_images' => $build_gallery_images('quinta-peixoto', 1, 5),
                'description' => [
                    __('As residências da Quinta do Peixoto situam-se em Mascotelos, Guimarães. Este projeto inclui 13 lotes habitacionais, 78 residências e inúmeros espaços verdes. O ambiente é uma preocupação especial, uma vez que a biodiversidade e a sustentabilidade são duas das prioridades atuais.', 'accstage-custom'),
                    __('A classe energética A, as centrais elétricas, o conforto térmico e a existência de painéis solares não passam despercebidos. Mais uma vez, o minimalismo de todos os elementos é evidente.', 'accstage-custom'),
                ],
                'cta_title' => __('Quer planear um conjunto habitacional com foco em sustentabilidade?', 'accstage-custom'),
                'list_tag' => __('Masterplan residencial', 'accstage-custom'),
            ],
            [
                'title' => __('Projeto Casa Canaima', 'accstage-custom'),
                'slug' => 'projeto-casa-canaima',
                'location' => __('Nules, Espanha', 'accstage-custom'),
                'year' => __('Construção concluída no início de 2008', 'accstage-custom'),
                'hero_image' => $resolve_project_image('casa-canaima-hero.jpg'),
                'gallery_images' => $build_gallery_images('casa-canaima', 1, 5),
                'description' => [
                    __('Localizada na cidade de Nules, em Espanha, a Residencial Canaima aportou a possibilidade de incrementar qualidade de vida, conforto e tranquilidade a uma cidade com grande relação com a indústria cerâmica. No fundo propusemo-nos promover e construir este complexo habitacional por forma que a classe média tivesse acesso a novos e elevados padrões de qualidade de construção.', 'accstage-custom'),
                    __('Trata-se de um condomínio fechado, com um total de 26 vivendas unifamiliares em banda, divididos em duas frentes construídas. A implantação dos edifícios permitiu a criação de um pátio interior comum para reforçar as relações e a segurança de todas as famílias que ali habitam, bem como a criação de um espaço de sombra, ideal para convívio e sensação térmica agradável em pleno mediterrâneo.', 'accstage-custom'),
                    __('No que se refere às vivendas propriamente ditas, a moradia tipo integra 3 níveis, o Rés-do-chão com as áreas de lazer, cozinha, instalação sanitária e pátio exterior privado; o 1º andar com dois quartos com casa de banho integrada; e um 2º andar com outros dois quartos. Importa referir a existência de um 4º nível, a cave, sendo esta de caracter coletivo, contém garagens individuais, garantindo o estacionamento de dois veículos por unidade habitacional.', 'accstage-custom'),
                    __('A construção foi concluída no início de 2008. Tratou-se de um projeto bem sucedido, o qual mantém nos dias de hoje as suas qualidades bem vivas, desde logo pelo bom estado do empreendimento.', 'accstage-custom'),
                ],
                'cta_title' => __('Procura desenvolver um conjunto habitacional com elegância e forte sentido de comunidade?', 'accstage-custom'),
                'list_tag' => __('Residencial', 'accstage-custom'),
            ],
            [
                'title' => __('Casa Teixeira', 'accstage-custom'),
                'slug' => 'casa-teixeira',
                'location' => '',
                'year' => __('Projeto 2009 · Construção 2010', 'accstage-custom'),
                'hero_image' => $resolve_project_image('casa-teixeira-hero.jpg'),
                'gallery_images' => $build_gallery_images('casa-teixeira', 1, 6),
                'description' => [
                    __('Construção de lote unifamiliar.', 'accstage-custom'),
                    __('O desenho enquadra-se nos valores herdados da modernidade, assentando na simplicidade formal, por meio de formas cruas e brutas, e no respeito entre os diversos materiais.', 'accstage-custom'),
                    __('A nível arquitetónico o projeto reflete um jogo constante entre uma volumetria fechada e compacta na sua aparência exterior, e um interior bastante aberto e iluminado. Para isso serve-se de pequenos pátios no interior imediato da sua volumetria, contendo vãos abertos de diferentes tamanhos na fachada exterior.', 'accstage-custom'),
                    __('Desta forma encurtou-se a visibilidade desde o exterior para o interior do lote, conferindo maior privacidade aos seus compartimentos.', 'accstage-custom'),
                ],
                'cta_title' => __('Pretende uma moradia contemporânea com privacidade, luz e rigor material?', 'accstage-custom'),
                'list_tag' => __('Habitação unifamiliar', 'accstage-custom'),
            ],
            [
                'title' => __('Lousada Padel Park', 'accstage-custom'),
                'slug' => 'lousada-padel-park',
                'location' => __('Lousada', 'accstage-custom'),
                'year' => __('Projeto 2018', 'accstage-custom'),
                'hero_image' => $resolve_project_image('lousada-padel-park-hero.jpg'),
                'gallery_images' => $build_gallery_images('lousada-padel-park', 1, 6),
                'description' => [
                    __('Pavilhão desportivo de padel.', 'accstage-custom'),
                    __('Integrando o Complexo Desportivo de Lousada, o objetivo passava por adicionar, às valências existentes do espaço, uma nova componente desportiva, a qual tem um número cada vez maior de praticantes.', 'accstage-custom'),
                    __('A proposta acrescenta uma nova massa construída com forte impacto visual. Desta forma, o conceito desenvolvido passou por tentar conferir o máximo de leveza ao novo edifício. Para isso, através da diferença de cotas entre os pavimentos, a fachada Este, aquela que tem mais força visual, perde altura e, ao mesmo tempo, a inclusão de fachadas falsas com árvores no seu interior permite desconstruir o pavilhão e relacioná-lo com a natureza.', 'accstage-custom'),
                    __('A constante interação entre o edificado e a vegetação é um dos fatores diferenciais que o projeto apresenta. Mesmo no interior do pavilhão pretendeu-se reforçar essa relação por forma a que o pavilhão, apesar de totalmente coberto, tenha uma forte ligação ao espaço exterior.', 'accstage-custom'),
                ],
                'cta_title' => __('Quer desenvolver um equipamento desportivo com identidade arquitetónica forte?', 'accstage-custom'),
                'list_tag' => __('Equipamento desportivo', 'accstage-custom'),
            ],
            [
                'title' => __('Clínica Sort', 'accstage-custom'),
                'slug' => 'clinica-sort',
                'location' => '',
                'year' => __('Projeto 2019', 'accstage-custom'),
                'hero_image' => $resolve_project_image('clinica-sort-hero.jpg'),
                'gallery_images' => $build_gallery_images('clinica-sort', 1, 11),
                'description' => [
                    __('Edifício de Serviços de Segurança e Saúde no Trabalho.', 'accstage-custom'),
                    __('Este projeto refere-se a uma obra de reestruturação e restauração de interiores de um espaço anteriormente utilizado como estabelecimento comercial. Dotada de linhas dinâmicas e elegantes, a clínica SORT está agora estruturada de forma muito eficiente e, apesar do minimalismo dos elementos, alguns detalhes realçam a harmonia entre todos os espaços.', 'accstage-custom'),
                ],
                'cta_title' => __('Procura transformar um espaço de serviços com eficiência e elegância contemporânea?', 'accstage-custom'),
                'list_tag' => __('Serviços e saúde', 'accstage-custom'),
            ],
            [
                'title' => __('M73 Apartments', 'accstage-custom'),
                'slug' => 'm73-apartments',
                'location' => __('Felgueiras', 'accstage-custom'),
                'year' => __('Projeto 2018', 'accstage-custom'),
                'hero_image' => $resolve_project_image('m73-apartments-hero.jpg'),
                'gallery_images' => $build_gallery_images('m73-apartments', 1, 3),
                'description' => [
                    __('Edifício de habitação coletiva.', 'accstage-custom'),
                    __('Como objetivo propôs-se que o centro da cidade de Felgueiras oferecesse um edifício de habitação coletiva com altos padrões de elegância, conforto e design. O projeto apresenta um edifício rico em texturas, no qual a boa exposição solar e a privacidade dos espaços interiores estão fortemente ligados.', 'accstage-custom'),
                ],
                'cta_title' => __('Pretende desenvolver habitação coletiva com conforto, elegância e forte presença urbana?', 'accstage-custom'),
                'list_tag' => __('Habitação coletiva', 'accstage-custom'),
            ],
        ];
    }
}

if (! function_exists('accstage_custom_get_project_by_slug')) {
    /**
     * Resolve projeto pelo slug.
     *
     * @param string $slug Slug do projeto.
     * @return array<string, mixed>|null
     */
    function accstage_custom_get_project_by_slug(string $slug): ?array
    {
        foreach (accstage_custom_get_projects_data() as $project) {
            if (isset($project['slug']) && $project['slug'] === $slug) {
                return $project;
            }
        }

        return null;
    }
}
