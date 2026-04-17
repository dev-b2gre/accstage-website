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
        return [
            [
                'title' => __('2URBA', 'accstage-custom'),
                'slug' => '2urba',
                'location' => '',
                'year' => '',
                'hero_image' => '',
                'gallery_images' => ['', '', ''],
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
                'hero_image' => '',
                'gallery_images' => ['', '', ''],
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
                'hero_image' => '',
                'gallery_images' => ['', '', ''],
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
                'hero_image' => '',
                'gallery_images' => ['', '', ''],
                'description' => [
                    __('As residências da Quinta do Peixoto situam-se em Mascotelos, Guimarães. Este projeto inclui 13 lotes habitacionais, 78 residências e inúmeros espaços verdes. O ambiente é uma preocupação especial, uma vez que a biodiversidade e a sustentabilidade são duas das prioridades atuais.', 'accstage-custom'),
                    __('A classe energética A, as centrais elétricas, o conforto térmico e a existência de painéis solares não passam despercebidos. Mais uma vez, o minimalismo de todos os elementos é evidente.', 'accstage-custom'),
                ],
                'cta_title' => __('Quer planear um conjunto habitacional com foco em sustentabilidade?', 'accstage-custom'),
                'list_tag' => __('Masterplan residencial', 'accstage-custom'),
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
