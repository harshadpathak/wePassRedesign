---
name: SaaS Enterprise Design System
colors:
  surface: '#fcf8ff'
  surface-dim: '#dcd8e5'
  surface-bright: '#fcf8ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f5f2ff'
  surface-container: '#f0ecf9'
  surface-container-high: '#eae6f4'
  surface-container-highest: '#e4e1ee'
  on-surface: '#1b1b24'
  on-surface-variant: '#464555'
  inverse-surface: '#302f39'
  inverse-on-surface: '#f3effc'
  outline: '#777587'
  outline-variant: '#c7c4d8'
  surface-tint: '#4d44e3'
  primary: '#3525cd'
  on-primary: '#ffffff'
  primary-container: '#4f46e5'
  on-primary-container: '#dad7ff'
  inverse-primary: '#c3c0ff'
  secondary: '#505f76'
  on-secondary: '#ffffff'
  secondary-container: '#d0e1fb'
  on-secondary-container: '#54647a'
  tertiary: '#7e3000'
  on-tertiary: '#ffffff'
  tertiary-container: '#a44100'
  on-tertiary-container: '#ffd2be'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#e2dfff'
  primary-fixed-dim: '#c3c0ff'
  on-primary-fixed: '#0f0069'
  on-primary-fixed-variant: '#3323cc'
  secondary-fixed: '#d3e4fe'
  secondary-fixed-dim: '#b7c8e1'
  on-secondary-fixed: '#0b1c30'
  on-secondary-fixed-variant: '#38485d'
  tertiary-fixed: '#ffdbcc'
  tertiary-fixed-dim: '#ffb695'
  on-tertiary-fixed: '#351000'
  on-tertiary-fixed-variant: '#7b2f00'
  background: '#fcf8ff'
  on-background: '#1b1b24'
  surface-variant: '#e4e1ee'
typography:
  display:
    fontFamily: Inter
    fontSize: 36px
    fontWeight: '700'
    lineHeight: 44px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Inter
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
    letterSpacing: -0.01em
  headline-md:
    fontFamily: Inter
    fontSize: 20px
    fontWeight: '600'
    lineHeight: 28px
  body-lg:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  body-md:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '400'
    lineHeight: 20px
  label-md:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '500'
    lineHeight: 16px
    letterSpacing: 0.01em
  label-sm:
    fontFamily: Inter
    fontSize: 11px
    fontWeight: '600'
    lineHeight: 14px
  headline-lg-mobile:
    fontFamily: Inter
    fontSize: 20px
    fontWeight: '600'
    lineHeight: 28px
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  base: 4px
  container-padding: 24px
  gutter: 16px
  margin-mobile: 16px
  margin-desktop: 32px
  stack-sm: 8px
  stack-md: 16px
  stack-lg: 24px
---

## Brand & Style

The visual identity of this design system is rooted in **Corporate Modernism**—a style that prioritizes data density without sacrificing legibility or aesthetic appeal. It is engineered for high-utility SaaS environments where users spend extended periods navigating complex information.

The brand personality is **Professional, Precise, and Effortless**. The UI utilizes a "Pro" aesthetic characterized by high-contrast functional elements set against expansive, airy backgrounds. This is achieved through a strict adherence to purposeful whitespace, a refined indigo-led color palette, and a focus on clarity through structural hierarchy rather than decorative flourishes.

**Key visual drivers:**
- **Clarity over Clutter:** Every border and shadow must serve a functional purpose in defining hierarchy.
- **Systematic Precision:** Alignment follows a rigid grid to instill a sense of reliability and trust.
- **Modern Utility:** Using contemporary technical typefaces and subtle depth to guide the user’s eye toward primary actions.

## Colors

The color palette utilizes a sophisticated spectrum of **Indigo** and **Slate** to create a focused, low-distraction environment. 

- **Primary (#4F46E5):** Used exclusively for high-priority actions, active navigation states, and essential focal points. 
- **Neutrals (Slate):** A scale of blue-tinted grays is used for text and surfaces to maintain a "cool" professional tone. `Slate-900` for primary headings, `Slate-500` for meta-data, and `Slate-50` for background regions.
- **Semantic Colors:** Status indicators are vibrant but used sparingly. Green (`Emerald-500`) signals active/positive states, while Red (`Red-500`) is reserved for errors or destructive actions.
- **Surface Strategy:** The design system uses a "Layered White" approach where the primary page background is a subtle gray (`Slate-50`), allowing white cards (`#FFFFFF`) to pop with clarity.

## Typography

The typography system relies entirely on **Inter**, a typeface specifically designed for user interfaces. The hierarchy is established through weight and color rather than excessive scale changes.

- **Weight Usage:** Headlines use `600 (Semibold)` to create strong visual anchors. Body text stays at `400 (Regular)` for maximum readability in data-heavy views. Labels use `500 (Medium)` or `600 (Semibold)` for clear identification.
- **Micro-copy:** Metadata (like IDs or timestamps) should be rendered in `label-md` using a lighter neutral color (Slate-400) to de-emphasize them relative to primary content.
- **Scaling:** On mobile devices, display and large headlines scale down by one level to ensure content remains visible without excessive scrolling.

## Layout & Spacing

The layout utilizes a **12-column fluid grid** for the main content area, paired with a **fixed left-hand navigation rail** (260px). 

- **The 8px Rhythm:** All spatial dimensions—including padding, margins, and component heights—are multiples of 4px, with 8px being the primary increment. This ensures a consistent vertical rhythm.
- **Whitespace Philosophy:** Large margins (32px on desktop) surround the main content area to create an "airy" feel that prevents the dashboard from feeling overwhelming.
- **Responsive Behavior:** 
  - **Desktop:** Fixed sidebar, 32px margins.
  - **Tablet:** Sidebar collapses to an icon-only rail (72px), 24px margins.
  - **Mobile:** Sidebar becomes a hidden drawer, 16px margins, and all grid-based cards stack vertically into a single column.

## Elevation & Depth

This design system uses **Tonal Layering** supplemented by **Subtle Ambient Shadows** to communicate depth.

- **Level 0 (Background):** `Slate-50`. The canvas upon which all other elements sit.
- **Level 1 (Cards/Containers):** White `#FFFFFF` with a 1px border of `Slate-200`. This is the primary surface for data.
- **Level 2 (Overlays/Dropdowns):** White `#FFFFFF` with a soft, diffused shadow: `0px 10px 15px -3px rgba(0, 0, 0, 0.05)`. This creates a clear physical separation for temporary UI elements.
- **Interactive Depth:** Buttons utilize a very subtle 1px bottom-inset shadow to provide a tactile "pressed" feel, while remaining essentially flat in their default state to maintain a modern look.

## Shapes

The shape language is **Rounded**, striking a balance between the friendliness of consumer apps and the structure of enterprise tools.

- **Components:** Standard buttons, input fields, and small cards use a **0.5rem (8px)** corner radius.
- **Large Containers:** Main dashboard sections and large modal containers use **1rem (16px)** to soften the overall interface.
- **Badges/Pills:** Status badges and tags utilize a **full-round (pill)** radius to distinguish them from interactive buttons.
- **Icon Enclosures:** Small utility icons (like those in the sidebar) are housed in 8px rounded squares to maintain consistency with the component library.

## Components

### Buttons
- **Primary:** Solid Indigo-600 background, white text, 8px radius. Subtle hover transition to Indigo-700.
- **Secondary:** White background with Slate-200 border. Slate-700 text.
- **Ghost:** No background or border. Primary Indigo text. Used for low-priority actions in tables.

### Tables
- **Structure:** Clean, borderless rows with a subtle 1px bottom border (`Slate-100`). 
- **Headers:** `label-sm` typography in Slate-500, uppercase, with increased letter spacing.
- **Hover State:** Rows highlight with a `Slate-50` background on hover to aid horizontal tracking.

### Cards
- White background, 1px `Slate-200` border, 16px radius.
- Standard padding is 24px (`stack-lg`) to maintain the "airy" feel.

### Status Badges
- **Active:** Emerald-100 background with Emerald-700 text.
- **Inactive/Draft:** Slate-100 background with Slate-600 text.
- **Error:** Red-100 background with Red-700 text.

### Inputs
- **Field:** White background, 1px `Slate-300` border. On focus, the border transitions to `Indigo-500` with a 3px soft indigo glow (ring).
- **Icons:** Leading icons in search bars should use `Slate-400` to remain unobtrusive.