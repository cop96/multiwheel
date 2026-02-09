# Multiwheel Website - Implementation Plan

## Project Overview

Complete website development for Multiwheel, specialists in professional vehicle equipment and crane repair in Seville (Alcalá de Guadaíra). The project includes 5 main PHP pages, shared components, legal pages, and a PDF catalog system.

**Timeline**: Complete implementation in phases
**Stack**: HTML5, Tailwind CSS (CDN), Font Awesome 6 (CDN), Google Fonts, PHP 7.4+

---

## File Structure

```
Multiwheel/
├── index.php                    # Homepage (6 sections)
├── servicios.php                # Services page (detailed)
├── proyectos.php                # Portfolio/gallery page
├── catalogo.php                 # Product listing
├── producto.php                # Individual product detail
├── contacto.php                 # Contact form + info
├── aviso-legal.php             # Legal notice
├── politica-privacidad.php      # Privacy policy
├── ley-cookies.php              # Cookies policy
├── header.php                   # Shared navigation
├── footer.php                   # Shared footer
├── css/
│   └── custom.css               # Custom styles (if needed)
├── js/
│   └── main.js                  # Mobile menu JavaScript
├── inc/
│   └── tcpdf/                   # TCPDF library for PDF generation
├── catalogo/
│   ├── productos/
│   │   ├── estanterias/
│   │   │   └── estanteria-modular-lateral/
│   │   │       ├── datos.json
│   │   │       └── images/
│   │   ├── bancos-trabajo/
│   │   ├── iluminacion/
│   │   ├── generadores/
│   │   ├── sistemas-rescate/
│   │   ├── anclajes/
│   │   └── accesorios/
│   └── data/
│       └── productos.json       # Main products index
├── pdf/
│   ├── generar-pdf-producto.php # Single product PDF
│   └── generar-catalogo.php     # Full catalog PDF
├── images/
│   └── logo.png                 # Company logo
└── docs/
    └── README.md                # Project documentation
```

---

## Color Palette & Typography

### Primary Colors
- **Blue**: #1e3a5f (multiwheel-blue) - Header, titles, footer
- **Red**: #c8102e (multiwheel-red) - CTAs, hover states, badges
- **Orange**: #f05a28 (multiwheel-orange) - Accents, icons, subtitles

### Neutral Colors
- **Industrial Gray**: #3a3a3a (body text)
- **Steel Gray**: #6b7280 (subtitles)
- **Light Gray**: #e5e7eb (borders)
- **Workshop White**: #f9fafb (alternate backgrounds)

### Typography
- **Titles**: 'Rajdhani', sans-serif (600, 700 weights)
- **Body**: 'Open Sans', sans-serif (400, 600 weights)

---

## Page-by-Page Breakdown

### 1. header.php (Shared Navigation)
**Features:**
- Sticky header (fixed top)
- White background, subtle shadow
- Logo left with tagline "Desde 2011 / Equipamiento Profesional"
- Desktop navigation: Inicio | Servicios | Proyectos | Catálogo | Contacto
- Quick contact: Phone icon + "620 531 511" | WhatsApp button (red)
- Mobile hamburger menu (lg breakpoint)
- Mobile dropdown with links + phone + WhatsApp
- Hover effects: multiwheel-red

**Technical:**
- JavaScript toggle for mobile menu
- Links to .php files
- WhatsApp: `https://wa.me/34620531511`
- Phone: `tel:+34620531511`

### 2. footer.php (Shared Footer)
**Layout:** 4-column grid (1 column mobile)

**Column 1 - About:**
- White logo version
- Description: "Especialistas en equipamiento profesional de furgonetas y reparación de grúas desde 2011..."
- Social icons (Facebook, Instagram, LinkedIn)

**Column 2 - Services:**
- Title (multiwheel-orange)
- Links: Equipamiento, Reparación, Sistemas, Venta

**Column 3 - Navigation:**
- Title (multiwheel-orange)
- Links: Inicio, Proyectos, Catálogo, Contacto, Legal, Privacy, Cookies

**Column 4 - Contact:**
- Title (multiwheel-orange)
- Address, Phone, Email, Schedule
- Icons for each

**Copyright Bar:**
- Border top (blue-800)
- Centered text
- Dynamic year: `<?php echo date('Y'); ?>`

### 3. index.php (Homepage)

#### Section 1: Hero
- **Height**: Full screen (min-h-600px)
- **Background**: Unsplash "work van interior"
- **Overlay**: Gradient multiwheel-blue 95% → transparent (left to right)
- **Content** (left aligned, max-w-2xl, white text):
  - Pretitle: "Desde 2011 en Sevilla" (orange, uppercase, icon: fa-tools)
  - H1: "Convertimos tu furgoneta en tu mejor herramienta de trabajo" (Rajdhani, 5xl-7xl)
  - Subtitle: "Equipamiento profesional para talleres móviles... Más de 340 vehículos equipados"
- **CTAs** (2 buttons, gap-4):
  1. Primary: "Ver catálogo" → /catalogo (bg-red)
  2. Secondary: "Presupuesto gratuito" → /contacto (border-white)
- **Trust Badges** (flex wrap, green check icons):
  - "Instalación incluida"
  - "Fabricación a medida"
  - "Garantía certificada"
- **Scroll Indicator** (bottom-8, center, animate-bounce, chevron-down)

#### Section 2: Value Proposition
- **Background**: White
- **Intro** (centered, max-w-3xl):
  - Pretitle: "¿Por qué elegirnos?" (orange, uppercase)
  - H2: "Tu partner técnico de confianza" (Rajdhani, 4xl-5xl, blue)
  - Subtitle: About manufacturing and installation
- **Grid**: 3 columns (md:grid-cols-3, gap-8)
- **Cards** (workshop-white, p-8, hover:shadow-xl):
  1. Icon: fa-drafting-compass (red bg), Title: "Fabricación a medida", Desc: Custom design per profession
  2. Icon: fa-wrench (orange bg), Title: "Instalación completa", Desc: Professional mounting with certificates
  3. Icon: fa-shield-alt (blue bg), Title: "Servicio postventa", Desc: Repair and maintenance

#### Section 3: Services by Sector
- **Background**: workshop-white
- **Intro** (centered):
  - Pretitle: "Soluciones especializadas"
  - H2: "¿Qué tipo de profesional eres?"
- **Grid**: 3 columns (lg:grid-cols-3, gap-8)
- **Cards** (white, overflow-hidden, hover:shadow-2xl):
  1. **Grúas y Auxilio** (red badge): Image + Title (fa-truck-pickup) + Description + Check list + CTA → /servicios#gruas
  2. **Taller Móvil** (orange badge): Same structure → /servicios#taller-movil
  3. **Transporte** (gray badge): Same structure → /servicios#transporte

#### Section 4: Testimonials (Social Proof)
- **Background**: multiwheel-blue (white text)
- **Intro** (centered):
  - H2: "Confían en nosotros"
  - Subtitle: "Más de 340 vehículos equipados desde 2011" (340 in orange)
- **Grid**: 3 columns (md:grid-cols-3, gap-8)
- **Cards** (white/10 backdrop-blur, border white/20):
  - Avatar (pravatar.cc), Name, Role, 5 yellow stars, Testimonial text

#### Section 5: Projects Preview
- **Background**: White
- **Intro** (centered):
  - Pretitle: "Nuestros proyectos"
  - H2: "Equipamientos realizados"
- **Grid**: 6 images (2 cols mobile, 3 cols desktop, gap-4)
- **Images**: Square (aspect-square), Unsplash keywords
- **Hover**: Overlay (blue/80, opacity 0→100) + "Ver proyecto" text
- **CTA**: "Ver todos los proyectos" → /proyectos (red)

#### Section 6: Final CTA
- **Background**: Gradient (blue to blue-800)
- **Content** (centered, white):
  - Pretitle: "¿Listo para empezar?" (orange, uppercase)
  - H2: "Solicita tu presupuesto sin compromiso" (Rajdhani, 4xl-6xl)
  - Subtitle: Response in 24 hours, free consultation
- **CTAs** (flex row, centered, gap-6):
  1. "Solicitar presupuesto" → /contacto (red)
  2. "Llamar ahora: 620 531 511" → tel: (border-white)
  3. "WhatsApp" → wa.me (green-600)
- **Trust Elements** (flex wrap, gap-8):
  - "Presupuesto sin compromiso" (green shield)
  - "Respuesta en 24h" (orange clock)
  - "Consulta técnica gratis" (blue tools)

### 4. servicios.php (Services Page)

#### Hero
- **Background**: multiwheel-blue
- **Content** (centered, white):
  - H1: "Nuestros Servicios"
  - Subtitle: "Soluciones profesionales adaptadas a tu sector"

#### Service 1: Equipamiento de Furgonetas (id="equipamiento")
- **Layout**: 2-column grid (lg:grid-cols-2)
- **Image** (left): Interior van equipped
- **Content** (right):
  - Large number: "01" (orange/20)
  - Pretitle: "Talleres móviles" (orange, uppercase)
  - H2: "Equipamiento completo de furgonetas" (Rajdhani, blue)
  - Description (3 paragraphs): Transformation, custom design, installation with certificates
  - **Features List** (2 columns, green checks):
    - Estanterías modulares personalizadas
    - Bancos de trabajo con cajones
    - Suelos antideslizantes profesionales
    - Iluminación LED autónoma
    - Generadores eléctricos portátiles
    - Sistemas de ventilación
    - Anclajes de seguridad homologados
    - Divisores de carga certificados
  - CTA: "Solicitar presupuesto" → /contacto

#### Service 2: Reparación de Grúas (id="gruas")
- **Layout**: Alternated (content left, image right)
- **Image**: Crane being repaired
- **Content**:
  - Number: "02"
  - Pretitle: "Auxilio en carretera"
  - H2: "Reparación especializada de grúas"
  - Description (3 paragraphs): Specialized service, professional equipment, urgent service
  - **Features List**:
    - Reparación de plumas hidráulicas
    - Sistemas winch y cabrestantes
    - Rampas hidráulicas slide-bed
    - Estructuras metálicas y carrocerías
    - Sistemas eléctricos y electrónicos
    - Mantenimiento preventivo
    - Revisiones técnicas ITV
    - Compra-venta de carrocerías usadas
  - CTA: "Solicitar diagnóstico" → /contacto

#### Service 3: Sistemas de Rescate (id="sistemas")
- **Layout**: Image left, content right
- **Content**:
  - Number: "03"
  - Pretitle: "Equipamiento profesional"
  - H2: "Venta de equipos de rescate"
  - Description (3 paragraphs): Certified equipment, European standards, installation included
  - **Features List**:
    - Plataformas de arrastre certificadas
    - Winches eléctricos profesionales
    - Sistemas de elevación hidráulicos
    - Cadenas y cinchas homologadas
    - Ruedas de apoyo y carros
    - Kits de rescate completos
    - Iluminación de emergencia
    - Señalización profesional
  - CTA: "Ver catálogo" → /catalogo

#### Final CTA Section
- Same as index.php Section 6

### 5. proyectos.php (Portfolio Page)

#### Hero
- **Content**:
  - H1: "Proyectos realizados"
  - Subtitle: "Equipamientos profesionales que transforman vehículos..."

#### Technical Note (if no WordPress)
- **Style**: bg-yellow-50, border-yellow-400
- **Text**: "Esta sección mostrará dinámicamente los proyectos realizados..."

#### Projects Grid
- **Layout**: grid-cols-1 md:grid-cols-2 lg:grid-cols-3, gap-8
- **Card Structure**:
  - Image (4:3 aspect)
  - Badge (orange): Category
  - Title (Rajdhani, bold, xl)
  - Excerpt (2-3 lines, steel-gray)
  - Link: "Ver proyecto completo"
  - Hover: shadow-xl, image scale-105

#### 6 Example Projects:
1. Furgoneta taller electricista (Taller móvil)
2. Reparación integral grúa slide-bed (Reparación grúas)
3. Taller móvil fontanería (Taller móvil)
4. Equipamiento carpintero (Taller móvil)
5. Traspaso Iván grúa Iveco Daily (Compra-venta)
6. Furgoneta reparto divisores (Transporte)

#### Pagination (if needed)
- Centered numbered buttons

### 6. catalogo.php (Product Catalog)

#### Hero
- **Content**:
  - H1: "Catálogo de equipamiento"
  - Subtitle: "Productos profesionales certificados..."

#### Filters
- **Buttons**: Todos | Estanterías | Bancos trabajo | Iluminación | Generadores | Sistemas rescate | Anclajes | Accesorios

#### Products Grid
- **Layout**: grid-cols-1 md:grid-cols-3 lg:grid-cols-4, gap-6
- **Card Structure**:
  - Image (square, white/gray bg)
  - Badges: Nuevo/Destacado
  - Name (semibold, lg)
  - Description (1 line)
  - Features (2-3 small bullets)
  - CTA: "Consultar disponibilidad" → /contacto (with product query)

#### PDF Download
- **Button**: "Descargar catálogo completo PDF" → /pdf/generar-catalogo.php

### 7. producto.php (Product Detail)

#### Hero
- **Layout**: 2-column grid
- **Left**: Image gallery (main + thumbnails)
- **Right**:
  - Name + Reference ID
  - Badges: Nuevo/Destacado/Stock
  - Short description
  - Price (if applicable)
  - CTAs: "Solicitar presupuesto", "Descargar ficha PDF"

#### Description
- Long description
- Applications list
- What's included list

#### Technical Specifications (Table)
- Dimensions (height/width/depth)
- Weight
- Material
- Color
- Max load
- Other specs

#### Features (Bullets with Icons)
- Array of technical features

#### Vehicle Compatibility
- Grid of compatible van models

#### Certifications
- Badges or list with icons

#### Customization Options
- Array of options

#### Commercial Info
- Delivery time
- Installation included (highlighted)
- Warranty
- Price note

#### Related Products
- Carousel or grid of related items

#### Quick Query Form
- Fields: Name, Email, Phone, Message
- Hidden: Product ID + Name
- Button: "Consultar disponibilidad"

### 8. contacto.php (Contact Page)

#### Contact Info Section
- **Grid**: 2-column (info + form)
- **Info Column**:
  - **Address**: Pol. Ind. La Red, Calle 12 Nave 14, 41500 Alcalá de Guadaíra, Sevilla
  - **Phone**: 620 531 511 (icon, clickable)
  - **Email**: info@multiwheel.es (icon, clickable)
  - **Hours**: Mon-Fri 8:00-18:00 / Sat 9:00-14:00
  - **Map**: Google Maps embed (optional)
  - **WhatsApp**: Direct link button

#### Contact Form
- **Fields**:
  - Name (required)
  - Email (required)
  - Phone (required)
  - Service Type (dropdown)
  - Message (required, textarea)
  - Privacy checkbox (required)
- **Submit Button**: "Enviar mensaje"
- **Note**: Visual-only for now (no backend)

### 9-11. Legal Pages

#### aviso-legal.php
- Company info (as required by law)
- Intellectual property
- Liability limitations
- Applicable law

#### politica-privacidad.php
- Data controller info
- Purpose of processing
- Legal basis
- Data sharing
- Data retention
- User rights
- Contact for rights exercise

#### ley-cookies.php
- What are cookies
- Types used
- Purpose of each
- Cookie management
- Third-party cookies
- Acceptance policy

---

## PDF Catalog System

### TCPDF Integration
- **Library**: TCPDF (open source)
- **Purpose**: Generate professional PDF catalogs and product sheets

### Single Product PDF (generar-pdf-producto.php)
**Header:**
- Logo
- Title: "FICHA TÉCNICA"
- Subtitle: "Multiwheel - Equipamiento Profesional"

**Content:**
1. Product image (centered)
2. Name + Reference
3. Long description
4. Technical specifications table
5. Features list (bullets)
6. Vehicle compatibility
7. Applications
8. What's included
9. Commercial info (delivery, installation, warranty, price)
10. Certifications

**Footer:**
- Contact information
- Company details
- Hours

### Full Catalog PDF (generar-catalogo.php)

**Structure:**
1. **Cover Page**: Logo, Title, Year, Company info
2. **Index**: Categories with product count
3. **Content**: Each product on new page
   - Category separator page
   - Product image
   - Name + Ref
   - Short description
   - Key specs
   - Features list

**Products Data Structure (datos.json):**
```json
{
  "id": "EST-001",
  "nombre": "Estantería Modular Lateral Derecha",
  "slug": "estanteria-modular-lateral",
  "categoria": "estanterias",
  "categoria_display": "Estanterías y Almacenaje",
  "descripcion_corta": "...",
  "descripcion_larga": "...",
  "caracteristicas_tecnicas": [...],
  "especificaciones": {
    "alto": "1800mm",
    "ancho": "400mm",
    "profundidad": "350mm",
    "peso": "28kg",
    "material": "Acero galvanizado",
    "color": "Gris metálico",
    "carga_maxima": "150kg"
  },
  "aplicaciones": [...],
  "compatibilidad_vehiculos": [...],
  "incluye": [...],
  "certificaciones": [...],
  "opciones_personalizacion": [...],
  "plazo_entrega": "5-7 días laborables",
  "instalacion_incluida": true,
  "garantia": "2 años",
  "precio": {
    "base": "450.00",
    "moneda": "EUR",
    "iva_incluido": false,
    "nota_precio": "..."
  },
  "imagenes": [...],
  "destacado": true,
  "nuevo": false,
  "stock": "disponible",
  "meta_seo": {...},
  "relacionados": [...]
}
```

---

## Implementation Phases

### Phase 1: Foundation
1. Create directory structure
2. Set up header.php and footer.php
3. Create main.css (if custom styles needed)
4. Create main.js for mobile menu

### Phase 2: Core Pages
5. Create index.php (6 sections)
6. Create servicios.php (detailed services)
7. Create proyectos.php (gallery)

### Phase 3: Catalog System
8. Create catalogo.php (product listing)
9. Create producto.php (product detail)
10. Create sample productos.json files
11. Create image placeholders structure

### Phase 4: Contact & Legal
12. Create contacto.php
13. Create aviso-legal.php
14. Create politica-privacidad.php
15. Create ley-cookies.php

### Phase 5: PDF System
16. Download and set up TCPDF
17. Create generar-pdf-producto.php
18. Create generar-catalogo.php
19. Test PDF generation

### Phase 6: Testing & Polish
20. Test responsive design
21. Test mobile menu
22. Verify all links work
23. Check color scheme consistency
24. Test PDF downloads

### Phase 7: Documentation
25. Create README.md
26. Create user guide for catalog management

---

## Technical Notes

### Tailwind Configuration
Since using CDN, custom colors defined in `<style>` or `tailwind.config.js`:
```javascript
tailwind.config = {
  theme: {
    extend: {
      colors: {
        'multiwheel-blue': '#1e3a5f',
        'multiwheel-red': '#c8102e',
        'multiwheel-orange': '#f05a28',
        'industrial-gray': '#3a3a3a',
        'steel-gray': '#6b7280',
        'workshop-white': '#f9fafb',
      },
      fontFamily: {
        'rajdhani': ['Rajdhani', 'sans-serif'],
        'opensans': ['Open Sans', 'sans-serif'],
      }
    }
  }
}
```

### Google Fonts
```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Rajdhani:wght@600;700&display=swap" rel="stylesheet">
```

### Font Awesome
```html
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
```

### Placeholder Images
Using Unsplash source URLs:
- Hero: `https://source.unsplash.com/1920x1080/?work+van+interior`
- Services: `https://source.unsplash.com/800x600/?van,truck,workshop`
- Projects: `https://source.unsplash.com/600x600/?vehicle,equipment`
- Products: `https://source.unsplash.com/400x400/?tool,equipment`

---

## Next Steps

1. **Approve this plan** - Review and confirm scope
2. **Start Phase 1** - Create directory structure and shared components
3. **Proceed iteratively** - One phase at a time with user approval

---

*Plan created for Multiwheel Website Development*
*Version 1.0 - Complete implementation plan*
