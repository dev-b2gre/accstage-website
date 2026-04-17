<?php
/**
 * Hero principal da homepage.
 *
 * @package accstage-custom
 */

$hero_image = 'https://lh3.googleusercontent.com/aida-public/AB6AXuD-zoLVvOBsu6z12Vi-mAs-RXUU2A098HrwPDR66J2lgqhUMJXhUt3MY3rFbjdwy67ZPBPOwYmFfVtRYCuz0176unQqZiY1lJ8HVFKAJHZCPN6m8fFjpPb82PgNsF3j8xXT3g4Bvt-2OaTXdtcEdIx9liwTutLah0uS1gBkczgNp964RPQISVRMPTncIyGbus6rr_cDDXOgW2IQ6Dq89Tz88UQtnQPLox5lxGR8i8U4TUJOwrqqYmNvAHTRtNU9stN3-dB_DBlMVjUL';
?>
<section class="acc-hero" style="background-image: url('<?php echo esc_url($hero_image); ?>');">
    <div class="acc-hero__inner">
        <h1 class="acc-title-xl"><?php esc_html_e('Projetamos permanência. Construímos com precisão.', 'accstage-custom'); ?></h1>
        <div>
            <p class="acc-lead"><?php esc_html_e('Da arquitetura à construção, desenvolvemos espaços com rigor técnico, linguagem contemporânea e atenção absoluta ao detalhe.', 'accstage-custom'); ?></p>
            <p><a class="acc-button acc-button--hero-discover" href="<?php echo esc_url(home_url('/projetos/')); ?>"><?php esc_html_e('Descobrir arquivo', 'accstage-custom'); ?></a></p>
        </div>
    </div>
</section>
