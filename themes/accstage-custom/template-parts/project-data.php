<?php
/**
 * Dados editoriais de projetos ACCSTAGE.
 *
 * @package accstage-custom
 */

if (! defined('ABSPATH')) {
    exit;
}

if (! function_exists('accstage_custom_get_projects_data')) {
    /**
     * Devolve a lista base de projetos para listagem e detalhe.
     *
     * @return array<int, array<string, mixed>>
     */
    function accstage_custom_get_projects_data(): array
    {
        return [
            [
                'title' => __('Obsidian House', 'accstage-custom'),
                'location' => __('Kyoto, Japão', 'accstage-custom'),
                'type' => __('Residencial', 'accstage-custom'),
                'year' => '2023',
                'area' => __('790 m²', 'accstage-custom'),
                'status' => __('Concluído', 'accstage-custom'),
                'slug' => 'obsidian-house',
                'class' => 'acc-project-card acc-project-card--wide',
                'hero_lead' => __('Um refúgio brutalista esculpido em betão e silêncio.', 'accstage-custom'),
                'description' => __('Concebido como peça monolítica, o projeto articula luz rasante, matéria crua e uma relação contínua entre interior e paisagem. A linguagem formal permanece contida, com foco na permanência e na escala humana.', 'accstage-custom'),
                'concept' => __('Peso e permanência', 'accstage-custom'),
                'cta_title' => __('Agendar conversa sobre um projeto com esta abordagem', 'accstage-custom'),
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBtektfDe5K5CkWyOeEXcERbPcGhICCwWSD1qMBrmZi4UFEShZjLKPY8HRtwoBVPsSqE80KPA8zaP-V7rwPtI0bMFTUHxtHuPUpOVnX-5yvMiV3Erm4TvaGt1vcP67O0wrHjaUvfPTwOsf_H01aeyVEisyMfoHCjwft9cPK0AhbYfErjWeONLw5Ks1d4d7LBneOZEPy8hhdRkcgUcqgFOb8Kc93PXOaPpdyJcYu8fLuoU8EnMcyi49-Erd_Jda7M2dGP1pLa6eS-6LH',
                'gallery' => [
                    'https://lh3.googleusercontent.com/aida-public/AB6AXuDW0BbryO-p-9V3gPHze_GSJqjDUqtRKdna8Uf38_q1Pyk8fy7mm8mYPPjtaMizXF734AF45XU9xaZMrsfdnX3UspLubGJuz_okU59EF9vth57QIlK48fUlH3uCIEVjPFuAekh-PUFb_gLV-MzGDKUCBwu2mjaD_CyTw4_EcdAfhrCs1tqPRnlG49E1Gk7bNPq0ttOOwdNU7Uv3foljxNyP1EP2-xllthbY26DX0QITKAQg8eEDHgRSHVmayL4CkLLKBhWFMVNviG7c',
                    'https://lh3.googleusercontent.com/aida-public/AB6AXuDWIxKlV2q_6jsxmbyBKWA4PVr7Sq3CUWsHJWpskLu-o76w0FPiQAdj2Hn5xDZSVg0M3ZAVmrXthkeyoZGrxd2CYGJybGLT4LuCZ6GrtZ87_lGE0G-ko25FY2fPKD1PlR9cPblx3BUX65toZ6igGuHFVrQuM9CB7K5dBuyAOBDytd9wxQkkdny51K3sTW7P0bE2xGyFB-dVfoZ2BeLpxWNN3MlFWAL1q2ukIlgvyqH7AoWRC2WcjizrtcSucvnQKpxqAuWj0-5EClWd',
                    'https://lh3.googleusercontent.com/aida-public/AB6AXuDz_CZJ49tt__GxNLQZjJAx2aHoW8F__MNRa0oIjmyldx0MrGxqsZUhp4k_Wars4EAuaMz0t468XG-BOS9DZvdrQGkJDAgQL3UXrrt0OI8rmRqz0jRfEM0_SnQ8zJU7TIDAl2RB7rJ5Et9RxMGnAysWPcvWVpB9zhfyGEJdLwIFAaI7ZvAF6DobRmq7sFUrjidtl3AAb0OYnXAjLgsloyzpjWJ5IMNrwKhFkEsal3O3mMcvMFOAq-Sy4A5t7opymjHkzPUUUYb5XVdy',
                ],
            ],
            [
                'title' => __('Pavilion X', 'accstage-custom'),
                'location' => __('Berlim, Alemanha', 'accstage-custom'),
                'type' => __('Cultural', 'accstage-custom'),
                'year' => '2024',
                'area' => __('460 m²', 'accstage-custom'),
                'status' => __('Em execução', 'accstage-custom'),
                'slug' => 'pavilion-x',
                'class' => 'acc-project-card acc-project-card--tall',
                'hero_lead' => __('Estrutura cívica mínima para arte e encontro.', 'accstage-custom'),
                'description' => __('Um pavilhão de exposição com circulação fluida e volumes de transição, pensado para acolher instalações imersivas num registo contido, sólido e intemporal.', 'accstage-custom'),
                'concept' => __('Ritmo espacial', 'accstage-custom'),
                'cta_title' => __('Explorar colaboração para espaços culturais', 'accstage-custom'),
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCg3GgLas3E6BoaTmQ1nYtvokBfWXf1xbNe9zkVBo-a4tUjzcpwsj0ZE69FGfKD4N0OF_Z1outNIiwjma_OVmYyUa67eADE00x_w3KLrjfTKjG7IkjQIHLDdBCwbQ1_ZTlQD6IcLmo12r0zFMJCcXaC-NR53VmVjBlkOIo6hjf-slEf59_Gdu-76n0d3ufZJUKqYem3A6CkezEu8xR09vbNyStc8m_oB7PtQtfMktJLEOt4ULBuv-3KF2BRST2zMRL-YBb_QvaQv-uV',
                'gallery' => [],
            ],
            [
                'title' => __('Brutal Form 04', 'accstage-custom'),
                'location' => __('Londres, Reino Unido', 'accstage-custom'),
                'type' => __('Comercial', 'accstage-custom'),
                'year' => '2022',
                'area' => __('1 120 m²', 'accstage-custom'),
                'status' => __('Concluído', 'accstage-custom'),
                'slug' => 'brutal-form-04',
                'class' => 'acc-project-card acc-project-card--square',
                'hero_lead' => __('Espaço comercial monolítico com identidade editorial.', 'accstage-custom'),
                'description' => __('O conjunto trabalha textura, sombra e continuidade material para uma experiência de marca discreta, com foco no produto e na atmosfera arquitetónica.', 'accstage-custom'),
                'concept' => __('Matéria e contraste', 'accstage-custom'),
                'cta_title' => __('Falar connosco sobre projetos comerciais', 'accstage-custom'),
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB8Kf2rhtEZwX1--MvU0UoR0CSoka_lYnk1IZJAyDsjMJfd5IB4MZjutqD_F_4GN1cioDj9bqDm6rUGGEEKljc3QvjW8B2QI86I1icaKAlCx-IqN0iIVFq-d3HzPlrN2apAx5uaTVLTXZfjg7q3KIC2uixj9I8MOUDreST0hQJb0TCc3eRKj6JSCoEx4q4l1lHD-p8ZVEkg5t4tJR-kdACe2kAZZEv20P3emfLt7N5cXx_quSayg7FDLC4u9Iajl5Qvif6tJDBbMCYV',
                'gallery' => [],
            ],
            [
                'title' => __('Gallery Mono', 'accstage-custom'),
                'location' => __('Nova Iorque, EUA', 'accstage-custom'),
                'type' => __('Arquivo', 'accstage-custom'),
                'year' => '2021',
                'area' => __('640 m²', 'accstage-custom'),
                'status' => __('Concluído', 'accstage-custom'),
                'slug' => 'gallery-mono',
                'class' => 'acc-project-card acc-project-card--panorama',
                'hero_lead' => __('Galeria de linhas austeras para coleção privada.', 'accstage-custom'),
                'description' => __('Projeto de arquivo e exposição com um percurso sequencial de luz controlada, proporções rigorosas e linguagem tectónica de baixa expressão ornamental.', 'accstage-custom'),
                'concept' => __('Luz curada', 'accstage-custom'),
                'cta_title' => __('Descobrir o próximo projeto do arquivo', 'accstage-custom'),
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAryhy7iU5MeBoCmkCg-z5u39VmVLVJPd4HRm9TRW0-LEcpbGEoeK6WTUS-8mLo7nCkJCh5KzcfxOTFt0_X0DL4C9vhcqvkJ4TptJDgxcgXnQAWg6mPWJl8nMnr0yF5Kb2yT0a6EfPCknD8YdaXCrud77x0uJ4XlqC_kATR4HhaHLR7n05DusMPaPf4lHRlIfT0hGUNMS2tqOCGOjvT-dJSe9REXDCDvW1wmrr1_m-MD6-Ts5ldlzo4TN5mbVys9-ai-EvuJgf8CzKk',
                'gallery' => [],
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
