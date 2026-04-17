import Image from "next/image";

const projectCards = [
  {
    title: "RESIDENCE 04",
    location: "Kyoto, Japan",
    image:
      "https://lh3.googleusercontent.com/aida-public/AB6AXuDwA9sB3mT_1DdOe2J-pKj9XqCrPM1VDf6SNPpi4oIiGqMsfc35EsOxCygYp2JXAoFTxMYHKptr-N_PyZWJED5HzXJjShE1YkAyrGvi5xLyWOjShgrCf-Cl5Jxm5wif7sRgN5Kc_rVniWTRltDJfmlud4zlOt3PFCEfA2K31g3kAA72EE_o5NhxELMktAotKwbvmVn1Yl98LisYoo6ywlbwLMNoc02FsUfAbh-ghqsdfhyqzaPqFvB-baFu6mSzX2BWscVj1-i8_Ch7",
    className: "project-large"
  },
  {
    title: "THE VAULT",
    location: "Berlin, Germany",
    image:
      "https://lh3.googleusercontent.com/aida-public/AB6AXuBev21Wi2MHWa0_CI6l_csJVxUyaAsxmP0Lp3SpAKl8mYKWj2h0-ZxTXTvvKX7H-uY7GkIRl3eaoj2b-kyrymrlHe-tr2LZqvpOUYElar4X0kyRmgXcIV_mly4s0_UV02IuHp0aJwZREz7T4tfMEvyo1nMX-uHZG9yXw0OULWQK65MdZpRM9o4YYf3SmVxgpRmS7rwUXdH7Sx2_EdLxfplmqVbD6ce_Xkz4Cnxv623xwmazsdp-oQbDIISic3nbHxnua8INvkLxnhGW",
    className: "project-offset"
  },
  {
    title: "CLIFF PAVILION",
    location: "Big Sur, California",
    image:
      "https://lh3.googleusercontent.com/aida-public/AB6AXuC8_6EQILGRHaifwb1Xi4iBASunvISLnrwtj--tMUFwC207Y46w9jpN-dMg_0CndzdFCTSv3IctFNDs7Eojc-ntJ2whDqh4be0peFV5BvZG0NV3o49qxmjfaGWMvYXQr94fti_xKCiLUvUxWCwpVSJ240OU59A8-YewGKHRC9UuSlhKPkiFNuvJQrRJwS9fWNl-LIsy3Su0YHsZlkoQRWFO5gWx8HX-_tpTIHpKS2xp0aGn10NQrXwxl1ReTdJXwogTlYwI5JlBtAnk",
    className: "project-wide"
  }
];

export default function HomePage() {
  return (
    <>
      <section className="hero">
        <Image
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-zoLVvOBsu6z12Vi-mAs-RXUU2A098HrwPDR66J2lgqhUMJXhUt3MY3rFbjdwy67ZPBPOwYmFfVtRYCuz0176unQqZiY1lJ8HVFKAJHZCPN6m8fFjpPb82PgNsF3j8xXT3g4Bvt-2OaTXdtcEdIx9liwTutLah0uS1gBkczgNp964RPQISVRMPTncIyGbus6rr_cDDXOgW2IQ6Dq89Tz88UQtnQPLox5lxGR8i8U4TUJOwrqqYmNvAHTRtNU9stN3-dB_DBlMVjUL"
          alt="Brutalist concrete luxury mansion exterior at dusk"
          fill
          className="hero-image"
          priority
        />
        <div className="hero-overlay" />

        <div className="container hero-content">
          <h1>
            MONOLITHIC
            <br />
            STRUCTURES
          </h1>
          <div className="hero-side">
            <p>
              Architecting permanence in an ephemeral world. We shape negative space to frame
              existence.
            </p>
            <a href="#">Discover Our Work</a>
          </div>
        </div>
      </section>

      <section className="philosophy">
        <div className="container philosophy-grid">
          <div>
            <h2>
              SPACE IS NOT EMPTY.
              <br />
              IT IS A MATERIAL.
            </h2>
            <p>
              We reject the disposable nature of modern construction. Our studio focuses on
              geometric purity, raw materials, and the profound silence created by intentional
              design.
            </p>
            <a href="#">Read the Manifesto</a>
          </div>

          <div className="philosophy-image-wrap">
            <Image
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuAaCRkLDf2Wpmod6htDGD9Cf--g5LoY7I8w1jX-TcOtfCa57zPSvTCUaNPAE_XW11x_xBBsFKuNynLmVswIemVCyaA1rmVnIl5qpPtD1jVFQdmKf2lQmDjC-UF2USP7zRryjKocbSB9ElJauWEpvwVw8SWylgDL2DjXZyMV6fPmziQelEG3evGDqCbijvpiozj3OOsgUhWDmEKVuG8jkQqQvM7WeKkhDUwvaqk4Ccxe24MQUQC9VK447qkYcJW39C65y7OML0ihdLr0"
              alt="Abstract interior architectural details"
              width={900}
              height={1200}
              className="philosophy-image"
            />
          </div>
        </div>
      </section>

      <section className="archive">
        <div className="container">
          <div className="archive-head">
            <h2>SELECTED ARCHIVE</h2>
            <span>2018 — 2024</span>
          </div>

          <div className="archive-grid">
            {projectCards.map((project) => (
              <article key={project.title} className={`project-card ${project.className}`}>
                <Image src={project.image} alt={project.title} width={1600} height={900} />
                <div className="project-meta">
                  <div>
                    <h3>{project.title}</h3>
                    <p>{project.location}</p>
                  </div>
                  <span aria-hidden>→</span>
                </div>
              </article>
            ))}
          </div>
        </div>
      </section>
    </>
  );
}
