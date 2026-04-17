# Design System Strategy: The Architectural Monolith

## 1. Overview & Creative North Star
This design system is built upon the "Architectural Monolith" concept. For a premium construction firm like Accstage, the digital experience must mirror the physical structures they create: precise, permanent, and unapologetically bold. 

We are moving away from "web-native" templates. Our Creative North Star is **Editorial Brutalism**. We treat the screen as a canvas of raw materials—high-contrast ink (Black) and gallery-lit space (White). By utilizing intentional asymmetry, massive scale shifts in typography, and a "zero-radius" philosophy, we create a sense of structural integrity. Every element should feel like it was placed with the intent of a master architect, not a software engineer.

## 2. Colors & Surface Logic
The palette is strictly monochromatic, relying on tonal depth rather than color to guide the eye.

### The "No-Line" Rule
Traditional 1px borders are strictly prohibited for sectioning. Borders create a "boxed-in" feeling that contradicts the expansive nature of luxury. Instead, boundaries must be defined through background color shifts.
- **Sectioning:** Transition from `surface` (#f9f9f9) to `surface-container-low` (#f3f3f4) to signal a new content block.
- **Nesting:** Use `surface-container-highest` (#e2e2e2) for internal elements that require prominence against a lighter base.

### Surface Hierarchy
Think of the UI as a series of stacked, physical materials:
- **Level 0 (Foundation):** `surface` (#f9f9f9) - The primary canvas.
- **Level 1 (The Site):** `surface-container-lowest` (#ffffff) - Used for primary cards or content areas to give them a "lifted" appearance without shadows.
- **Level 2 (The Detail):** `surface-container-high` (#e8e8e8) - For secondary information or interactive regions.

### Signature Textures
To prevent the B&W palette from feeling "flat," use subtle gradients for main CTAs or Hero section overlays. Transition from `primary` (#000000) to `primary-container` (#3b3b3b) to provide a "metallic" or "carbon" sheen that feels expensive and tactile.

## 3. Typography: The Editorial Voice
The typography scale is designed to create a rhythmic hierarchy that feels like a high-end architectural magazine.

- **Display (Space Grotesk):** This is our "Steel Beam." Use `display-lg` for hero statements. The wide aperture and technical feel of Space Grotesk communicate engineering precision.
- **Headlines (Space Grotesk):** Use `headline-lg` through `sm` for section headers. These should be tight-leaded (low line-height) and high-contrast.
- **Body (Manrope):** Manrope provides the "Human Element." It is clean, highly legible, and modern. Use `body-lg` for introductory paragraphs to maintain the editorial feel.
- **Labels (Manrope):** Use `label-md` in all-caps with increased letter-spacing (tracking) for technical metadata or small accents. This mimics the "blueprints" aesthetic.

## 4. Elevation & Depth
In this system, depth is a function of light and material, not digital artifacts.

- **The Layering Principle:** Stack `surface-container` tiers. Place a `surface-container-lowest` (#ffffff) card on a `surface-container-low` (#f3f3f4) section. This "tonal lift" is the hallmark of sophisticated UI.
- **Ambient Shadows:** Shadows are rarely used. When essential for "floating" elements (like a navigation bar during scroll), use an extra-diffused shadow: `box-shadow: 0 20px 40px rgba(0,0,0,0.04)`. It must feel like an ambient occlusion, not a drop shadow.
- **The "Ghost Border" Fallback:** If a container requires definition against an identical background, use the `outline-variant` (#c6c6c6) at **15% opacity**. This creates a whisper of an edge that preserves the architectural minimalism.
- **Glassmorphism:** For floating overlays or mobile menus, use `surface` at 80% opacity with a `backdrop-blur: 20px`. This mimics frosted glass, a staple material in luxury architecture.

## 5. Components

### Buttons: The Structural Anchor
- **Primary:** Solid `primary` (#000000) background, `on-primary` (#e2e2e2) text. Square corners (0px). 
- **Secondary:** `outline` (#777777) at 20% opacity with `primary` text. No fill.
- **Interaction:** On hover, the primary button should shift to `primary-fixed` (#5e5e5e). The transition must be a slow, 400ms "architectural" fade.

### Inputs & Fields
- **Styling:** Forgo the four-sided box. Use a bottom-only border (2px) using `primary` (#000000). 
- **State:** When focused, the background should shift slightly to `surface-container-highest` (#e2e2e2).

### Cards & Lists: The Monolithic Grid
- **Rule:** No divider lines. 
- **Separation:** Use vertical white space (64px or 96px from the spacing scale) or a subtle shift from `surface` to `surface-container`.
- **Image Treatment:** Images must be sharp-edged (0px radius). Use a subtle 1% black inner-glow to ensure white images don't bleed into the `surface` color.

### Navigation
- **Top Bar:** Use `surface-container-lowest` with a "Ghost Border" bottom edge (15% opacity).
- **Links:** Use `label-md` in all-caps. Active states should be indicated by a weight shift rather than a color change.

## 6. Do’s and Don’ts

### Do:
- **Embrace Asymmetry:** Place text in the left column and leave the right 50% of the screen as "negative space" (white space).
- **Scale for Impact:** Use `display-lg` typography. Don't be afraid of text taking up 60% of the viewport.
- **Strict 0px Corners:** Every element—buttons, cards, images—must have a 0px border radius. Sharpness equals precision.

### Don’t:
- **No Icons as Decoration:** Only use icons if they serve a functional purpose. Never use "generic" or playful iconography. If icons are used, they must be ultra-thin (1pt stroke).
- **No Pure Grey Text:** Use `on-surface` (#1a1c1c) for body text to maintain high contrast. Avoid the "washed out" look of mid-grey text.
- **No Standard Grids:** Avoid the "3-column card" layout. Try a "1-2-1" staggered layout to feel more like a bespoke editorial piece.