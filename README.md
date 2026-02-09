# Multiwheel Website - Documentación del Proyecto

## Descripción General

Sitio web profesional para **Multiwheel**, especialistas en equipamiento profesional de furgonetas y reparación de grúas en Sevilla (Alcalá de Guadaíra). El proyecto incluye 5 páginas PHP principales, sistema de catálogo con PDF y páginas legales.

## Características Principales

- **Diseño responsive** con Tailwind CSS
- **Tipografía profesional**: Rajdhani (títulos) + Open Sans (cuerpo)
- **Catálogo de productos** con generación de PDF
- **Formulario de contacto** con validación
- **Páginas legales** GDPR-compliant
- **Menú móvil** hamburguesa

## Estructura de Archivos

```
Multiwheel/
├── index.php              # Página de inicio
├── servicios.php          # Servicios detallados
├── proyectos.php          # Galería de proyectos
├── catalogo.php          # Catálogo de productos
├── producto.php          # Ficha individual de producto
├── contacto.php          # Formulario y datos de contacto
├── aviso-legal.php      # Aviso legal
├── politica-privacidad.php  # Política de privacidad
├── ley-cookies.php      # Política de cookies
├── header.php           # Navegación compartida
├── footer.php           # Pie de página compartido
├── css/                 # Estilos personalizados (si necesarios)
├── js/                  # JavaScript
├── catalogo/
│   ├── data/
│   │   ├── productos.json    # Base de datos de productos
│   │   └── install-tcpdf.php # Script de instalación TCPDF
│   └── productos/
│       ├── estanterias/
│       ├── bancos-trabajo/
│       ├── iluminacion/
│       ├── generadores/
│       ├── sistemas-rescate/
│       ├── anclajes/
│       └── accesorios/
├── pdf/
│   ├── generar-pdf-producto.php  # PDF producto individual
│   └── generar-catalogo.php       # PDF catálogo completo
├── inc/
│   └── tcpdf/                     # Biblioteca TCPDF (requiere instalación)
└── images/                 # Imágenes del sitio
```

## Instalación

### 1. Requisitos del Servidor

- PHP 7.4 o superior
- Servidor web (Apache/Nginx)
- Extensión PHP Zlib (para extracción de archivos tar.gz)

### 2. Instalación TCPDF (Requerido para PDF)

1. Ejecutar el script de instalación:
   ```
   php catalogo/data/install-tcpdf.php
   ```
   
   O descargar manualmente desde:
   https://github.com/tecnickcom/TCPDF/archive/refs/tags/6.7.5.tar.gz
   
   Extraer el contenido en la carpeta `inc/tcpdf/`

### 3. Configuración del Servidor

Asegúrate de que tu servidor web apunte a la carpeta raíz del proyecto.

## Uso

### Navegación

- **Inicio** (`index.php`): Página principal con hero, propuesta de valor, servicios, testimonios, galería preview y CTA
- **Servicios** (`servicios.php`): Descripción detallada de los 3 servicios principales
- **Proyectos** (`proyectos.php`): Galería de proyectos realizados
- **Catálogo** (`catalogo.php`): Listado de productos con filtros
- **Producto** (`producto.php`): Ficha técnica detallada de producto
- **Contacto** (`contacto.php`): Formulario y datos de contacto

### Catálogo de Productos

Los productos se gestionan mediante el archivo `catalogo/data/productos.json`:

```json
{
  "productos": [
    {
      "id": "EST-001",
      "nombre": "Estantería Modular Lateral",
      "slug": "estanteria-modular-lateral",
      "categoria": "estanterias",
      "categoria_display": "Estanterías y Almacenaje",
      "descripcion_corta": "...",
      "descripcion_larga": "...",
      "precio": {
        "base": "450.00",
        "moneda": "EUR"
      },
      "stock": "disponible",
      "destacado": true,
      "nuevo": false
    }
  ]
}
```

### Generación de PDF

- **Producto individual**: Acceder a `pdf/generar-pdf-producto.php?id=EST-001`
- **Catálogo completo**: Acceder a `pdf/generar-catalogo.php`

## Personalización

### Colores Corporativos

Los colores se definen en el `header.php` mediante Tailwind CSS:

```javascript
tailwind.config = {
    theme: {
        extend: {
            colors: {
                'multiwheel-blue': '#1e3a5f',
                'multiwheel-red': '#c8102e',
                'multiwheel-orange': '#f05a28'
            }
        }
    }
}
```

### Información de Contacto

Actualizar en `header.php` y `footer.php`:
- Teléfono
- Email
- Dirección
- Horario

### Imágenes

Las imágenes se encuentran en la carpeta `images/`. Para cambiar las imágenes de placeholder:

1. Reemplazar imágenes en `images/`
2. Actualizar rutas en los archivos PHP correspondientes
3. Para productos, colocar imágenes en `catalogo/productos/[categoria]/[producto-slug]/`

## Imágenes de Placeholder

El proyecto utiliza imágenes de Unsplash como placeholders:

- **Hero**: `https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=1920&q=80`
- **Servicios**: `https://images.unsplash.com/photo-1605218427360-4736e2d82375?w=800&q=80`
- **Proyectos**: Keywords: work van, commercial vehicle, tow truck

## Mantenimiento

### Añadir Nuevos Productos

1. Editar `catalogo/data/productos.json`
2. Añadir objeto con datos del producto
3. Mantener estructura JSON válida
4. Crear carpeta de imágenes si es necesario

### Añadir Proyectos

1. Editar `proyectos.php`
2. Añadir nueva card al grid de proyectos
3. Incluir imagen, título, categoría y descripción

## Tecnologías Utilizadas

- **Tailwind CSS 3.4** - Framework CSS
- **Font Awesome 6** - Iconografía
- **Google Fonts** - Rajdhani + Open Sans
- **TCPDF 6.7.5** - Generación de PDF
- **PHP 7.4+** - Backend

## Notas Importantes

1. **Contact Form**: El formulario de contacto es visual-only. Para hacerlo funcional, integrar con un servicio de email o PHP mail().

2. **WordPress Integration**: La página de proyectos está preparada para integración futura con WordPress.

3. **Imágenes**: Las imágenes actuales son placeholders. Reemplazar con fotografías reales de la empresa.

4. **PDF**: Requiere TCPDF instalado para funcionar.

## Soporte

Para dudas o soporte:
- Email: info@multiwheel.es
- Teléfono: 620 531 511

---

**Multiwheel** - Equipamiento Profesional de Vehículos
Desde 2011 en Sevilla
