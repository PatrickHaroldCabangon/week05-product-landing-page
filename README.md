- **Responsive Utility Classes:** Prefixes like `sm:`, `md:`, and `lg:` are used throughout (e.g., `grid-cols-2 md:grid-cols-4`, `hidden md:flex`) to change layout behavior at different screen sizes without writing media queries manually.
- **Component Styling:** Each Blade component (buttons, cards) uses consistent utility patterns — for example, all cards share the same border, padding, and hover-transition conventions, keeping the UI visually unified.

**Example from the project** (`button.blade.php`):
```php
$classes = match($variant) {
    'primary' => 'bg-[#7A2E2E] text-[#FAF6EF] hover:bg-[#5f2323]',
    'secondary' => 'bg-transparent text-stone-900 border border-stone-300 hover:border-stone-900',
};
```
This shows utility-first styling combined with a PHP `match` expression to switch between button variants using only Tailwind classes.

## 5. Blade Components

**What are Blade Components?**
Blade Components are reusable pieces of Laravel view code that combine HTML markup with dynamic data via props. They allow a piece of UI (like a button or a card) to be defined once and reused across the application with different data.

**Why reusable components improve maintainability:**
Instead of copy-pasting the same HTML for every pricing card or testimonial, a single component file defines the structure once. If the design needs to change (e.g., updating the card's border radius), it only needs to be updated in one place.

**Benefits of modular UI development:**
- Faster development through reuse
- Easier debugging (isolated component logic)
- Consistent design across the whole page
- Cleaner, more readable page templates (`home.blade.php` mainly just calls components)

**Example — `feature-card.blade.php`:**
```php
@props(['title', 'description'])

<div class="py-8 border-t border-stone-200">
    <h3 class="font-serif text-lg text-stone-900 mb-2">{{ $title }}</h3>
    <p class="text-sm text-stone-600 leading-relaxed">{{ $description }}</p>
</div>
```

**Used in `home.blade.php` as:**
```blade
<x-feature-card title="All-day breakfast" description="Belly's Tapa and Longganisa served with garlic rice and egg, any time of day." />
```

Components built for this project: `navbar`, `hero`, `feature-card`, `menu-card`, `pricing-card`, `testimonial-card`, `button`, `footer`.

## 6. User Interface Design

- **Color Palette:** A limited, warm palette based on Big Belly's brand identity — cream background (`#FAF6EF`), deep maroon accent (`#7A2E2E`), and stone/neutral tones for text, ensuring strong contrast and a cohesive food-brand feel.
- **Typography:** Two-font pairing — `Fraunces` (serif) for headings to convey warmth and character, and `Instrument Sans` for body text for clean readability. A rounded display font (`Baloo 2`) is used sparingly for the brand wordmark to echo the restaurant's logo.
- **Iconography:** Minimal use of icons (social media icons in the footer, a hamburger menu icon on mobile) to keep the design clean and content-focused.
- **Button Styles:** Two variants — a solid primary button (maroon fill) for main actions, and an outlined secondary button for lower-emphasis actions, both with consistent padding and hover states.
- **Card Design:** Cards use hairline borders instead of heavy shadows, consistent with the minimal aesthetic direction chosen for the brand.
- **Layout Consistency:** All sections share the same max-width container (`max-w-5xl`), consistent vertical spacing (`py-16`), and consistent section header styling — creating rhythm as the user scrolls.

These choices contribute to a better user experience by reducing visual noise, making it easy to scan menu items and prices, and reinforcing the restaurant's identity through consistent branding.

## 7. Folder Structure
week05-product-landing-page/
│
├── app/ → Laravel application logic (models, controllers)
├── resources/
│ ├── views/
│ │ ├── layouts/ → Shared page layout (app.blade.php) — the HTML shell all pages extend
│ │ ├── components/ → Reusable Blade components (navbar, hero, cards, button, footer)
│ │ └── pages/ → Actual page views (home.blade.php) that assemble components
│ ├── css/ → Tailwind entry point (app.css)
│ └── js/ → Vanilla JS for interactivity (smooth scroll, scroll-reveal, mobile menu)
├── public/
│ └── images/ → Static image assets (logo, food photos) served directly
├── screenshots/ → Screenshots of the final responsive interface across devices
├── documentation/ → Before-and-after comparison images
└── README.md → This file


## 8. Screenshots

All screenshots are located in the `/screenshots` folder.

### Responsive Views
| Desktop | Tablet | Mobile |
|---|---|---|
| ![Desktop View](screenshots/Desktop_view.png) | ![Tablet View](screenshots/Tablet_view.png) | ![Mobile View](screenshots/Mobile_view.png) |

### Page Sections
| Navigation Bar | Hero Section |
|---|---|
| ![Navigation Bar](screenshots/Navigation_bar.png) | ![Hero Section](screenshots/Hero_section.png) |

| Features | Menu Showcase |
|---|---|
| ![Features](screenshots/Features.png) | ![Menu](screenshots/Menu.png) |

| Pricing | Testimonials |
|---|---|
| ![Pricing](screenshots/Pricing.png) | ![Testimonial](screenshots/Testimonial.png) |

| Footer |
|---|
| ![Footer](screenshots/Footer.png) |

### Development & Repository
| Blade Components Folder | GitHub Repository |
|---|---|
| ![Blade Components](screenshots/Blade_components.png) | ![GitHub Repo](screenshots/Github_repo.png) |

## 9. Reflection

Building this landing page for Big Belly's, a real restaurant in Los Baños, helped connect Laravel Blade Components and Tailwind CSS to an actual business need rather than a generic exercise. Translating the restaurant's real menu, branding, and Facebook page content into a structured, component-based interface reinforced how reusable components (like `menu-card` and `pricing-card`) reduce duplication while keeping the design consistent. It also highlighted the importance of testing responsiveness early, since the initial navbar broke on mobile until a hamburger menu was added.

---

**Course:** ITST 302 – Client-Server Technologies
**Activity:** Mini Project 04 – Responsive Product Landing Page
**Student:** [Your Name] — Section IT-3D