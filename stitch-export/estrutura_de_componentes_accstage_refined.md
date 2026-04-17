# Especificação de Componentes e Estrutura: Accstage Refined

Este documento define a estrutura técnica e os princípios de design para a implementação do ecossistema digital da Accstage.

---

## 1. Fundamentos (Design Tokens)
- **Paleta:** Branco Puro (#FFFFFF), Preto Absoluto (#000000), Cinza Tonal (#F9F9F9 / #F2F2F2).
- **Tipografia:** 
    - **Títulos:** Space Grotesk (Bold/Medium). Tracking apertado (-0.05em).
    - **Corpo/Serif:** Newsreader ou Times New Roman (para citações e corpo de texto editorial).
    - **Labels/UI:** Space Grotesk (Bold, Uppercase). Tracking largo (0.1em).
- **Grids:** Sistema de 12 colunas com margens largas (min 80px) para criar o aspeto "Monolítico".

---

## 2. Componentes Globais

### 2.1 Header (Fixed Navigation)
- **Estrutura:** Layout flexível entre o logótipo (esquerda), links de navegação (centro) e CTA "Inquire" (direita).
- **Estilo:** Fundo semi-transparente (backdrop-blur) ou sólido branco com borda inferior de 0.5px.
- **Comportamento:** Sticky. Links com animação de underline ou mudança de opacidade no hover.

### 2.2 Footer (Monumental Footer)
- **Estrutura:** Logótipo em escala massiva (oversized) em marca de água ou baixa opacidade, seguido por colunas de links (Social, Legal) e contactos.
- **Estilo:** Tipografia Space Grotesk em tamanho extra-largo para o nome da marca. Bordas superiores finas para separação.

---

## 3. Secções de Página (Módulos)

### 3.1 Hero Section (Impacto Arquitetónico)
- **Estrutura:** Composição assimétrica. Título monumental sobrepondo parcialmente imagens de alta qualidade ou espaços vazios.
- **Visual:** Foco em tipografia bold e imagens que destacam texturas (betão, vidro, luz).
- **CTA:** Botão discreto com ícone de seta (arrow-right).

### 3.2 Bloco de Serviços (Foco Técnico)
- **Estrutura:** Cards minimalistas ou lista numerada (01, 02, 03).
- **Conteúdo:** Título curto, breve descrição técnica e link para detalhe.
- **Estilo:** Uso de "Hairlines" (linhas de 0.5px) para separar os itens, reforçando o rigor.

### 3.3 Grelha de Portfólio (Editorial Layout)
- **Estrutura:** Grelha mista (Bento Grid ou alvenaria controlada) onde nem todas as imagens têm o mesmo rácio.
- **Interação:** Hover revela o nome do projeto e localização de forma subtil.
- **Tipografia:** Labels em uppercase para categorias de projeto.

### 3.4 Página Individual de Projeto (Case Study)
- **Estrutura:** 
    1. Hero com imagem de capa full-bleed.
    2. Bloco de especificações (Localização, Ano, Área, Categoria) em grelha limpa.
    3. Narrativa editorial (Texto serifado) intercalada com galerias de detalhes e texturas.
    4. Secção "Next Project" no final.

### 3.5 Secção Sobre Nós (The Architects of Intent)
- **Estrutura:** Retratos em P&B de alta fidelidade com títulos de cargo discretos.
- **Estilo:** Manifesto da marca em tipografia de grande escala, focada em valores como "Rigor" e "Permanência".

### 3.6 CTA Final (Initiate Commission)
- **Estrutura:** Bloco de alto contraste (geralmente fundo preto com texto branco).
- **Mensagem:** Convite à exclusividade (ex: "Limited commissions annually").
- **Estilo:** Minimalismo extremo.

---

## 4. Notas de Implementação (Código)
- **Animações:** Utilizar `Framer Motion` ou similar para transições de opacidade e "slide-up" suave ao fazer scroll.
- **Imagens:** Implementar `object-fit: cover` e suporte para resoluções Retina.
- **Responsividade:** O layout deve transitar de 12 colunas para 4 ou 1 coluna em mobile, mantendo o tamanho generoso da tipografia para legibilidade.