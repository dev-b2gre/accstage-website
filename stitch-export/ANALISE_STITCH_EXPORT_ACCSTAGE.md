# Análise técnica do export `stitch-export/` (base para implementação Next.js)

## 1) Inventário do material encontrado

### 1.1 Páginas (HTML exportado)
Foram encontrados 12 ficheiros de página (`code.html`) distribuídos por variantes base e refined:

- `homepage_accstage/code.html`
- `homepage_accstage_refined/code.html`
- `about_us_accstage/code.html`
- `about_us_accstage_refined/code.html`
- `services_accstage/code.html`
- `services_accstage_refined/code.html`
- `portfolio_accstage/code.html`
- `portfolio_accstage_refined/code.html`
- `contact_accstage/code.html`
- `contact_accstage_refined/code.html`
- `luxury_villa_project_accstage/code.html`
- `project_detail_accstage_refined/code.html`

### 1.2 Outros ficheiros de referência
- `estrutura_de_componentes_accstage_refined.md` (especificação de componentes e princípios da versão refined).
- `monolith_architectural/DESIGN.md` e `bespoke_monolith/DESIGN.md` (estratégia visual e de design system “Monolith”).
- `screen.png` em cada pasta de página (captura visual por versão).
- `accstage_main_black.png/screen.png` (asset isolado de marca/logótipo em preto).

---

## 2) Versões principais vs versões refined

### 2.1 O que distingue as versões base
As versões base (`*_accstage`) usam, de forma consistente:
- Tipografia `Space Grotesk + Manrope`.
- Navegação em uppercase (ex.: PROJECTS, SERVICES, STUDIO, CONTACT).
- Maior presença de secções “template-like” e linguagem mais genérica de site corporativo.

### 2.2 O que distingue as versões refined
As versões refined (`*_accstage_refined`) mostram uma direção mais autoral e editorial:
- Tipografia `Space Grotesk + Newsreader` (mais “luxo editorial”).
- Linguagem mais conceptual e premium (“Monolithic Structures”, “Initiate Commission”, “Archive”).
- Nav/footer mais coesos entre páginas refined.
- Padrões de contraste, hairlines, tracking e composição assimétrica mais consistentes.
- Existência de `project_detail_accstage_refined`, sem equivalente refined no nome antigo `luxury_villa_project_accstage` (sinal de evolução do modelo de detalhe de projeto).

### 2.3 Recomendação de baseline
**Usar a família refined como base primária** para implementação.

Mapeamento recomendado:
- Home: `homepage_accstage_refined`
- Sobre/Studio: `about_us_accstage_refined`
- Serviços: `services_accstage_refined`
- Portfolio/Arquivo: `portfolio_accstage_refined`
- Contacto: `contact_accstage_refined`
- Detalhe de projeto: `project_detail_accstage_refined`

**Usar versões base apenas como fallback de conteúdo/estrutura** quando faltar detalhe visual no refined (por exemplo, comparar `luxury_villa_project_accstage` com `project_detail_accstage_refined` para enriquecer narrativa de case study).

---

## 3) Componentes reutilizáveis identificados

### 3.1 Shell global
1. **Header / Navbar (sticky/fixed)**
   - Logo à esquerda, navegação central/direita, CTA “Inquire” em algumas páginas refined.
2. **Footer monumental**
   - Marca em destaque + links sociais + legais + contacto.

### 3.2 Componentes de conteúdo recorrentes
1. **Hero monolítico**
   - Headline ampla, subheadline editorial, alto contraste, imagem full-bleed ou bloco preto.
2. **Eyebrow/label técnico**
   - Texto pequeno, uppercase, tracking largo.
3. **Cards de projeto (arquivo/portfolio)**
   - Imagem com hover discreto + metadados (nome, localização, categoria).
4. **Bloco de pilares/valores**
   - Rigor / Qualidade / Trust / Detail em grelha/lista.
5. **Bloco manifesto / texto editorial longo**
   - Corpo serifado, largura de leitura controlada.
6. **Ficha técnica de projeto**
   - Localização, área, ano, tipologia, etc. em grelha limpa.
7. **Galeria de imagens em ritmo alternado**
   - Variação de proporções para evitar grelha uniforme.
8. **CTA final de conversão premium**
   - Ex.: “Initiate Commission”.
9. **Formulário de contacto minimalista**
   - Input com hairline e estética “sem caixa”.

### 3.3 Componentes utilitários
- `SectionContainer` com larguras máximas consistentes (`max-w-7xl`, etc.).
- `MonolithButton` (primary/secondary, radius 0).
- `HairlineDivider` (0.5px).
- `PageIntro` (eyebrow + title + lead).
- `StatSpecItem` para metadados técnicos.

---

## 4) Padrões visuais que se repetem

1. **Monocromia premium** (preto, branco, cinzas tonais).
2. **Sharp edges (0px radius)** em cartões, imagens e botões.
3. **Uso forte de tracking e uppercase** em labels/navigation.
4. **Escala tipográfica alta em hero** e títulos curtos de grande impacto.
5. **Separação por espaço/tonalidade** (não por bordas fortes).
6. **Hairlines subtis** como detalhe arquitetónico.
7. **Assimetria controlada** nas composições de secção e nas grelhas de projetos.
8. **Imagens arquitetónicas de alto impacto** (betão, vidro, luz, interiores premium).

---

## 5) Sistema implícito: layout, espaçamento, tipografia e contraste

### 5.1 Layout
- Grid principal de inspiração 12 colunas (confirmado nos documentos de design).
- Containers largos (`max-w-*`) e forte uso de espaço negativo.
- Quebra para 1 coluna em mobile com manutenção de hierarquia tipográfica.

### 5.2 Espaçamento
Padrões recorrentes em refined:
- `px-8`, `px-6`, `py-24`, `py-32`, `pt-24`, `gap-8`, `gap-12`, `gap-16`.
- Blocos com ritmos amplos para sensação de “galeria”/luxo.

### 5.3 Tipografia
- **Refined (preferencial):** Space Grotesk (display/labels) + Newsreader (texto editorial).
- **Base (legado):** Space Grotesk + Manrope.

### 5.4 Contraste
- Fundo claro (`surface` ~ #f9f9f9), texto escuro (`#000` / `on-surface`).
- Blocos escuros de contraste para CTAs e momentos de marca.
- Cinzas tonais para profundidade (surface-container-low/high/etc.).

---

## 6) Assets e ficheiros de referência principal

### 6.1 Referência estrutural e técnica (prioridade alta)
1. `estrutura_de_componentes_accstage_refined.md`
2. `homepage_accstage_refined/code.html`
3. `project_detail_accstage_refined/code.html`
4. `portfolio_accstage_refined/code.html`
5. `about_us_accstage_refined/code.html`
6. `services_accstage_refined/code.html`
7. `contact_accstage_refined/code.html`

### 6.2 Referência conceptual (prioridade média/alta)
- `bespoke_monolith/DESIGN.md`
- `monolith_architectural/DESIGN.md`

### 6.3 Referência visual de validação
- `*/screen.png` (comparação visual página a página).
- `accstage_main_black.png/screen.png` para diretriz de marca em preto.

### 6.4 Nota sobre imagens
As imagens estão ligadas maioritariamente por URLs remotas (`lh3.googleusercontent.com`), o que implica planeamento de migração para assets locais ou remote patterns no `next/image`.

---

## 7) O que parece protótipo vs design final

### 7.1 Mais próximo de protótipo
- Conjunto base (`*_accstage`) pela linguagem mais genérica, menor consistência editorial e tipográfica relativamente ao conceito “Monolith”.
- `luxury_villa_project_accstage` parece versão intermédia do template de detalhe antes da consolidação refined.

### 7.2 Mais próximo de design final
- Conjunto refined (`*_accstage_refined` + `project_detail_accstage_refined`) pela consistência visual, tom de marca e alinhamento com os documentos estratégicos.

---

## 8) Proposta de arquitetura para implementação (Next.js + TS + Tailwind + App Router)

### 8.1 Princípios
- Implementar **fielmente** o export refined (sem reinventar layout nesta fase).
- Separar conteúdo (copy, listas, metadados) da camada visual.
- Componentização por secções e por entidades (project, service, team member).

### 8.2 Rotas (App Router)
- `/` (homepage)
- `/studio` (sobre nós / filosofia)
- `/servicos`
- `/arquivo` (portfolio)
- `/arquivo/[slug]` (detalhe projeto)
- `/contacto`
- opcionais: `/politica-privacidade`, `/termos`

### 8.3 Estrutura de pastas sugerida para `web/`

```txt
web/
  app/
    (site)/
      layout.tsx
      page.tsx                      # Home
      studio/page.tsx
      servicos/page.tsx
      arquivo/page.tsx
      arquivo/[slug]/page.tsx
      contacto/page.tsx
      politica-privacidade/page.tsx
      termos/page.tsx
    globals.css

  components/
    layout/
      site-header.tsx
      site-footer.tsx
      page-shell.tsx
    ui/
      monolith-button.tsx
      hairline-divider.tsx
      section-heading.tsx
      eyebrow-label.tsx
      media-frame.tsx
    sections/
      home/
        hero-monolith.tsx
        archive-preview.tsx
        pillars-grid.tsx
        final-cta.tsx
      studio/
        studio-hero.tsx
        pillars-section.tsx
        architects-grid.tsx
      services/
        services-hero.tsx
        services-list.tsx
      portfolio/
        archive-grid.tsx
      project/
        project-hero.tsx
        project-specs.tsx
        project-narrative.tsx
        project-gallery.tsx
        next-project.tsx
      contact/
        contact-hero.tsx
        contact-form.tsx
        contact-details.tsx

  content/
    site.ts
    navigation.ts
    home.ts
    studio.ts
    services.ts
    archive.ts
    contact.ts

  lib/
    tokens.ts
    cn.ts
    image.ts

  public/
    images/
      projects/
      studio/
      brand/
```

---

## 9) Design tokens sugeridos (derivados do export)

### 9.1 Cores
- `--color-surface: #f9f9f9`
- `--color-surface-low: #f3f3f3`
- `--color-surface-high: #e8e8e8`
- `--color-surface-highest: #e2e2e2`
- `--color-white: #ffffff`
- `--color-black: #000000`
- `--color-primary-container: #3b3b3b`
- `--color-outline: #777777`
- `--color-outline-variant: #c6c6c6`
- `--color-secondary: #5f5e5e`

### 9.2 Tipografia
- `--font-display: 'Space Grotesk', sans-serif`
- `--font-editorial: 'Newsreader', serif`
- Escala sugerida:
  - display-xl: clamp(3rem, 8vw, 8rem)
  - display-lg: clamp(2.4rem, 6vw, 5rem)
  - heading-md: 1.5rem
  - body-lg: 1rem / line-height 1.6
  - label-sm: 0.75rem uppercase tracking 0.1em

### 9.3 Espaçamento (base 8)
- 4, 8, 12, 16, 24, 32, 48, 64, 96, 128

### 9.4 Raios, bordas, sombra
- `radius: 0`
- `hairline: 0.5px`
- Sombra apenas ambiente (baixa opacidade) em elementos flutuantes.

### 9.5 Motion
- Transições 200–400ms easing suave.
- Revelação por opacidade/translate curta em scroll.

---

## 10) Secções sugeridas por página

### 10.1 Homepage
1. Header fixo
2. Hero monolítico (headline + subheadline + media)
3. Bloco manifesto curto (“Space is not empty…”) 
4. Preview de arquivo/projetos (3–4 itens)
5. Bloco de pilares (Rigor, Permanência, Precisão)
6. CTA final (“Initiate Commission”)
7. Footer monumental

### 10.2 Studio / Sobre
1. Hero editorial
2. Manifesto da marca
3. Pilares (Rigor, Quality, Trust, Detail)
4. Equipa/arquitetos
5. CTA de contacto
6. Footer

### 10.3 Serviços
1. Hero de posicionamento
2. Lista de serviços em blocos minimalistas
3. Metodologia/processo
4. CTA para consulta
5. Footer

### 10.4 Arquivo (portfolio)
1. Hero/intro
2. Grelha editorial de projetos
3. Filtros/tags (opcional fase 2)
4. Footer

### 10.5 Detalhe de projeto
1. Hero com imagem de capa
2. Ficha técnica
3. Narrativa editorial (conceito/materialidade)
4. Galeria ritmada
5. Next project
6. Footer

### 10.6 Contacto
1. Hero curto
2. Formulário minimalista
3. Dados diretos (HQ, email, telefone)
4. Footer

---

## 11) Inconsistências e ambiguidades encontradas

1. **Idioma:** conteúdo do export está maioritariamente em inglês; objetivo final pede português europeu.
2. **Nomenclatura de rotas/menu:** coexistem “Projects”, “Archive”, “Philosophy”, “Studio”, “Contact”, “Inquire”. É necessário normalizar IA final.
3. **Duplicação de ícones Material Symbols** (links repetidos em vários HTML).
4. **Sistema tipográfico misto entre base e refined** (Manrope vs Newsreader).
5. **Detalhe de projeto com duas versões conceptualmente próximas** (`luxury_villa_project_accstage` vs `project_detail_accstage_refined`) com estrutura não totalmente idêntica.
6. **Dependência de imagens remotas** sem pipeline de assets final.
7. **Diferenças de casing e tom copywriting** (UPPERCASE integral vs sentence case).

---

## 12) Plano faseado de implementação

### Fase 0 — Consolidação de referência (antes de codar layout final)
- Congelar baseline refined e mapear cada secção para componentes.
- Definir matriz de decisão para ambiguidades (idioma, menu, nomenclatura).

### Fase 1 — Fundação técnica
- Inicializar `web/` com Next.js + TypeScript + Tailwind + App Router.
- Configurar tokens globais (cores, tipo, spacing, hairline).
- Criar shell global (`Header`, `Footer`, `PageShell`).

### Fase 2 — Homepage e navegação
- Implementar homepage refined completa.
- Ajustar comportamento sticky, estados hover e ritmo vertical.

### Fase 3 — Páginas institucionais
- Implementar Studio, Serviços e Contacto.
- Consolidar formulários e secções textuais em PT-PT.

### Fase 4 — Arquivo e detalhe de projeto
- Implementar listagem `/arquivo` + página dinâmica `/arquivo/[slug]`.
- Modelar conteúdo via ficheiros TypeScript (ou CMS numa fase seguinte).

### Fase 5 — Polimento premium
- Microinterações, acessibilidade, SEO, performance de imagem.
- QA visual contra `screen.png` (pixel-approximation, não pixel-perfect rígido).

---

## 13) Recomendação final (por onde começar)

1. **Começar por `homepage_accstage_refined`** para fixar o sistema visual (tipografia, escala, contraste, espaço negativo, CTA).
2. Em paralelo, fechar **decisões de IA e linguagem PT-PT** (menu, labels, tom de voz).
3. Depois implementar o **shell global** e só então escalar para Studio/Serviços/Arquivo.
4. Deixar `project_detail_accstage_refined` como referência principal de case study e usar `luxury_villa_project_accstage` apenas para complementar blocos narrativos se necessário.

> Em síntese: o export já contém um “design direction” suficientemente sólido na linha refined; o risco principal não é falta de design, mas sim incoerência de nomenclatura/conteúdo entre variantes.
