# Refresh D Thai Spa

Welcome to the official repository for the **Refresh D Thai Spa** website! This is the frontend codebase for the premium authentic Thai massage and luxury spa located in Koramangala 8th Block, Bangalore.

## Overview
The website is built using a custom "Dark Luxury" design system. It is heavily optimized for fast load times, local SEO, and a premium user experience across all devices. 

Key features of the site include:
- **Dark Luxury Theme:** Utilizing a signature color palette (`--forest-deep`, `--gold-deep`, `--cream`) to convey relaxation and premium quality.
- **Service Pages:** Dedicated pages for each specific therapy (e.g., Deep Tissue, Aromatherapy, Turkish Hamam) providing "Healing Benefits", "What to Expect", and tailored "FAQs".
- **Dynamic Booking CTA:** Integrated WhatsApp booking workflows allowing users to instantly schedule their sessions.
- **Responsive Layout:** Fluidly adapts to mobile, tablet, and desktop viewports to ensure high accessibility.

## Repository Structure

```text
.
├── index.html                  # Main landing page
├── gallery.html                # Photo gallery page
├── services/                   # Directory containing all individual service pages
│   ├── aromatherapy-massage.html
│   ├── deep-tissue-massage.html
│   ├── turkish-hamam.html
│   └── ... (and more)
├── css/                        # Core stylesheets (if extracted)
└── README.md                   # Project documentation
```

## Maintenance & Automation Scripts
During the development and updating phase, several Python scripts were utilized to ensure structural parity and apply bulk theme updates across all service pages simultaneously (e.g., applying dark themes, updating FAQ sections, injecting new CTA banners). These scripts are kept in the root directory for future maintenance use cases.

## How to Run Locally
Because this project primarily uses vanilla HTML, CSS, and lightweight JS, no heavy build tools are required.
1. Clone this repository.
2. Open `index.html` directly in your favorite modern web browser.
3. No local server is strictly necessary, though you can use tools like VSCode Live Server for a better development experience.

## Theme Colors
The global CSS variables that drive the identity of the brand are stored in the root styles:
- **Forest (Main Backgrounds):** `#0B2A24`
- **Forest Deep (Contrast Backgrounds):** `#061A16`
- **Gold (Accents & Buttons):** `#E8B84B`
- **Cream (Primary Text):** `#FAF5E7`

## Contact & Booking
Refresh D Thai Spa is located at:
**3rd Floor, Above Udupi Utsav, 45, 526, 80 Feet Rd, Koramangala 8th Block, Bengaluru — 560095**

Booking and inquiries: `+91 95388 04343`
