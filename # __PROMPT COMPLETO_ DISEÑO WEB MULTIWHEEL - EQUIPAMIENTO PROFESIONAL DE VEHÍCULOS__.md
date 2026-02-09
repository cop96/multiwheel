\# \*\*PROMPT COMPLETO: DISEÑO WEB MULTIWHEEL \- EQUIPAMIENTO PROFESIONAL DE VEHÍCULOS\*\*

Crea sitio web completo (5 páginas HTML/PHP) para "Multiwheel" \- especialistas en equipamiento profesional de furgonetas y reparación de grúas en Sevilla (Alcalá de Guadaíra).

\---

\#\# \*\*STACK TÉCNICO\*\*  
\- HTML5 semántico  
\- Tailwind CSS vía CDN  
\- Font Awesome 6 vía CDN  
\- Google Fonts: \*\*"Rajdhani"\*\* (títulos industrial-tech, weights: 600, 700\) \+ \*\*"Open Sans"\*\* (cuerpo legible, weights: 400, 600\)  
\- 100% responsive mobile-first  
\- JavaScript mínimo (solo menú móvil hamburguesa)

\---

\#\# \*\*IDENTIDAD VISUAL MULTIWHEEL\*\*

\#\#\# \*\*PALETA DE COLORES CORPORATIVA\*\*  
\`\`\`css  
/\* Colores primarios extraídos de la identidad actual \*/  
\--multiwheel-blue: \#1e3a5f;       /\* Azul marino corporativo (header, títulos principales, footer) \*/  
\--multiwheel-red: \#c8102e;         /\* Rojo intenso (CTAs principales, hover, badges) \*/  
\--multiwheel-orange: \#f05a28;      /\* Naranja cálido (iconos, acentos secundarios) \*/

/\* Colores neutros \*/  
\--industrial-gray: \#3a3a3a;        /\* Gris oscuro (textos de cuerpo) \*/  
\--steel-gray: \#6b7280;             /\* Gris medio (subtítulos, metadatos) \*/  
\--light-gray: \#e5e7eb;             /\* Gris claro (bordes, divisores) \*/  
\--workshop-white: \#f9fafb;         /\* Blanco ligeramente gris (fondos alternos) \*/

/\* Backgrounds \*/  
\--bg-primary: \#ffffff;             /\* Fondo principal blanco puro \*/  
\--bg-dark: \#1e3a5f;                /\* Fondo oscuro (footer, secciones destacadas) \*/  
\`\`\`

\#\#\# \*\*TIPOGRAFÍA\*\*  
\`\`\`  
Títulos: 'Rajdhani', sans-serif (weights: 600 semibold, 700 bold)  
Cuerpo: 'Open Sans', sans-serif (weights: 400 regular, 600 semibold)  
\`\`\`

\#\#\# \*\*ESTILO VISUAL\*\*  
\- \*\*Profesional-industrial\*\*: Líneas limpias, espaciado funcional (no excesivo), jerarquía clara  
\- \*\*Fotografías reales\*\*: Imágenes de talleres, vehículos equipados, grúas. Sin filtros grayscale. Overlay sutil solo en heros  
\- \*\*Botones\*\*: Border-radius mínimo (4px máximo). Solid backgrounds con hover effects  
\- \*\*Orientado a conversión B2B\*\*: CTAs destacados, teléfono/WhatsApp siempre visibles  
\- \*\*Confianza técnica\*\*: Iconografía Font Awesome, badges de certificación, contadores numéricos

\---

\#\# \*\*ESTRUCTURA DEL SITIO (5 PÁGINAS)\*\*

\`\`\`  
1\. index.php          → Página de inicio  
2\. servicios.php      → Servicios detallados por sector profesional  
3\. proyectos.php      → Galería de trabajos realizados (blog/portfolio dinámico)  
4\. catalogo.php       → Catálogo de productos y equipamiento  
5\. contacto.php       → Formulario de contacto \+ información  
\`\`\`

Todas las páginas comparten: \*\*header.php\*\* (navegación) y \*\*footer.php\*\* (pie de página).

\---

\#\# \*\*INFORMACIÓN CORPORATIVA MULTIWHEEL\*\*

\#\#\# \*\*Datos de contacto\*\*  
\- \*\*Teléfono\*\*: \+34 620 531 511  
\- \*\*Email\*\*: info@multiwheel.es  
\- \*\*Dirección\*\*: Pol. Ind. La Red, Calle 12 Nave 14, 41500 Alcalá de Guadaíra, Sevilla  
\- \*\*Horario\*\*: Lun-Vie 8:00-18:00h / Sáb 9:00-14:00h  
\- \*\*WhatsApp\*\*: \+34 620 531 511  
\- \*\*Años en activo\*\*: Desde 2011  
\- \*\*Vehículos equipados\*\*: Más de 340

\#\#\# \*\*Servicios principales\*\*  
1\. \*\*Equipamiento de furgonetas\*\*: Fabricación a medida de estanterías, bancos de trabajo, suelos antideslizantes, iluminación LED, generadores autónomos  
2\. \*\*Reparación de grúas\*\*: Reparación especializada de grúas de auxilio en carretera, sistemas hidráulicos, plumas  
3\. \*\*Sistemas de rescate\*\*: Venta e instalación de equipos profesionales para rescate en carretera  
4\. \*\*Compra-venta\*\*: Traspaso de carrocerías usadas, renovación de flotas

\#\#\# \*\*Sectores objetivo\*\*  
\- Servicios de grúa y auxilio en carretera  
\- Electricistas, fontaneros, herreros (talleres móviles)  
\- Carpinteros, cerrajeros  
\- Empresas de transporte y distribución  
\- Servicios técnicos profesionales

\---

═══════════════════════════════════════════════════════

\#\# \*\*HEADER.PHP (NAVEGACIÓN COMPARTIDA)\*\*

\*\*Características:\*\*  
\- Header sticky (fixed top), fondo blanco, sombra sutil  
\- Logo izquierda (imagen): "Multiwheel" \+ tagline opcional ("Desde 2011 / Equipamiento Profesional")  
\- Navegación horizontal derecha (desktop): Inicio | Servicios | Proyectos | Catálogo | Contacto  
\- Contacto rápido derecho (desktop): Icono teléfono \+ número "620 531 511" | Botón WhatsApp destacado (bg-multiwheel-red)  
\- Menú hamburguesa mobile (lg breakpoint)  
\- Menú mobile desplegable con links \+ teléfono \+ WhatsApp  
\- Espaciado generoso, padding vertical moderado  
\- Hover en links: color multiwheel-red

\*\*Elementos técnicos:\*\*  
\- JavaScript simple para toggle menú mobile  
\- Links a .php (no .html)  
\- Icono WhatsApp con enlace: \`https://wa.me/34620531511\`  
\- Icono teléfono con enlace: \`tel:+34620531511\`

\---

\#\# \*\*FOOTER.PHP (PIE DE PÁGINA COMPARTIDO)\*\*

\*\*Características:\*\*  
\- Fondo: bg-multiwheel-blue (\#1e3a5f), texto blanco  
\- Layout: Grid 4 columnas (responsive colapsa a 1 columna en mobile)  
\- Padding vertical generoso

\*\*Columna 1 \- Sobre Multiwheel:\*\*  
\- Logo blanco (versión invertida del header)  
\- Descripción breve: "Especialistas en equipamiento profesional de furgonetas y reparación de grúas desde 2011\. Soluciones técnicas para profesionales del auxilio en carretera y talleres móviles en Andalucía."  
\- Iconos redes sociales (Facebook, Instagram, LinkedIn) \- color gray-300, hover blanco

\*\*Columna 2 \- Servicios:\*\*  
\- Título: "Servicios" (color multiwheel-orange)  
\- Lista links:  
  \- Equipamiento de furgonetas  
  \- Reparación de grúas  
  \- Sistemas de rescate en carretera  
  \- Venta de equipos profesionales

\*\*Columna 3 \- Navegación:\*\*  
\- Título: "Navegación" (color multiwheel-orange)  
\- Lista links:  
  \- Inicio  
  \- Proyectos realizados  
  \- Catálogo  
  \- Contacto  
  \- Aviso legal  
  \- Política de privacidad  
  \- Ley de cookies

\*\*Columna 4 \- Contacto:\*\*  
\- Título: "Contacto" (color multiwheel-orange)  
\- Info con iconos Font Awesome:  
  \- \*\*Ubicación\*\*: Pol. Ind. La Red, Calle 12 Nave 14, 41500 Alcalá de Guadaíra, Sevilla  
  \- \*\*Teléfono\*\*: 620 531 511 (enlace tel:)  
  \- \*\*Email\*\*: info@multiwheel.es (enlace mailto:)  
  \- \*\*Horario\*\*: Lun-Vie 8:00-18:00h / Sáb 9:00-14:00h

\*\*Barra inferior (copyright):\*\*  
\- Borde superior (border-blue-800)  
\- Centrado, texto pequeño gray-400  
\- Texto: "© \[año dinámico PHP\] Multiwheel. Todos los derechos reservados."

\---

═══════════════════════════════════════════════════════

\#\# \*\*INDEX.PHP (PÁGINA DE INICIO)\*\*

\#\#\# \*\*SECCIÓN 1: HERO (altura pantalla completa, min-h-600px)\*\*

\*\*Diseño:\*\*  
\- Imagen de fondo: Interior de furgoneta taller equipada profesionalmente (ej: Unsplash "work van interior")  
\- Overlay: Gradient de izquierda a derecha, desde multiwheel-blue 95% opacidad hasta transparente  
\- Contenido alineado izquierda, max-width 2xl, texto blanco

\*\*Copy:\*\*  
\- \*\*Pretítulo\*\* (pequeño, uppercase, tracking-wider, color multiwheel-orange):  
  "Desde 2011 en Sevilla" (icono Font Awesome: fas fa-tools)

\- \*\*Título H1\*\* (font-rajdhani, font-bold, text-5xl md:text-7xl, leading-tight):  
  "Convertimos tu furgoneta en tu mejor herramienta de trabajo"

\- \*\*Subtítulo\*\* (text-xl, color gray-200, leading-relaxed):  
  "Equipamiento profesional para talleres móviles, reparación especializada de grúas y sistemas de rescate en carretera. \*\*Más de 340 vehículos equipados\*\* en Andalucía."

\*\*CTAs (2 botones horizontal, gap-4):\*\*  
1\. Primario (bg-multiwheel-red, hover red-700): "Ver catálogo de equipamiento" → /catalogo  
2\. Secundario (border-2 blanco, hover bg-white text-blue): "Presupuesto gratuito" → /contacto

\*\*Trust badges (fila iconos, flex wrap, text-sm, iconos fas fa-check-circle verde):\*\*  
\- "Instalación incluida"  
\- "Fabricación a medida"  
\- "Garantía certificada"

\*\*Scroll indicator (bottom-8, centrado, animate-bounce):\*\*  
\- Icono chevron-down

\---

\#\#\# \*\*SECCIÓN 2: PROPUESTA DE VALOR (py-16 md:py-24, bg-white)\*\*

\*\*Intro centrada (max-w-3xl mx-auto):\*\*  
\- Pretítulo: "¿Por qué elegirnos?" (uppercase, tracking-wider, multiwheel-orange)  
\- Título H2: "Tu partner técnico de confianza" (font-rajdhani, font-bold, text-4xl md:text-5xl, multiwheel-blue)  
\- Subtítulo: "Fabricamos, instalamos y mantenemos el equipamiento profesional que necesitas para optimizar tu negocio"

\*\*Grid 3 columnas (md:grid-cols-3, gap-8):\*\*

\*\*Valor 1:\*\*  
\- Icono redondo (bg-multiwheel-red/10): fas fa-drafting-compass (color multiwheel-red)  
\- Título: "Fabricación a medida"  
\- Descripción: "Diseñamos el equipamiento según tu actividad profesional: electricistas, fontaneros, herreros, servicios de grúa. Cada instalación es única y adaptada a tu flujo de trabajo."

\*\*Valor 2:\*\*  
\- Icono redondo (bg-multiwheel-orange/10): fas fa-wrench (color multiwheel-orange)  
\- Título: "Instalación completa"  
\- Descripción: "Montaje profesional en nuestras instalaciones de Alcalá de Guadaíra. Certificados de homologación, acabados industriales y revisión técnica garantizada."

\*\*Valor 3:\*\*  
\- Icono redondo (bg-multiwheel-blue/10): fas fa-shield-alt (color multiwheel-blue)  
\- Título: "Servicio postventa"  
\- Descripción: "Reparación y mantenimiento de grúas con piezas originales. Asesoramiento técnico continuo y compra-venta de carrocerías usadas para renovación de flota."

\*\*Diseño cards:\*\* Fondo workshop-white (\#f9fafb), padding 8, hover:shadow-xl transition

\---

\#\#\# \*\*SECCIÓN 3: SERVICIOS POR SECTOR (py-16 md:py-24, bg-workshop-white)\*\*

\*\*Intro centrada:\*\*  
\- Pretítulo: "Soluciones especializadas"  
\- Título H2: "¿Qué tipo de profesional eres?"  
\- Subtítulo: "Equipamiento adaptado a tu sector con todo lo necesario para trabajar de forma eficiente"

\*\*Grid 3 columnas (lg:grid-cols-3, gap-8):\*\*

\*\*Sector 1: Grúas y Auxilio en Carretera\*\*  
\- Badge superior imagen: "Profesionales del auxilio" (bg-multiwheel-red)  
\- Imagen vertical (aspect-ratio 4:3): Grúa de auxilio en carretera  
\- Título con icono: "Grúas y Auxilio en Carretera" (fas fa-truck-pickup)  
\- Descripción: "Sistemas de rescate certificados, reparación de plumas hidráulicas, compra-venta de carrocerías usadas y actualización de equipamiento obsoleto."  
\- Lista checks (fas fa-check verde):  
  \- Reparación de grúas slide-bed y pluma  
  \- Sistemas de winch y rampa hidráulica  
  \- Traspaso de carrocerías certificado  
\- CTA: "Ver detalles del servicio" → /servicios\#gruas

\*\*Sector 2: Taller Móvil Multisector\*\*  
\- Badge: "Multisector" (bg-multiwheel-orange)  
\- Imagen: Interior furgoneta con estanterías y herramientas  
\- Título con icono: "Taller Móvil Multisector" (fas fa-tools)  
\- Descripción: "Estanterías modulares, generadores autónomos, iluminación LED profesional y suelos antideslizantes. Soluciones para electricistas, fontaneros, herreros, carpinteros."  
\- Lista checks:  
  \- Banco de trabajo con cajones y utillaje  
  \- Equipo electrógeno con tomas exteriores  
  \- Sistema de iluminación autónomo  
\- CTA: "Ver detalles del servicio" → /servicios\#taller-movil

\*\*Sector 3: Transporte y Distribución\*\*  
\- Badge: "Logística" (bg-steel-gray)  
\- Imagen: Furgoneta de reparto  
\- Título con icono: "Transporte y Distribución" (fas fa-shipping-fast)  
\- Descripción: "Anclajes homologados, sistemas de carga certificados, divisores de carga y estanterías ligeras para optimizar espacio en vehículos de reparto."  
\- Lista checks:  
  \- Anclajes y sistemas de amarre homologados  
  \- Divisores de carga para separación mercancía  
  \- Estanterías modulares para paquetería  
\- CTA: "Ver detalles del servicio" → /servicios\#transporte

\*\*Diseño cards:\*\* Fondo blanco, overflow-hidden, hover:shadow-2xl, imagen con group-hover:scale-105

\---

\#\#\# \*\*SECCIÓN 4: PRUEBA SOCIAL (py-16 md:py-24, bg-multiwheel-blue, texto blanco)\*\*

\*\*Intro centrada:\*\*  
\- Título H2: "Confían en nosotros"  
\- Subtítulo: "Más de \*\*340 vehículos equipados\*\* desde 2011" (340 en color multiwheel-orange)

\*\*Grid 3 testimonios (md:grid-cols-3, gap-8):\*\*

\*\*Testimonio 1:\*\*  
\- Avatar circular (placeholder: https://i.pravatar.cc/80?img=12)  
\- Nombre: "José M. Ramírez"  
\- Subtítulo: "Electricista \- Sevilla"  
\- 5 estrellas (fas fa-star amarillo)  
\- Texto: "Antes tardaba 40 minutos en preparar la furgoneta cada mañana. Ahora todo está a mano y perfectamente organizado. La inversión se recuperó en 3 meses."

\*\*Testimonio 2:\*\*  
\- Avatar: https://i.pravatar.cc/80?img=33  
\- Nombre: "Grúas Hermanos López"  
\- Subtítulo: "Auxilio en carretera \- Dos Hermanas"  
\- 5 estrellas  
\- Texto: "Llevamos 8 años confiando en Multiwheel para todas las reparaciones de nuestra flota. Respuesta rápida, piezas originales y trabajo impecable."

\*\*Testimonio 3:\*\*  
\- Avatar: https://i.pravatar.cc/80?img=25  
\- Nombre: "Ana Martínez"  
\- Subtítulo: "Fontanera \- Alcalá de Guadaíra"  
\- 5 estrellas  
\- Texto: "Me diseñaron un taller móvil específico para fontanería con almacenaje para tubos largos. Atención personalizada y profesional de principio a fin."

\*\*Diseño cards:\*\* bg-white/10 backdrop-blur, padding 6, border border-white/20

\---

\#\#\# \*\*SECCIÓN 5: GALERÍA PROYECTOS PREVIEW (py-16 md:py-24, bg-white)\*\*

\*\*Intro centrada:\*\*  
\- Pretítulo: "Nuestros proyectos"  
\- Título H2: "Equipamientos realizados"  
\- Subtítulo: "Cada proyecto es único. Descubre cómo transformamos vehículos comerciales en herramientas profesionales"

\*\*Grid 6 imágenes (grid-cols-2 md:grid-cols-3, gap-4):\*\*  
\- Imágenes cuadradas (aspect-square)  
\- Overlay en hover: bg-multiwheel-blue/80, opacidad 0 → 100, con texto "Ver proyecto" centrado blanco  
\- Hover scale-110 en imagen

\*\*Imágenes sugeridas (Unsplash keywords):\*\*  
\- "work van interior"  
\- "commercial vehicle equipment"  
\- "mobile workshop"  
\- "tow truck"  
\- "van shelving system"  
\- "professional van conversion"

\*\*CTA centrado:\*\*  
\- Botón: "Ver todos los proyectos" (bg-multiwheel-red, hover red-700) → /proyectos

\---

\#\#\# \*\*SECCIÓN 6: CTA FINAL (py-20 md:py-32, gradient multiwheel-blue to blue-800)\*\*

\*\*Diseño:\*\*  
\- Fondo gradient con pattern sutil (opcional SVG pattern)  
\- Contenido centrado, texto blanco

\*\*Copy:\*\*  
\- Pretítulo: "¿Listo para empezar?" (uppercase, tracking-wider, multiwheel-orange)  
\- Título H2: "Solicita tu presupuesto sin compromiso" (font-rajdhani, font-bold, text-4xl md:text-6xl)  
\- Subtítulo: "Cuéntanos tu proyecto y te enviaremos un presupuesto detallado en menos de 24 horas. Primera consulta técnica gratuita."

\*\*CTAs (flex row, gap-6, centrado):\*\*  
1\. "Solicitar presupuesto" (bg-multiwheel-red, hover red-700) → /contacto  
2\. "Llamar ahora: 620 531 511" (border-2 blanco, hover bg-white) → tel:+34620531511  
3\. "WhatsApp" (bg-green-600, hover green-700) → WhatsApp link con mensaje prellenado

\*\*Trust elements (flex wrap, gap-8, text-sm, iconos):\*\*  
\- fas fa-shield-check verde: "Presupuesto sin compromiso"  
\- fas fa-clock multiwheel-orange: "Respuesta en 24h"  
\- fas fa-tools blue-300: "Consulta técnica gratis"

\---

═══════════════════════════════════════════════════════

\#\# \*\*SERVICIOS.PHP\*\*

\#\#\# \*\*HERO SIMPLE (altura media, bg-multiwheel-blue)\*\*  
\- Título H1 centrado blanco: "Nuestros Servicios"  
\- Subtítulo: "Soluciones profesionales adaptadas a tu sector"

\---

\#\#\# \*\*SERVICIOS DETALLADOS (py-16 md:py-24, bg-white)\*\*

\*\*Layout alternado (imagen izquierda/derecha):\*\*  
Grid 2 columnas (lg:grid-cols-2, gap-12), orden inverso en pares

\---

\*\*SERVICIO 1: EQUIPAMIENTO DE FURGONETAS\*\* (id="equipamiento")

\*\*Imagen izquierda:\*\*  
\- Imagen vertical grande: Interior furgoneta equipada  
\- Alt text descriptivo

\*\*Contenido derecha:\*\*  
\- Número decorativo grande: "01" (text-8xl, font-bold, multiwheel-orange/20)  
\- Pretítulo: "Talleres móviles" (uppercase, tracking-wider, multiwheel-orange)  
\- Título H2: "Equipamiento completo de furgonetas" (font-rajdhani, font-bold, text-3xl, multiwheel-blue)  
\- Descripción extensa (3 párrafos):  
  \- "Transformamos tu vehículo comercial en un taller móvil completamente funcional. Diseñamos e instalamos estanterías modulares, bancos de trabajo con cajones organizadores, suelos antideslizantes de alta resistencia y sistemas de iluminación LED autónomos."  
  \- "Cada proyecto es único. Estudiamos tu actividad profesional (electricista, fontanero, carpintero, herrero) para crear una distribución óptima que maximice el espacio y mejore tu eficiencia laboral."  
  \- "Instalación completa en nuestras instalaciones con certificados de homologación. Acabados industriales de alta calidad y garantía certificada."

\*\*Lista características (2 columnas, checks verdes):\*\*  
\- Estanterías modulares personalizadas  
\- Bancos de trabajo con cajones  
\- Suelos antideslizantes profesionales  
\- Iluminación LED autónoma  
\- Generadores eléctricos portátiles  
\- Sistemas de ventilación  
\- Anclajes de seguridad homologados  
\- Divisores de carga certificados

\*\*CTA:\*\*  
\- "Solicitar presupuesto para equipamiento" → /contacto

\---

\*\*SERVICIO 2: REPARACIÓN DE GRÚAS\*\* (id="gruas")

\*\*Contenido izquierda\*\* (orden invertido en grid)

\*\*Imagen derecha:\*\*  
\- Imagen: Grúa de auxilio siendo reparada

\*\*Contenido:\*\*  
\- Número: "02"  
\- Pretítulo: "Auxilio en carretera"  
\- Título H2: "Reparación especializada de grúas"  
\- Descripción extensa:  
  \- "Servicio técnico especializado en reparación de grúas de auxilio en carretera. Trabajamos con grúas slide-bed, pluma hidráulica, winch y sistemas de rescate certificados."  
  \- "Nuestro taller cuenta con equipamiento profesional para intervenciones en sistemas hidráulicos, estructuras metálicas, sistemas eléctricos y componentes mecánicos. Utilizamos exclusivamente piezas originales y certificadas."  
  \- "Diagnóstico técnico sin compromiso. Presupuesto detallado antes de cualquier intervención. Servicio de urgencias para averías críticas."

\*\*Lista características:\*\*  
\- Reparación de plumas hidráulicas  
\- Sistemas winch y cabrestantes  
\- Rampas hidráulicas slide-bed  
\- Estructuras metálicas y carrocerías  
\- Sistemas eléctricos y electrónicos  
\- Mantenimiento preventivo  
\- Revisiones técnicas ITV  
\- Compra-venta de carrocerías usadas

\*\*CTA:\*\*  
\- "Solicitar diagnóstico técnico" → /contacto

\---

\*\*SERVICIO 3: SISTEMAS DE RESCATE\*\* (id="sistemas")

\*\*Imagen izquierda\*\*

\*\*Contenido derecha:\*\*  
\- Número: "03"  
\- Pretítulo: "Equipamiento profesional"  
\- Título H2: "Venta de equipos de rescate"  
\- Descripción extensa:  
  \- "Distribuimos equipamiento profesional certificado para servicios de auxilio en carretera: plataformas de arrastre, sistemas de elevación, winches eléctricos, cadenas y cinchas de amarre."  
  \- "Todos nuestros productos cumplen normativa europea de seguridad. Asesoramiento técnico personalizado para elegir el equipamiento adecuado según tipo de vehículo y uso profesional."  
  \- "Instalación profesional incluida. Formación en uso correcto del equipamiento. Servicio postventa y recambios garantizados."

\*\*Lista características:\*\*  
\- Plataformas de arrastre certificadas  
\- Winches eléctricos profesionales  
\- Sistemas de elevación hidráulicos  
\- Cadenas y cinchas homologadas  
\- Ruedas de apoyo y carros  
\- Kits de rescate completos  
\- Iluminación de emergencia  
\- Señalización profesional

\*\*CTA:\*\*  
\- "Ver catálogo de equipos" → /catalogo

\---

\#\#\# \*\*SECCIÓN CTA (igual que index.php)\*\*

\---

═══════════════════════════════════════════════════════

\#\# \*\*PROYECTOS.PHP (GALERÍA DINÁMICA \- BLOG/PORTFOLIO)\*\*

\#\#\# \*\*HERO SIMPLE\*\*  
\- Título H1: "Proyectos realizados"  
\- Subtítulo: "Equipamientos profesionales que transforman vehículos en herramientas de trabajo"

\---

\#\#\# \*\*NOTA TÉCNICA (placeholder temporal)\*\*

\*\*Si aún no hay integración WordPress:\*\*  
Mostrar caja destacada (bg-yellow-50, border-yellow-400):  
"Esta sección mostrará dinámicamente los proyectos realizados. Se conectará a WordPress para gestionar contenido fácilmente."

\---

\#\#\# \*\*GRID PROYECTOS (grid-cols-1 md:grid-cols-2 lg:grid-cols-3, gap-8)\*\*

\*\*Estructura card proyecto:\*\*  
\- Imagen vertical (aspect-ratio 4:3)  
\- Badge categoría superior (bg-multiwheel-orange): "Taller móvil" / "Grúa" / "Transporte"  
\- Título proyecto (font-rajdhani, font-bold, text-xl)  
\- Extracto breve (2-3 líneas, text-steel-gray)  
\- Link "Ver proyecto completo" → /proyectos/\[slug\]  
\- Hover: Shadow-xl, imagen scale-105

\*\*Proyectos placeholder (6 ejemplos):\*\*

1\. \*\*Furgoneta taller para electricista en Sevilla\*\*  
   \- Categoría: Taller móvil  
   \- Extracto: "Equipamiento completo con estanterías modulares, banco de trabajo y generador autónomo para profesional del sector eléctrico."

2\. \*\*Reparación integral de grúa slide-bed\*\*  
   \- Categoría: Reparación grúas  
   \- Extracto: "Intervención completa en sistema hidráulico y estructura. Sustitución de cilindros y revisión técnica para renovación ITV."

3\. \*\*Taller móvil fontanería con almacenaje especial\*\*  
   \- Categoría: Taller móvil  
   \- Extracto: "Diseño personalizado con soportes para tubos largos, estanterías para accesorios y banco de trabajo con tornillo de banco."

4\. \*\*Equipamiento furgoneta carpintero en Dos Hermanas\*\*  
   \- Categoría: Taller móvil  
   \- Extracto: "Instalación de estanterías reforzadas para herramientas eléctricas, suelo antideslizante y sistema de iluminación LED."

5\. \*\*Traspaso carrocería grúa usada Iveco Daily\*\*  
   \- Categoría: Compra-venta  
   \- Extracto: "Renovación completa de flota. Traspaso de carrocería en perfecto estado con certificación técnica incluida."

6\. \*\*Furgoneta reparto con divisores de carga\*\*  
   \- Categoría: Transporte  
   \- Extracto: "Instalación de anclajes homologados, estanterías ligeras y divisores de carga para optimización logística."

\---

\#\#\# \*\*PAGINACIÓN (si hay muchos proyectos)\*\*  
Botones numéricos centrados

\---

═══════════════════════════════════════════════════════

\#\# \*\*CATALOGO.PHP\*\*

\#\#\# \*\*HERO SIMPLE\*\*  
\- Título H1: "Catálogo de equipamiento"  
\- Subtítulo: "Productos profesionales certificados para tu vehículo de trabajo"

\---

\#\#\# \*\*FILTROS (opcional, flex row, gap-4)\*\*  
Botones categorías:  
\- Todos  
\- Estanterías  
\- Bancos de trabajo  
\- Iluminación  
\- Generadores  
\- Sistemas rescate  
\- Anclajes  
\- Accesorios

\---

\#\#\# \*\*GRID PRODUCTOS (grid-cols-1 md:grid-cols-3 lg:grid-cols-4, gap-6)\*\*

\*\*Estructura card producto:\*\*  
\- Imagen producto (aspect-square, fondo blanco o gris claro)  
\- Badge: "Nuevo" / "Destacado" (opcional)  
\- Nombre producto (font-semibold, text-lg)  
\- Descripción breve (1 línea)  
\- Características principales (2-3 bullets pequeños)  
\- Botón: "Consultar disponibilidad" → /contacto (pasar nombre producto en query string)

\---

\*\*PRODUCTOS EJEMPLO (12 productos):\*\*

1\. \*\*Estantería modular lateral derecha\*\*  
   \- Imagen: Estantería metal con cajones  
   \- Descripción: "Estructura metálica con 5 baldas ajustables"  
   \- Características: Capacidad 150kg, acabado galvanizado, montaje lateral

2\. \*\*Banco de trabajo plegable con tornillo\*\*  
   \- Imagen: Banco trabajo  
   \- Descripción: "Banco profesional con cajones organizadores"  
   \- Características: Superficie 120x60cm, 6 cajones, tornillo de banco incluido

3\. \*\*Kit iluminación LED autónoma\*\*  
   \- Imagen: Barras LED  
   \- Descripción: "Sistema completo iluminación interior"  
   \- Características: 4 barras LED 12V, interruptores independientes, cableado completo

4\. \*\*Generador portátil 3000W\*\*  
   \- Imagen: Generador compacto  
   \- Descripción: "Generador eléctrico silencioso"  
   \- Características: 3000W potencia, arranque eléctrico, salidas 220V y USB

5\. \*\*Suelo antideslizante fenólico\*\*  
   \- Imagen: Suelo negro texturizado  
   \- Descripción: "Suelo profesional alta resistencia"  
   \- Características: Grosor 15mm, antideslizante R13, fácil limpieza

6\. \*\*Divisor de carga homologado\*\*  
   \- Imagen: Malla divisoria  
   \- Descripción: "Separación cabina-carga certificada"  
   \- Características: Malla metálica, homologación R17, ajustable altura

7\. \*\*Winch eléctrico 5000kg\*\*  
   \- Imagen: Cabrestante eléctrico  
   \- Descripción: "Cabrestante profesional para rescate"  
   \- Características: Tracción 5000kg, cable acero 20m, mando distancia

8\. \*\*Sistema anclajes carril\*\*  
   \- Imagen: Carril anclaje suelo  
   \- Descripción: "Carril aluminio con anclajes móviles"  
   \- Características: Longitud 3m, carga máxima 400kg, certificado EN12640

9\. \*\*Estantería cajones pequeños\*\*  
   \- Imagen: Organizador cajones plástico  
   \- Descripción: "Organizador modular 24 cajones"  
   \- Características: Cajones transparentes, montaje pared, etiquetas incluidas

10\. \*\*Kit ventilación forzada\*\*  
    \- Imagen: Extractores aire  
    \- Descripción: "Sistema ventilación para trabajos cerrados"  
    \- Características: 2 extractores 12V, conductos flexibles, filtros polvo

11\. \*\*Plataforma arrastre 1500kg\*\*  
    \- Imagen: Plataforma metálica  
    \- Descripción: "Plataforma rescate vehículos"  
    \- Características: Capacidad 1500kg, ruedas giratorias, rampa acceso

12\. \*\*Iluminación emergencia LED\*\*  
    \- Imagen: Barra luz naranja  
    \- Descripción: "Barra LED emergencia homologada"  
    \- Características: 120cm, luz ámbar, magnética, batería recargable

\---

\#\#\# \*\*CTA INFERIOR\*\*  
"¿No encuentras lo que buscas? Contáctanos para equipamiento personalizado" → /contacto

\---

═══════════════════════════════════════════════════════

\#\# \*\*CONTACTO.PHP\*\*

\#\#\# \*\*HERO SIMPLE\*\*  
\- Título H1: "Contacta con nosotros"  
\- Subtítulo: "Cuéntanos tu proyecto y te enviaremos un presupuesto personalizado en menos de 24 horas"

\---

\#\#\# \*\*LAYOUT 2 COLUMNAS (lg:grid-cols-2, gap-12)\*\*

\---

\*\*COLUMNA IZQUIERDA: INFORMACIÓN\*\*

\*\*Título H3:\*\* "Estamos aquí para ayudarte"

\*\*Párrafo introductorio:\*\*  
"Más de 14 años equipando vehículos profesionales en Andalucía. Primera consulta técnica gratuita. Te asesoramos sin compromiso sobre la mejor solución para tu negocio."

\*\*Información contacto (iconos Font Awesome, espaciado generoso):\*\*

\- \*\*fas fa-map-marker-alt (multiwheel-red)\*\*  
  Pol. Ind. La Red, Calle 12 Nave 14  
  41500 Alcalá de Guadaíra, Sevilla

\- \*\*fas fa-phone (multiwheel-orange)\*\*  
  620 531 511  
  (enlace tel:+34620531511)

\- \*\*fas fa-envelope (multiwheel-blue)\*\*  
  info@multiwheel.es  
  (enlace mailto:info@multiwheel.es)

\- \*\*fas fa-clock (steel-gray)\*\*  
  Lunes a Viernes: 8:00 \- 18:00h  
  Sábados: 9:00 \- 14:00h  
  Domingos y festivos: Cerrado

\*\*Botón WhatsApp destacado:\*\*  
"Chatea por WhatsApp" (bg-green-600, icono fab fa-whatsapp)  
Enlace: \`https://wa.me/34620531511?text=Hola,%20quiero%20información%20sobre%20equipamiento%20profesional\`

\*\*Mapa Google (opcional, iframe):\*\*  
Embed mapa ubicación taller

\---

\*\*COLUMNA DERECHA: FORMULARIO\*\*

\*\*Título H3:\*\* "Solicita tu presupuesto"

\*\*Campos formulario (espaciado vertical generoso, labels claros):\*\*

1\. \*\*Nombre completo\*\* (text, required)  
   \- Placeholder: "Tu nombre"

2\. \*\*Email\*\* (email, required)  
   \- Placeholder: "tucorreo@ejemplo.com"

3\. \*\*Teléfono\*\* (tel, required)  
   \- Placeholder: "620 123 456"

4\. \*\*Tipo de vehículo\*\* (select, required)  
   \- Opciones:  
     \- Furgoneta pequeña (Berlingo, Kangoo, Caddy)  
     \- Furgoneta mediana (Transit, Trafic, Vito)  
     \- Furgoneta grande (Sprinter, Master, Daily)  
     \- Grúa de auxilio  
     \- Camión ligero  
     \- Otro (especificar en mensaje)

5\. \*\*Tipo de proyecto\*\* (select, required)  
   \- Opciones:  
     \- Equipamiento taller móvil  
     \- Reparación de grúa  
     \- Compra de equipos  
     \- Traspaso carrocería  
     \- Consulta técnica  
     \- Otro

6\. \*\*Presupuesto aproximado\*\* (select, opcional)  
   \- Opciones:  
     \- Menos de 2.000€  
     \- 2.000€ \- 5.000€  
     \- 5.000€ \- 10.000€  
     \- Más de 10.000€  
     \- No lo sé / Necesito asesoramiento

7\. \*\*Mensaje\*\* (textarea, required, rows 6\)  
   \- Placeholder: "Describe tu proyecto con el máximo detalle posible: tipo de actividad profesional, necesidades específicas, plazos..."

8\. \*\*Checkbox privacidad\*\* (required)  
   \- Texto: "He leído y acepto la \[política de privacidad\](\#) y el tratamiento de mis datos para recibir presupuesto."

\*\*Botón submit:\*\*  
"Enviar solicitud" (bg-multiwheel-red, hover red-700, ancho completo, py-4, font-bold)

\*\*Nota inferior (text-sm, text-steel-gray):\*\*  
"Responderemos en menos de 24 horas laborables. Todos los presupuestos son sin compromiso."

\---

\#\#\# \*\*SECCIÓN INFERIOR: PROCESO DE TRABAJO (py-16, bg-workshop-white)\*\*

\*\*Título centrado H2:\*\* "Cómo trabajamos"

\*\*Grid 4 pasos (md:grid-cols-4, gap-6):\*\*

\*\*Paso 1:\*\*  
\- Número grande: "01" (text-6xl, multiwheel-orange/30)  
\- Icono: fas fa-comments  
\- Título: "Consulta inicial"  
\- Texto: "Nos cuentas tu proyecto y necesidades"

\*\*Paso 2:\*\*  
\- Número: "02"  
\- Icono: fas fa-ruler-combined  
\- Título: "Diseño personalizado"  
\- Texto: "Creamos solución técnica adaptada"

\*\*Paso 3:\*\*  
\- Número: "03"  
\- Icono: fas fa-file-invoice  
\- Título: "Presupuesto detallado"  
\- Texto: "Sin costes ocultos ni sorpresas"

\*\*Paso 4:\*\*  
\- Número: "04"  
\- Icono: fas fa-check-circle  
\- Título: "Instalación y entrega"  
\- Texto: "Montaje profesional con garantía"

\---

═══════════════════════════════════════════════════════

\#\# \*\*INTEGRACIÓN WORDPRESS (PROYECTOS DINÁMICOS)\*\*

\#\#\# \*\*TAREA: CONVERTIR A PHP CON WORDPRESS REST API\*\*

\*\*WordPress instalado en:\*\* cms.multiwheel.es (o subdominio que definas)

\*\*Posts nativos WordPress\*\* (no custom post types)

\*\*Categorías de proyectos:\*\*  
\- Taller móvil  
\- Reparación grúas  
\- Transporte  
\- Compra-venta

\---

\#\#\# \*\*CONVERSIÓN PÁGINAS A PHP:\*\*

\*\*Estructura archivos:\*\*  
\`\`\`  
/header.php         (navegación compartida)  
/footer.php         (pie compartido)  
/index.php          (home)  
/servicios.php      (servicios)  
/proyectos.php      (listado dinámico)  
/articulo.php       (proyecto individual)  
/catalogo.php       (catálogo)  
/contacto.php       (formulario)  
\`\`\`

Cada página incluye:  
\`\`\`php  
\<?php include 'header.php'; ?\>  
\<\!-- contenido página \--\>  
\<?php include 'footer.php'; ?\>  
\`\`\`

\---

\#\#\# \*\*PROYECTOS.PHP \- FETCH DINÁMICO\*\*

\*\*Endpoint API:\*\*  
\`https://cms.multiwheel.es/wp-json/wp/v2/posts?\_embed\&per\_page=12\`

\*\*Código PHP estructura:\*\*  
\`\`\`php  
\<?php  
$api\_url \= 'https://cms.multiwheel.es/wp-json/wp/v2/posts?\_embed\&per\_page=12';  
$response \= @file\_get\_contents($api\_url);

if ($response \=== false) {  
    // Mensaje error elegante: "No se pueden cargar proyectos en este momento"  
} else {  
    $posts \= json\_decode($response);  
    if (\!empty($posts)) {  
        // Loop por posts renderizando cards  
        foreach ($posts as $post) {  
            // Extraer datos:  
            $titulo \= $post-\>title-\>rendered;  
            $slug \= $post-\>slug;  
            $extracto \= $post-\>excerpt-\>rendered;  
            $fecha \= date('d/m/Y', strtotime($post-\>date));  
              
            // Imagen destacada (validar existencia)  
            $imagen \= '';  
            if (isset($post-\>\_embedded\['wp:featuredmedia'\]\[0\]\['source\_url'\])) {  
                $imagen \= $post-\>\_embedded\['wp:featuredmedia'\]\[0\]\['source\_url'\];  
            } else {  
                $imagen \= '/assets/placeholder-project.jpg'; // Fallback  
            }  
              
            // Categoría principal  
            $categoria \= 'Sin categoría';  
            if (isset($post-\>\_embedded\['wp:term'\]\[0\]\[0\]\['name'\])) {  
                $categoria \= $post-\>\_embedded\['wp:term'\]\[0\]\[0\]\['name'\];  
            }  
              
            // Renderizar card (mantener diseño Tailwind)  
            ?\>  
            \<div class="bg-white overflow-hidden hover:shadow-xl transition-shadow"\>  
                \<div class="relative aspect-\[4/3\] overflow-hidden"\>  
                    \<img src="\<?php echo $imagen; ?\>" alt="\<?php echo $titulo; ?\>" class="w-full h-full object-cover group-hover:scale-105 transition-transform"\>  
                    \<div class="absolute top-4 left-4 bg-multiwheel-orange text-white px-3 py-1 text-sm font-semibold"\>  
                        \<?php echo $categoria; ?\>  
                    \</div\>  
                \</div\>  
                \<div class="p-6"\>  
                    \<h3 class="font-rajdhani font-bold text-xl text-industrial-gray mb-2"\>\<?php echo $titulo; ?\>\</h3\>  
                    \<div class="text-steel-gray text-sm mb-4"\>\<?php echo $extracto; ?\>\</div\>  
                    \<a href="/proyectos/\<?php echo $slug; ?\>" class="text-multiwheel-red font-semibold hover:underline"\>  
                        Ver proyecto completo →  
                    \</a\>  
                \</div\>  
            \</div\>  
            \<?php  
        }  
    } else {  
        // Mensaje "no hay proyectos"  
    }  
}  
?\>  
\`\`\`

\---

\#\#\# \*\*ARTICULO.PHP \- PROYECTO INDIVIDUAL\*\*

\*\*Recibe slug vía GET:\*\* \`/proyectos/nombre-proyecto\` → \`$\_GET\['slug'\]\`

\*\*Endpoint API:\*\*  
\`https://cms.multiwheel.es/wp-json/wp/v2/posts?slug=\[slug\]&\_embed\`

\*\*Código estructura:\*\*  
\`\`\`php  
\<?php  
$slug \= $\_GET\['slug'\] ?? '';  
if (empty($slug)) {  
    http\_response\_code(404);  
    echo "Proyecto no encontrado";  
    exit;  
}

$api\_url \= "https://cms.multiwheel.es/wp-json/wp/v2/posts?slug={$slug}&\_embed";  
$response \= @file\_get\_contents($api\_url);  
$posts \= json\_decode($response);

if (empty($posts)) {  
    http\_response\_code(404);  
    // Mostrar 404 elegante con link volver a proyectos  
    exit;  
}

$post \= $posts\[0\];  
$titulo \= $post-\>title-\>rendered;  
$contenido \= $post-\>content-\>rendered;  
$fecha \= date('d/m/Y', strtotime($post-\>date));  
$imagen \= $post-\>\_embedded\['wp:featuredmedia'\]\[0\]\['source\_url'\] ?? '';  
$categoria \= $post-\>\_embedded\['wp:term'\]\[0\]\[0\]\['name'\] ?? '';  
?\>

\<\!-- HTML estructura proyecto individual \--\>  
\<section class="py-16"\>  
    \<div class="container mx-auto px-4 max-w-4xl"\>  
          
        \<\!-- Breadcrumb \--\>  
        \<div class="text-sm text-steel-gray mb-6"\>  
            \<a href="/" class="hover:text-multiwheel-red"\>Inicio\</a\> /   
            \<a href="/proyectos" class="hover:text-multiwheel-red"\>Proyectos\</a\> /   
            \<span\>\<?php echo $titulo; ?\>\</span\>  
        \</div\>  
          
        \<\!-- Imagen destacada \--\>  
        \<?php if ($imagen): ?\>  
        \<img src="\<?php echo $imagen; ?\>" alt="\<?php echo $titulo; ?\>" class="w-full h-96 object-cover mb-8"\>  
        \<?php endif; ?\>  
          
        \<\!-- Metadatos \--\>  
        \<div class="flex items-center gap-4 mb-6"\>  
            \<span class="bg-multiwheel-orange text-white px-3 py-1 text-sm font-semibold"\>\<?php echo $categoria; ?\>\</span\>  
            \<span class="text-steel-gray text-sm"\>\<i class="far fa-calendar mr-2"\>\</i\>\<?php echo $fecha; ?\>\</span\>  
        \</div\>  
          
        \<\!-- Título \--\>  
        \<h1 class="font-rajdhani font-bold text-4xl md:text-5xl text-multiwheel-blue mb-8"\>\<?php echo $titulo; ?\>\</h1\>  
          
        \<\!-- Contenido (aplicar estilos prosa) \--\>  
        \<div class="prose prose-lg max-w-none"\>  
            \<?php echo $contenido; ?\>  
        \</div\>  
          
        \<\!-- CTA volver \--\>  
        \<div class="mt-12 pt-8 border-t"\>  
            \<a href="/proyectos" class="inline-block bg-multiwheel-blue text-white px-6 py-3 font-semibold hover:bg-blue-900"\>  
                ← Volver a proyectos  
            \</a\>  
        \</div\>  
          
    \</div\>  
\</section\>  
\`\`\`

\---

\#\#\# \*\*ESTILOS PROSA PARA CONTENIDO WORDPRESS\*\*

Añadir CSS custom para formatear contenido posts:  
\`\`\`css  
.prose p { margin-bottom: 1.5rem; line-height: 1.8; color: \#3a3a3a; }  
.prose h2 { font-family: 'Rajdhani', sans-serif; font-weight: 700; font-size: 2rem; color: \#1e3a5f; margin-top: 2rem; margin-bottom: 1rem; }  
.prose h3 { font-weight: 600; font-size: 1.5rem; color: \#1e3a5f; margin-top: 1.5rem; }  
.prose ul, .prose ol { margin-left: 1.5rem; margin-bottom: 1.5rem; }  
.prose li { margin-bottom: 0.5rem; }  
.prose a { color: \#c8102e; text-decoration: underline; }  
.prose a:hover { color: \#f05a28; }  
.prose img { width: 100%; height: auto; margin: 2rem 0; border-radius: 4px; }  
\`\`\`

\---

\#\#\# \*\*.HTACCESS PARA URLS LIMPIAS\*\*

Crear archivo \`.htaccess\` en raíz con:  
\`\`\`apache  
RewriteEngine On

\# Proyecto individual  
RewriteCond %{REQUEST\_FILENAME} \!-f  
RewriteCond %{REQUEST\_FILENAME} \!-d  
RewriteRule ^proyectos/(\[a-z0-9-\]+)/?$ articulo.php?slug=$1 \[L,QSA\]

\# Listado proyectos  
RewriteRule ^proyectos/?$ proyectos.php \[L\]

\# Remover .php de URLs (opcional)  
RewriteCond %{REQUEST\_FILENAME} \!-f  
RewriteCond %{REQUEST\_FILENAME} \!-d  
RewriteRule ^(\[^\\.\]+)$ $1.php \[NC,L\]  
\`\`\`

\*\*Resultado URLs limpias:\*\*  
\- \`/proyectos\` → proyectos.php  
\- \`/proyectos/furgoneta-electricista-sevilla\` → articulo.php?slug=furgoneta-electricista-sevilla  
\- \`/servicios\` → servicios.php  
\- \`/contacto\` → contacto.php

\---

\#\#\# \*\*BLOQUEAR FRONTEND WORDPRESS (OPCIONAL)\*\*

Si WordPress solo se usa como CMS y no quieres que se vea públicamente:

Crear \`.htaccess\` en raíz WordPress (cms.multiwheel.es):  
\`\`\`apache  
RewriteEngine On

\# Permitir acceso a wp-admin, wp-login, API, assets  
RewriteCond %{REQUEST\_URI} \!^/wp-admin  
RewriteCond %{REQUEST\_URI} \!^/wp-login.php  
RewriteCond %{REQUEST\_URI} \!^/wp-json  
RewriteCond %{REQUEST\_URI} \!^/wp-content  
RewriteCond %{REQUEST\_URI} \!^/wp-includes

\# Redirigir resto a web principal  
RewriteRule ^(.\*)$ https://multiwheel.es/ \[R=301,L\]  
\`\`\`

\---

═══════════════════════════════════════════════════════

\#\# \*\*OPTIMIZACIONES FINALES\*\*

\#\#\# \*\*SEO ON-PAGE:\*\*

\*\*Meta tags en header.php:\*\*  
\`\`\`php  
\<meta charset="UTF-8"\>  
\<meta name="viewport" content="width=device-width, initial-scale=1.0"\>  
\<title\>\<?php echo $page\_title ?? 'Multiwheel \- Equipamiento profesional de furgonetas en Sevilla'; ?\>\</title\>  
\<meta name="description" content="\<?php echo $page\_description ?? 'Especialistas en equipamiento de furgonetas y reparación de grúas desde 2011\. Talleres móviles, sistemas de rescate y soluciones técnicas en Alcalá de Guadaíra, Sevilla.'; ?\>"\>  
\<meta name="keywords" content="equipamiento furgonetas, taller móvil, reparación grúas, auxilio carretera, Sevilla, Alcalá de Guadaíra"\>

\<\!-- Open Graph \--\>  
\<meta property="og:title" content="\<?php echo $page\_title ?? 'Multiwheel'; ?\>"\>  
\<meta property="og:description" content="\<?php echo $page\_description ?? ''; ?\>"\>  
\<meta property="og:image" content="https://multiwheel.es/assets/og-image.jpg"\>  
\<meta property="og:type" content="website"\>  
\`\`\`

\*\*Variables dinámicas por página:\*\*  
\`\`\`php  
// En index.php  
$page\_title \= 'Multiwheel \- Equipamiento profesional de furgonetas en Sevilla';  
$page\_description \= 'Transformamos tu furgoneta en herramienta de trabajo. \+340 vehículos equipados desde 2011\. Talleres móviles, reparación de grúas y sistemas de rescate.';  
\`\`\`

\---

\#\#\# \*\*PERFORMANCE:\*\*

\*\*Lazy loading imágenes:\*\*  
\`\`\`html  
\<img src="..." alt="..." loading="lazy"\>  
\`\`\`

\*\*Preconnect CDNs:\*\*  
\`\`\`html  
\<link rel="preconnect" href="https://fonts.googleapis.com"\>  
\<link rel="preconnect" href="https://cdnjs.cloudflare.com"\>  
\`\`\`

\*\*Minificar CSS/JS en producción\*\* (si aplica)

\---

\#\#\# \*\*ACCESIBILIDAD:\*\*

\- Alt text descriptivo en todas las imágenes  
\- Labels asociados a inputs (for/id)  
\- Contraste colores suficiente (WCAG AA)  
\- Navegación por teclado funcional  
\- Semántica HTML correcta (header, nav, main, section, footer)

\---

═══════════════════════════════════════════════════════

\#\# \*\*REQUISITOS TÉCNICOS FINALES\*\*

\#\#\# \*\*ESPACIADO:\*\*  
\- Secciones: py-16 md:py-24 (padding vertical generoso)  
\- Contenedores: container mx-auto px-4 (márgenes laterales consistentes)  
\- Grids: gap-6 a gap-12 según densidad información  
\- Nunca texto pegado a bordes o elementos apretados

\#\#\# \*\*TIPOGRAFÍA:\*\*  
\- H1: text-5xl md:text-7xl, font-rajdhani, font-bold  
\- H2: text-4xl md:text-5xl, font-rajdhani, font-bold  
\- H3: text-2xl md:text-3xl, font-rajdhani, font-bold  
\- Body: text-base md:text-lg, font-open-sans, leading-relaxed  
\- Line-height generoso siempre (leading-relaxed, leading-loose)

\#\#\# \*\*IMÁGENES:\*\*  
\- Alta calidad, optimizadas web (max 300KB)  
\- Keywords Unsplash: "work van interior", "commercial vehicle", "mobile workshop", "tow truck", "professional van conversion"  
\- Alt text descriptivo SEO-friendly  
\- Lazy loading activado

\#\#\# \*\*RESPONSIVE:\*\*  
\- Mobile-first approach  
\- Breakpoints Tailwind: sm (640px), md (768px), lg (1024px), xl (1280px)  
\- Grids colapsan apropiadamente (grid-cols-1 md:grid-cols-2 lg:grid-cols-3)  
\- Menú hamburguesa funcional en mobile  
\- Botones CTAs full-width en mobile

\#\#\# \*\*COLORES CONSISTENTES:\*\*  
\- Títulos principales: multiwheel-blue (\#1e3a5f)  
\- CTAs primarios: multiwheel-red (\#c8102e)  
\- Acentos/iconos: multiwheel-orange (\#f05a28)  
\- Textos cuerpo: industrial-gray (\#3a3a3a)  
\- Fondos alternos: workshop-white (\#f9fafb)

\#\#\# \*\*INTERACTIVIDAD:\*\*  
\- Hover effects en links/botones (transitions suaves)  
\- Shadow-xl en hover cards  
\- Scale-105 en hover imágenes (group-hover)  
\- Botones con estados hover distintivos  
\- Links teléfono/email/WhatsApp funcionales

\---

═══════════════════════════════════════════════════════

\#\# \*\*OBJETIVO FINAL\*\*

Sitio web debe proyectar:  
\- \*\*Profesionalidad técnica\*\*: Empresa seria con experiencia  
\- \*\*Confianza\*\*: Testimonios, contadores, garantías visibles  
\- \*\*Claridad\*\*: Usuario entiende servicios y puede contactar fácilmente  
\- \*\*Conversión B2B\*\*: CTAs destacados, teléfono/WhatsApp accesibles, formulario optimizado

\*\*No debe parecer:\*\*  
\- Corporativo frío sin personalidad  
\- Genérico sin diferenciación  
\- Complicado de navegar

\*\*Debe inspirar:\*\*  
"Esta empresa sabe lo que hace. Me van a resolver el problema. Voy a llamarles."

\---

\#\# \*\*ENTREGA ESPERADA\*\*

Código HTML/PHP completo para las 5 páginas con:  
\- Copy realista y persuasivo adaptado a Multiwheel  
\- Estructura Tailwind CSS optimizada  
\- Integración WordPress REST API funcional en proyectos.php  
\- .htaccess configurado para URLs limpias  
\- header.php y footer.php reutilizables  
\- Formulario contacto con validación HTML5  
\- Comentarios en código explicando secciones clave

\*\*Todos los textos, títulos y descripciones deben estar en español peninsular profesional.\*\*