```markdown
# Design System Document: The Bespoke Monolith

## 1. Overview & Creative North Star
The Creative North Star for this design system is **"The Bespoke Monolith."** 

In high-end architecture, a monolith is not merely a block of stone; it is a statement of permanence, precision, and intentionality. This design system rejects the "disposable" feel of modern web templates. We treat digital space as a premium material—negative space is not "empty," it is a luxury. 

By leveraging **extreme minimalism**, we force the user to focus on the weight of the typography and the quality of the imagery. We break the rigid, predictable rhythms of standard grids through **intentional asymmetry** and **overlapping elements**, creating a digital experience that feels curated and editorial rather than manufactured.

---

## 2. Colors & Tonal Depth
The palette is rooted in a high-contrast, monochromatic foundation. It utilizes pure blacks and pristine whites to establish authority, using subtle greys to provide architectural depth.

### The Palette
- **Primary (`#000000`):** The weight of the system. Used for headlines and primary actions.
- **Surface (`#F9F9F9`):** Our primary "canvas." It is slightly off-white to reduce eye strain while maintaining a clinical, gallery-like feel.
- **Secondary/Tertiary:** Functional greys (`#5F5E5E`, `#3B3B3C`) used for metadata and supporting elements.

### The "No-Line" Rule
Standard 1px borders are strictly prohibited for defining sections. Boundaries must be established through:
1.  **Background Color Shifts:** Use `surface-container-low` (`#F3F3F3`) against the base `surface` (`#F9F9F9`) to define content areas.
2.  **Negative Space:** Use the Spacing Scale to create "voids" that act as natural dividers.

### Glass & Gradient Implementation
To avoid a "flat" appearance, main CTAs or Hero sections may use a subtle gradient transition from `primary` (`#000000`) to `primary-container` (`#3B3B3B`). For floating navigation or overlays, utilize **Glassmorphism**: 
- **Fill:** `surface-container-lowest` (`#FFFFFF`) at 70-80% opacity.
- **Effect:** Background blur (20px–40px) to allow the "monolithic" structures beneath to bleed through.

---

## 3. Typography
The typographic soul of this system lies in the tension between the technical and the literary.

- **Display & Headlines (Space Grotesk):** An architectural, geometric sans-serif. It should be used with tight letter-spacing and significant scale to feel like inscriptions on stone.
- **Body & Titles (Newsreader):** A sophisticated serif that provides an editorial, "heavy-paper" feel. This conveys the brand's precision and legacy.

**Hierarchy Strategy:**
- **Display-LG (3.5rem):** Reserved for hero moments. Use `Space Grotesk` Bold.
- **Body-LG (1rem):** Used for narrative descriptions in `Newsreader`. Increase line-height to 1.6 for an airy, luxurious reading experience.
- **Label-MD (0.75rem):** Technical data or eyebrow headers. Always `Space Grotesk` All-Caps with 0.1rem letter spacing.

---

## 4. Elevation & Depth
In a system with a **0px roundedness scale**, depth cannot be achieved through soft corners. It must be achieved through **Tonal Layering**.

### The Layering Principle
Treat the UI as stacked sheets of fine material. 
- **Base Layer:** `surface` (`#F9F9F9`)
- **Card/Content Layer:** `surface-container-lowest` (`#FFFFFF`)
- **Foreground/Detail Layer:** `surface-container-high` (`#E8E8E8`)

### Ambient Shadows
Shadows should rarely be used. When a floating state is required (e.g., a custom cursor or a modal), use a "Shadowless Lift":
- **Blur:** 60px+ 
- **Opacity:** 4%–6% of `on-surface` (`#1A1C1C`).
- **Purpose:** To create a sense of atmospheric presence rather than a physical drop-shadow.

### The "Hairline" Detail
While 1px borders are forbidden for sectioning, **0.5px hairlines** using the `outline-variant` (`#C6C6C6`) are encouraged for decorative, architectural framing or separating distinct data points within a container.

---

## 5. Components

### Buttons
- **Primary:** Solid `primary` (`#000000`) background, `on-primary` (`#E2E2E2`) text. **0px radius.**
- **Secondary:** Transparent background with a 0.5px `outline` (`#777777`). 
- **Interaction:** On hover, the primary button should shift to `primary-fixed` (`#5E5E5E`) with a subtle 200ms ease.

### Input Fields
- **Styling:** No enclosing boxes. Use a single 0.5px hairline at the bottom (`outline-variant`).
- **Typography:** Labels in `label-sm` (Space Grotesk, All-Caps). Input text in `body-lg` (Newsreader).
- **Error State:** Use `error` (`#BA1A1A`) only for the hairline and helper text.

### Cards & Lists
- **Rule:** Absolute prohibition of divider lines.
- **Separation:** Use `surface-container` tiers or varying heights in an asymmetric grid. For example, a list of architectural projects should feature staggered image sizes and alternating text alignments to create a "rhythmic" flow.

### Chips
- Use `secondary-container` (`#D6D4D3`) for the background.
- Keep them rectangular (0px radius). They should feel like small stone blocks or "tags" on a blueprint.

---

## 6. Do’s and Don’ts

### Do:
- **Embrace Asymmetry:** Place a large image on the left and a small, high-contrast text block on the bottom-right of the next section.
- **Use High-Quality Imagery:** The system relies on photography of stone, glass, and light.
- **Respect the Hairline:** Use 0.5px lines only for architectural detail, never for structural containment.
- **Lean into Negative Space:** If a section feels crowded, double the padding. Space is the primary indicator of luxury.

### Don’t:
- **No Rounded Corners:** Ever. The `0px` radius is non-negotiable to maintain the "Monolith" aesthetic.
- **No Standard Grids:** Avoid the "3-column card row" look. Vary widths (e.g., a 60% width image next to a 30% width text block).
- **No Default Shadows:** Avoid any shadow that looks like a "box-shadow." If it's noticeable, it's too heavy.
- **No Pure Grey Borders:** Do not use high-contrast grey lines to separate content; use tonal shifts between `surface` and `surface-container-low`.

---
*Director's Note: Every pixel must feel like it was placed with a compass and a T-square. If an element does not serve the architectural integrity of the page, remove it.*```