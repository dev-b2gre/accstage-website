<?php
/**
 * Grelha editorial de projetos.
 *
 * @package accstage-custom
 */

$projects = [
    [
        'title' => 'Residence 04',
        'location' => 'Kyoto, Japão',
        'class' => 'acc-project-card acc-project-card--wide',
        'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDwA9sB3mT_1DdOe2J-pKj9XqCrPM1VDf6SNPpi4oIiGqMsfc35EsOxCygYp2JXAoFTxMYHKptr-N_PyZWJED5HzXJjShE1YkAyrGvi5xLyWOjShgrCf-Cl5Jxm5wif7sRgN5Kc_rVniWTRltDJfmlud4zlOt3PFCEfA2K31g3kAA72EE_o5NhxELMktAotKwbvmVn1Yl98LisYoo6ywlbwLMNoc02FsUfAbh-ghqsdfhyqzaPqFvB-baFu6mSzX2BWscVj1-i8_Ch7',
    ],
    [
        'title' => 'The Vault',
        'location' => 'Berlim, Alemanha',
        'class' => 'acc-project-card acc-project-card--tall',
        'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBev21Wi2MHWa0_CI6l_csJVxUyaAsxmP0Lp3SpAKl8mYKWj2h0-ZxTXTvvKX7H-uY7GkIRl3eaoj2b-kyrymrlHe-tr2LZqvpOUYElar4X0kyRmgXcIV_mly4s0_UV02IuHp0aJwZREz7T4tfMEvyo1nMX-uHZG9yXw0OULWQK65MdZpRM9o4YYf3SmVxgpRmS7rwUXdH7Sx2_EdLxfplmqVbD6ce_Xkz4Cnxv623xwmazsdp-oQbDIISic3nbHxnua8INvkLxnhGW',
    ],
    [
        'title' => 'Cliff Pavilion',
        'location' => 'Big Sur, Califórnia',
        'class' => 'acc-project-card acc-project-card--panorama',
        'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC8_6EQILGRHaifwb1Xi4iBASunvISLnrwtj--tMUFwC207Y46w9jpN-dMg_0CndzdFCTSv3IctFNDs7Eojc-ntJ2whDqh4be0peFV5BvZG0NV3o49qxmjfaGWMvYXQr94fti_xKCiLUvUxWCwpVSJ240OU59A8-YewGKHRC9UuSlhKPkiFNuvJQrRJwS9fWNl-LIsy3Su0YHsZlkoQRWFO5gWx8HX-_tpTIHpKS2xp0aGn10NQrXwxl1ReTdJXwogTlYwI5JlBtAnk',
    ],
];
?>
<div class="acc-project-grid">
    <?php foreach ($projects as $project) : ?>
        <article class="<?php echo esc_attr($project['class']); ?>">
            <img src="<?php echo esc_url($project['image']); ?>" alt="<?php echo esc_attr($project['title']); ?>" loading="lazy"/>
            <div>
                <h3><?php echo esc_html($project['title']); ?></h3>
                <p><?php echo esc_html($project['location']); ?></p>
            </div>
        </article>
    <?php endforeach; ?>
</div>
