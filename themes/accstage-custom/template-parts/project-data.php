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
                'title' => accstage_translate('projects.data.2urba.title', '2URBA'),
                'slug' => '2urba',
                'location' => accstage_translate('projects.data.2urba.location', ''),
                'year' => accstage_translate('projects.data.2urba.year', ''),
                'hero_image' => $resolve_project_image('2urba-hero.jpg'),
                'gallery_images' => $build_gallery_images('2urba', 1, 8),
                'description' => [
                    accstage_translate('projects.data.2urba.description_1', 'Projeto transversal de duas moradias geminadas para loteamento na cidade de Guimarães. É um projeto dotado de traços minimalistas e modernos, conjugando de uma forma harmoniosa os materiais e o espaço.'),
                    accstage_translate('projects.data.2urba.description_2', 'Estas moradias incluem três níveis: rés-do-chão com áreas de lazer, cozinha, lavandaria, instalações sanitárias e sala; o 1º andar com três quartos; cave com garagem para dois veículos por unidade habitacional.'),
                ],
                'cta_title' => accstage_translate('projects.data.2urba.cta', 'Pretende desenvolver um projeto residencial com esta linguagem?'),
                'list_tag' => accstage_translate('projects.data.2urba.list_tag', 'Residencial'),
            ],
            [
                'title' => accstage_translate('projects.data.ribeira_verde.title', 'Projeto Ribeira Verde'),
                'slug' => 'projeto-ribeira-verde',
                'location' => accstage_translate('projects.data.ribeira_verde.location', 'Guimarães, Portugal'),
                'year' => accstage_translate('projects.data.ribeira_verde.year', ''),
                'hero_image' => $resolve_project_image('ribeira-verde-hero.jpg'),
                'gallery_images' => $build_gallery_images('ribeira-verde', 1, 6),
                'description' => [
                    accstage_translate('projects.data.ribeira_verde.description_1', 'O edifício Ribeira Verde pretende introduzir na cidade uma forte relação entre construção e natureza. Elementos naturais como a água, as árvores e outros tipos de vegetação, sobressaem no edificado proposto, aumentando a biodiversidade e os níveis de oxigénio do local.'),
                    accstage_translate('projects.data.ribeira_verde.description_2', 'A valorização da ribeira de couros, que atualmente denota uma presença discreta e sem grande relação com as atividades sociais, representa uma clara mais valia. Este projeto congrega alguns interesses municipais que potencializarão a ligação do parque verde da cidade ao centro histórico.'),
                    accstage_translate('projects.data.ribeira_verde.description_3', 'Com 33 apartamentos, de áreas amplas e confortáveis e acabamento superiores, este edifício aporta qualidade de vida aos seus utilizadores. Dotado de muitas áreas verdes e equipamentos de lazer, o edifício Ribeira Verde oferece uma resposta ecológica à (pouca) oferta existente no mercado imobiliário da cidade de Guimarães.'),
                ],
                'cta_title' => accstage_translate('projects.data.ribeira_verde.cta', 'Vamos conversar sobre um projeto urbano com impacto positivo?'),
                'list_tag' => accstage_translate('projects.data.ribeira_verde.list_tag', 'Habitação multifamiliar'),
            ],
            [
                'title' => accstage_translate('projects.data.camport.title', 'Projeto Fábrica Camport'),
                'slug' => 'projeto-fabrica-camport',
                'location' => accstage_translate('projects.data.camport.location', 'Guimarães, Portugal'),
                'year' => accstage_translate('projects.data.camport.year', ''),
                'hero_image' => $resolve_project_image('camport-hero.jpg'),
                'gallery_images' => $build_gallery_images('camport', 1, 12),
                'description' => [
                    accstage_translate('projects.data.camport.description_1', 'O design concilia a funcionalidade à organização e aos pressupostos de uma empresa com marca reconhecida na indústria do calçado. A pureza e força do betão jogam constantemente com o alumínio branco e as suas diversas transparências e texturas.'),
                    accstage_translate('projects.data.camport.description_2', 'A introdução da luz, interior e exterior, constitui um elemento importante no desenvolvimento da proposta. À noite, todas as fachadas assumem novas formas e dinâmicas. A complexidade da geometria presente no alçado principal foi desenvolvida através de um componente básico, o qual possui uma estreita relação com a empresa: a palmilha, que representa conforto.'),
                ],
                'cta_title' => accstage_translate('projects.data.camport.cta', 'Procura uma abordagem arquitetónica para um espaço industrial?'),
                'list_tag' => accstage_translate('projects.data.camport.list_tag', 'Industrial'),
            ],
            [
                'title' => accstage_translate('projects.data.quinta_peixoto.title', 'Quinta do Peixoto'),
                'slug' => 'maison-quinta-do-peixoto',
                'location' => accstage_translate('projects.data.quinta_peixoto.location', 'Mascotelos, Guimarães'),
                'year' => accstage_translate('projects.data.quinta_peixoto.year', 'Projeto 2019'),
                'hero_image' => $resolve_project_image('quinta-peixoto-hero.jpg'),
                'gallery_images' => $build_gallery_images('quinta-peixoto', 1, 5),
                'description' => [
                    accstage_translate('projects.data.quinta_peixoto.description_1', 'As residências da Quinta do Peixoto situam-se em Mascotelos, Guimarães. Este projeto inclui 13 lotes habitacionais, 78 residências e inúmeros espaços verdes. O ambiente é uma preocupação especial, uma vez que a biodiversidade e a sustentabilidade são duas das prioridades atuais.'),
                    accstage_translate('projects.data.quinta_peixoto.description_2', 'A classe energética A, as centrais elétricas, o conforto térmico e a existência de painéis solares não passam despercebidos. Mais uma vez, o minimalismo de todos os elementos é evidente.'),
                ],
                'cta_title' => accstage_translate('projects.data.quinta_peixoto.cta', 'Quer planear um conjunto habitacional com foco em sustentabilidade?'),
                'list_tag' => accstage_translate('projects.data.quinta_peixoto.list_tag', 'Masterplan residencial'),
            ],
            [
                'title' => accstage_translate('projects.data.canaima.title', 'Projeto Casa Canaima'),
                'slug' => 'projeto-casa-canaima',
                'location' => accstage_translate('projects.data.canaima.location', 'Nules, Espanha'),
                'year' => accstage_translate('projects.data.canaima.year', 'Construção concluída no início de 2008'),
                'hero_image' => $resolve_project_image('casa-canaima-hero.jpg'),
                'gallery_images' => $build_gallery_images('casa-canaima', 1, 5),
                'description' => [
                    accstage_translate('projects.data.canaima.description_1', 'Localizada na cidade de Nules, em Espanha, a Residencial Canaima aportou a possibilidade de incrementar qualidade de vida, conforto e tranquilidade a uma cidade com grande relação com a indústria cerâmica. No fundo propusemo-nos promover e construir este complexo habitacional por forma que a classe média tivesse acesso a novos e elevados padrões de qualidade de construção.'),
                    accstage_translate('projects.data.canaima.description_2', 'Trata-se de um condomínio fechado, com um total de 26 vivendas unifamiliares em banda, divididos em duas frentes construídas. A implantação dos edifícios permitiu a criação de um pátio interior comum para reforçar as relações e a segurança de todas as famílias que ali habitam, bem como a criação de um espaço de sombra, ideal para convívio e sensação térmica agradável em pleno mediterrâneo.'),
                    accstage_translate('projects.data.canaima.description_3', 'No que se refere às vivendas propriamente ditas, a moradia tipo integra 3 níveis, o Rés-do-chão com as áreas de lazer, cozinha, instalação sanitária e pátio exterior privado; o 1º andar com dois quartos com casa de banho integrada; e um 2º andar com outros dois quartos. Importa referir a existência de um 4º nível, a cave, sendo esta de caracter coletivo, contém garagens individuais, garantindo o estacionamento de dois veículos por unidade habitacional.'),
                    accstage_translate('projects.data.canaima.description_4', 'A construção foi concluída no início de 2008. Tratou-se de um projeto bem sucedido, o qual mantém nos dias de hoje as suas qualidades bem vivas, desde logo pelo bom estado do empreendimento.'),
                ],
                'cta_title' => accstage_translate('projects.data.canaima.cta', 'Procura desenvolver um conjunto habitacional com elegância e forte sentido de comunidade?'),
                'list_tag' => accstage_translate('projects.data.canaima.list_tag', 'Residencial'),
            ],
            [
                'title' => accstage_translate('projects.data.teixeira.title', 'Casa Teixeira'),
                'slug' => 'casa-teixeira',
                'location' => accstage_translate('projects.data.teixeira.location', ''),
                'year' => accstage_translate('projects.data.teixeira.year', 'Projeto 2009 · Construção 2010'),
                'hero_image' => $resolve_project_image('casa-teixeira-hero.jpg'),
                'gallery_images' => $build_gallery_images('casa-teixeira', 1, 6),
                'description' => [
                    accstage_translate('projects.data.teixeira.description_1', 'Construção de lote unifamiliar.'),
                    accstage_translate('projects.data.teixeira.description_2', 'O desenho enquadra-se nos valores herdados da modernidade, assentando na simplicidade formal, por meio de formas cruas e brutas, e no respeito entre os diversos materiais.'),
                    accstage_translate('projects.data.teixeira.description_3', 'A nível arquitetónico o projeto reflete um jogo constante entre uma volumetria fechada e compacta na sua aparência exterior, e um interior bastante aberto e iluminado. Para isso serve-se de pequenos pátios no interior imediato da sua volumetria, contendo vãos abertos de diferentes tamanhos na fachada exterior.'),
                    accstage_translate('projects.data.teixeira.description_4', 'Desta forma encurtou-se a visibilidade desde o exterior para o interior do lote, conferindo maior privacidade aos seus compartimentos.'),
                ],
                'cta_title' => accstage_translate('projects.data.teixeira.cta', 'Pretende uma moradia contemporânea com privacidade, luz e rigor material?'),
                'list_tag' => accstage_translate('projects.data.teixeira.list_tag', 'Habitação unifamiliar'),
            ],
            [
                'title' => accstage_translate('projects.data.lousada.title', 'Lousada Padel Park'),
                'slug' => 'lousada-padel-park',
                'location' => accstage_translate('projects.data.lousada.location', 'Lousada'),
                'year' => accstage_translate('projects.data.lousada.year', 'Projeto 2018'),
                'hero_image' => $resolve_project_image('lousada-padel-park-hero.jpg'),
                'gallery_images' => $build_gallery_images('lousada-padel-park', 1, 6),
                'description' => [
                    accstage_translate('projects.data.lousada.description_1', 'Pavilhão desportivo de padel.'),
                    accstage_translate('projects.data.lousada.description_2', 'Integrando o Complexo Desportivo de Lousada, o objetivo passava por adicionar, às valências existentes do espaço, uma nova componente desportiva, a qual tem um número cada vez maior de praticantes.'),
                    accstage_translate('projects.data.lousada.description_3', 'A proposta acrescenta uma nova massa construída com forte impacto visual. Desta forma, o conceito desenvolvido passou por tentar conferir o máximo de leveza ao novo edifício. Para isso, através da diferença de cotas entre os pavimentos, a fachada Este, aquela que tem mais força visual, perde altura e, ao mesmo tempo, a inclusão de fachadas falsas com árvores no seu interior permite desconstruir o pavilhão e relacioná-lo com a natureza.'),
                    accstage_translate('projects.data.lousada.description_4', 'A constante interação entre o edificado e a vegetação é um dos fatores diferenciais que o projeto apresenta. Mesmo no interior do pavilhão pretendeu-se reforçar essa relação por forma a que o pavilhão, apesar de totalmente coberto, tenha uma forte ligação ao espaço exterior.'),
                ],
                'cta_title' => accstage_translate('projects.data.lousada.cta', 'Quer desenvolver um equipamento desportivo com identidade arquitetónica forte?'),
                'list_tag' => accstage_translate('projects.data.lousada.list_tag', 'Equipamento desportivo'),
            ],
            [
                'title' => accstage_translate('projects.data.sort.title', 'Clínica Sort'),
                'slug' => 'clinica-sort',
                'location' => accstage_translate('projects.data.sort.location', ''),
                'year' => accstage_translate('projects.data.sort.year', 'Projeto 2019'),
                'hero_image' => $resolve_project_image('clinica-sort-hero.jpg'),
                'gallery_images' => $build_gallery_images('clinica-sort', 1, 11),
                'description' => [
                    accstage_translate('projects.data.sort.description_1', 'Edifício de Serviços de Segurança e Saúde no Trabalho.'),
                    accstage_translate('projects.data.sort.description_2', 'Este projeto refere-se a uma obra de reestruturação e restauração de interiores de um espaço anteriormente utilizado como estabelecimento comercial. Dotada de linhas dinâmicas e elegantes, a clínica SORT está agora estruturada de forma muito eficiente e, apesar do minimalismo dos elementos, alguns detalhes realçam a harmonia entre todos os espaços.'),
                ],
                'cta_title' => accstage_translate('projects.data.sort.cta', 'Procura transformar um espaço de serviços com eficiência e elegância contemporânea?'),
                'list_tag' => accstage_translate('projects.data.sort.list_tag', 'Serviços e saúde'),
            ],
            [
                'title' => accstage_translate('projects.data.m73.title', 'M73 Apartments'),
                'slug' => 'm73-apartments',
                'location' => accstage_translate('projects.data.m73.location', 'Felgueiras'),
                'year' => accstage_translate('projects.data.m73.year', 'Projeto 2018'),
                'hero_image' => $resolve_project_image('m73-apartments-hero.jpg'),
                'gallery_images' => $build_gallery_images('m73-apartments', 1, 3),
                'description' => [
                    accstage_translate('projects.data.m73.description_1', 'Edifício de habitação coletiva.'),
                    accstage_translate('projects.data.m73.description_2', 'Como objetivo propôs-se que o centro da cidade de Felgueiras oferecesse um edifício de habitação coletiva com altos padrões de elegância, conforto e design. O projeto apresenta um edifício rico em texturas, no qual a boa exposição solar e a privacidade dos espaços interiores estão fortemente ligados.'),
                ],
                'cta_title' => accstage_translate('projects.data.m73.cta', 'Pretende desenvolver habitação coletiva com conforto, elegância e forte presença urbana?'),
                'list_tag' => accstage_translate('projects.data.m73.list_tag', 'Habitação coletiva'),
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
