ADDON: SISTEMA DE CATÁLOGO ONLINE CON FICHAS TÉCNICAS Y GENERACIÓN PDF  
Este documento es un COMPLEMENTO al prompt principal de Multiwheel.  
Añade funcionalidad de catálogo profesional con fichas técnicas descargables.

CONTEXTO  
El cliente ya dispone de:

Fotografías de productos organizadas por carpetas  
Descripciones técnicas de cada producto  
Necesidad de presentación profesional B2B orientada a sector industrial  
ESTRUCTURA DE DATOS DE PRODUCTOS  
Organización de archivos en servidor:  
/catalogo/  
  /productos/  
    /estanterias/  
      /estanteria-modular-lateral/  
        \- imagen-principal.jpg  
        \- imagen-detalle-1.jpg  
        \- imagen-detalle-2.jpg  
        \- datos.json  
      /estanteria-cajones-pequenos/  
        \- imagen-principal.jpg  
        \- imagen-instalada.jpg  
        \- datos.json  
    /bancos-trabajo/  
      /banco-trabajo-plegable/  
        \- imagen-principal.jpg  
        \- imagen-uso.jpg  
        \- datos.json  
    /iluminacion/  
      /kit-led-autonomo/  
        ...  
    /generadores/  
    /sistemas-rescate/  
    /anclajes/  
    /accesorios/  
Lógica:

Cada producto tiene su propia carpeta con slug-name (URL-friendly)  
Dentro: imágenes \+ archivo datos.json con información estructurada  
Categorías \= carpetas padre (estanterias, bancos-trabajo, etc.)  
ARCHIVO datos.json \- ESTRUCTURA CAMPOS  
Cada producto tiene un archivo datos.json con la siguiente estructura:

Copy{  
  "id": "EST-001",  
  "nombre": "Estantería Modular Lateral Derecha",  
  "slug": "estanteria-modular-lateral",  
  "categoria": "estanterias",  
  "categoria\_display": "Estanterías y Almacenaje",  
  "descripcion\_corta": "Estructura metálica con 5 baldas ajustables para instalación lateral en furgonetas profesionales",  
  "descripcion\_larga": "Estantería modular fabricada en acero galvanizado de alta resistencia. Diseñada específicamente para instalación en lateral derecho de furgonetas comerciales. Sistema de baldas ajustables en altura mediante clips metálicos. Acabado galvanizado anticorrosión. Montaje mediante anclajes al piso y paneles laterales del vehículo. Incluye kit de tornillería y anclajes de seguridad.",  
    
  "caracteristicas\_tecnicas": \[  
    "Material: Acero galvanizado 1,5mm",  
    "Baldas ajustables: 5 unidades",  
    "Capacidad por balda: 30kg",  
    "Capacidad total: 150kg",  
    "Acabado: Galvanizado anticorrosión",  
    "Sistema de fijación: Anclajes al suelo y panel lateral"  
  \],  
    
  "especificaciones": {  
    "alto": "1800mm",  
    "ancho": "400mm",  
    "profundidad": "350mm",  
    "peso": "28kg",  
    "material": "Acero galvanizado",  
    "color": "Gris metálico",  
    "carga\_maxima": "150kg"  
  },  
    
  "aplicaciones": \[  
    "Furgonetas taller electricista",  
    "Furgonetas fontanería",  
    "Vehículos servicios técnicos",  
    "Talleres móviles multisector"  
  \],  
    
  "compatibilidad\_vehiculos": \[  
    "Mercedes Sprinter (todas las versiones)",  
    "Volkswagen Crafter",  
    "Ford Transit L2-L3-L4",  
    "Renault Master",  
    "Iveco Daily",  
    "Fiat Ducato L2-L3"  
  \],  
    
  "incluye": \[  
    "Estructura completa estantería",  
    "5 baldas metálicas ajustables",  
    "Kit de tornillería completo",  
    "Anclajes de seguridad al suelo",  
    "Instrucciones de montaje"  
  \],  
    
  "certificaciones": \[  
    "Homologación según normativa ITV",  
    "Certificado de carga EN 12195",  
    "Resistencia estructural testada"  
  \],  
    
  "opciones\_personalizacion": \[  
    "Altura personalizada según modelo vehículo",  
    "Acabado en pintura epoxi color cliente",  
    "Baldas adicionales (bajo pedido)",  
    "Cajones extraíbles integrados (opcional)"  
  \],  
    
  "plazo\_entrega": "5-7 días laborables",  
  "instalacion\_incluida": true,  
  "garantia": "2 años",  
    
  "precio": {  
    "base": "450.00",  
    "moneda": "EUR",  
    "iva\_incluido": false,  
    "nota\_precio": "Precio sin IVA. Instalación incluida en Sevilla y provincia."  
  },  
    
  "imagenes": \[  
    "imagen-principal.jpg",  
    "imagen-detalle-1.jpg",  
    "imagen-detalle-2.jpg"  
  \],  
    
  "destacado": true,  
  "nuevo": false,  
  "stock": "disponible",  
    
  "meta\_seo": {  
    "title": "Estantería Modular Lateral para Furgonetas | Multiwheel",  
    "description": "Estantería metálica profesional con 5 baldas ajustables. Capacidad 150kg. Instalación incluida. Homologada ITV. Ideal para talleres móviles."  
  },  
    
  "relacionados": \["EST-002", "BAN-001", "ACC-015"\]  
}  
Copy  
CAMPOS EXPLICADOS (FICHA TÉCNICA B2B)  
Campos obligatorios mínimos:  
id: Referencia interna única (ej: EST-001, BAN-003, ILU-012)  
nombre: Nombre comercial del producto  
slug: URL-friendly name (usado en rutas /catalogo/estanteria-modular-lateral)  
categoria: Carpeta/categoría técnica  
descripcion\_corta: Extracto para listados (1 línea)  
descripcion\_larga: Descripción completa para ficha individual  
imagenes: Array con nombres de archivos de imagen  
Campos técnicos profesionales:  
caracteristicas\_tecnicas: Array de bullets técnicos  
especificaciones: Objeto con dimensiones, peso, materiales  
aplicaciones: Sectores/usos profesionales  
compatibilidad\_vehiculos: Modelos de furgonetas compatibles (crucial para B2B)  
certificaciones: Normativas, homologaciones (importante para conversión)  
Campos comerciales:  
precio: Objeto con precio base \+ notas (ej: instalación incluida)  
incluye: Qué viene en el producto (gestión de expectativas)  
opciones\_personalizacion: Personalización disponible  
plazo\_entrega: Información logística  
instalacion\_incluida: Boolean (diferenciador competitivo)  
garantia: Periodo de garantía  
Campos auxiliares:  
destacado: Boolean para mostrar en home o destacados  
nuevo: Boolean para badge "Nuevo"  
stock: String (disponible / bajo pedido / agotado)  
relacionados: Array IDs de productos relacionados  
meta\_seo: Title y description para SEO  
PÁGINAS NECESARIAS  
1\. CATALOGO.PHP (Listado de productos)  
Funcionalidad:

Lee todos los archivos datos.json de todas las carpetas de productos  
Genera grid de cards de producto  
Filtros por categoría (sidebar o botones superiores)  
Búsqueda por nombre/referencia  
Ordenamiento (alfabético, precio, nuevos primero)  
URL: /catalogo

Elementos por card:

Imagen principal  
Badge "Nuevo" si nuevo: true  
Badge "Destacado" si destacado: true  
Badge stock (verde disponible / amarillo bajo pedido / rojo agotado)  
Nombre producto  
Referencia (ID)  
Descripción corta (truncada)  
Precio base (si se muestra)  
Botón: "Ver ficha técnica" → /catalogo/\[slug\]  
2\. PRODUCTO.PHP (Ficha individual)  
Funcionalidad:

Recibe slug via GET: /catalogo/estanteria-modular-lateral  
Lee archivo datos.json correspondiente  
Renderiza ficha técnica completa con toda la información  
Galería de imágenes (principal \+ detalles)  
Botones descarga PDF individual  
Productos relacionados al final  
Formulario consulta rápida específico del producto  
URL: /catalogo/\[categoria\]/\[slug\] o simplificado /catalogo/\[slug\]

Secciones de la ficha:

Hero producto:

Galería imágenes (principal grande \+ thumbnails)  
Nombre producto \+ referencia  
Badges (nuevo/destacado/stock)  
Descripción corta destacada  
Precio (si aplica)  
CTAs: "Solicitar presupuesto" / "Descargar ficha PDF"  
Descripción completa:

Descripción larga con formato  
Lista "Aplicaciones"  
Lista "Incluye"  
Especificaciones técnicas (tabla):

Dimensiones (alto/ancho/profundidad)  
Peso  
Material  
Color  
Carga máxima  
Otras especificaciones  
Características técnicas (bullets con iconos):

Array caracteristicas\_tecnicas  
Compatibilidad vehículos (grid logos o lista):

Array compatibilidad\_vehiculos  
Certificaciones (badges o lista con iconos):

Array certificaciones  
Opciones de personalización:

Array opciones\_personalizacion  
Información comercial:

Plazo entrega  
Instalación incluida (destacado)  
Garantía  
Nota precio  
Productos relacionados (carousel o grid):

Cargar productos del array relacionados  
Formulario consulta rápida:

Campos: nombre, email, teléfono, mensaje  
Campo oculto con ID producto y nombre  
Botón "Consultar disponibilidad"  
SISTEMA DE GENERACIÓN PDF  
Requisito técnico:  
Utilizar librería PHP para generación de PDFs. Opciones recomendadas:

TCPDF (open source, completa, bien documentada)  
FPDF (ligera, simple)  
mPDF (soporta mejor CSS)  
Recomendación: TCPDF por soporte UTF-8, imágenes, tablas y headers/footers profesionales.

A. PDF INDIVIDUAL DE PRODUCTO  
Trigger: Botón "Descargar ficha técnica PDF" en ficha de producto

Archivo: generar-pdf-producto.php

Lógica:

Copy\<?php  
// Recibe ID o slug del producto via GET  
$producto\_id \= $\_GET\['id'\] ?? '';

// Cargar datos.json del producto  
$ruta\_json \= "/catalogo/productos/.../datos.json";  
$datos \= json\_decode(file\_get\_contents($ruta\_json), true);

// Inicializar TCPDF  
require\_once('tcpdf/tcpdf.php');  
$pdf \= new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

// Configuración PDF  
$pdf-\>SetCreator('Multiwheel');  
$pdf-\>SetAuthor('Multiwheel S.L.');  
$pdf-\>SetTitle('Ficha Técnica \- ' . $datos\['nombre'\]);

// Header corporativo  
$pdf-\>SetHeaderData('logo-multiwheel.png', 30, 'FICHA TÉCNICA', 'Multiwheel \- Equipamiento Profesional');

// Footer con datos contacto  
$pdf-\>setFooterData(array(0,0,0), array(0,0,0));  
$pdf-\>setFooterFont(Array(PDF\_FONT\_NAME\_DATA, '', PDF\_FONT\_SIZE\_DATA));

$pdf-\>AddPage();

// CONTENIDO DEL PDF (estructura HTML o métodos TCPDF):

// 1\. Imagen principal (centrada, tamaño moderado)  
$pdf-\>Image($ruta\_imagen\_principal, 15, 30, 80);

// 2\. Nombre producto \+ Referencia  
$pdf-\>SetFont('helvetica', 'B', 18);  
$pdf-\>Cell(0, 10, $datos\['nombre'\], 0, 1);  
$pdf-\>SetFont('helvetica', '', 10);  
$pdf-\>Cell(0, 5, 'Ref: ' . $datos\['id'\], 0, 1);

// 3\. Descripción completa  
$pdf-\>MultiCell(0, 5, $datos\['descripcion\_larga'\], 0, 'L');

// 4\. Tabla especificaciones técnicas  
$pdf-\>SetFont('helvetica', 'B', 12);  
$pdf-\>Cell(0, 8, 'Especificaciones Técnicas', 0, 1);  
$pdf-\>SetFont('helvetica', '', 9);

$html\_tabla \= '\<table border="1" cellpadding="5"\>  
\<tr\>\<td width="40%"\>\<b\>Alto\</b\>\</td\>\<td width="60%"\>' . $datos\['especificaciones'\]\['alto'\] . '\</td\>\</tr\>  
\<tr\>\<td\>\<b\>Ancho\</b\>\</td\>\<td\>' . $datos\['especificaciones'\]\['ancho'\] . '\</td\>\</tr\>  
\<tr\>\<td\>\<b\>Profundidad\</b\>\</td\>\<td\>' . $datos\['especificaciones'\]\['profundidad'\] . '\</td\>\</tr\>  
\<tr\>\<td\>\<b\>Peso\</b\>\</td\>\<td\>' . $datos\['especificaciones'\]\['peso'\] . '\</td\>\</tr\>  
\<tr\>\<td\>\<b\>Material\</b\>\</td\>\<td\>' . $datos\['especificaciones'\]\['material'\] . '\</td\>\</tr\>  
\<tr\>\<td\>\<b\>Carga máxima\</b\>\</td\>\<td\>' . $datos\['especificaciones'\]\['carga\_maxima'\] . '\</td\>\</tr\>  
\</table\>';  
$pdf-\>writeHTML($html\_tabla, true, false, true, false, '');

// 5\. Características técnicas (lista bullets)  
$pdf-\>SetFont('helvetica', 'B', 12);  
$pdf-\>Cell(0, 8, 'Características', 0, 1);  
$pdf-\>SetFont('helvetica', '', 9);  
foreach ($datos\['caracteristicas\_tecnicas'\] as $caracteristica) {  
    $pdf-\>MultiCell(0, 5, '• ' . $caracteristica, 0, 'L');  
}

// 6\. Compatibilidad vehículos  
$pdf-\>SetFont('helvetica', 'B', 12);  
$pdf-\>Cell(0, 8, 'Compatibilidad Vehículos', 0, 1);  
$pdf-\>SetFont('helvetica', '', 9);  
$pdf-\>MultiCell(0, 5, implode(' | ', $datos\['compatibilidad\_vehiculos'\]), 0, 'L');

// 7\. Aplicaciones  
$pdf-\>SetFont('helvetica', 'B', 12);  
$pdf-\>Cell(0, 8, 'Aplicaciones Profesionales', 0, 1);  
$pdf-\>SetFont('helvetica', '', 9);  
foreach ($datos\['aplicaciones'\] as $aplicacion) {  
    $pdf-\>MultiCell(0, 5, '• ' . $aplicacion, 0, 'L');  
}

// 8\. Qué incluye  
$pdf-\>SetFont('helvetica', 'B', 12);  
$pdf-\>Cell(0, 8, 'El producto incluye', 0, 1);  
$pdf-\>SetFont('helvetica', '', 9);  
foreach ($datos\['incluye'\] as $item) {  
    $pdf-\>MultiCell(0, 5, '• ' . $item, 0, 'L');  
}

// 9\. Información comercial (recuadro destacado)  
$pdf-\>SetFillColor(240, 240, 240);  
$pdf-\>SetFont('helvetica', 'B', 10);  
$pdf-\>Cell(0, 6, 'Información Comercial', 0, 1, 'L', true);  
$pdf-\>SetFont('helvetica', '', 9);  
$pdf-\>Cell(0, 5, 'Plazo de entrega: ' . $datos\['plazo\_entrega'\], 0, 1);  
$pdf-\>Cell(0, 5, 'Instalación: ' . ($datos\['instalacion\_incluida'\] ? 'Incluida' : 'No incluida'), 0, 1);  
$pdf-\>Cell(0, 5, 'Garantía: ' . $datos\['garantia'\], 0, 1);  
if (isset($datos\['precio'\]\['base'\])) {  
    $pdf-\>Cell(0, 5, 'Precio: ' . $datos\['precio'\]\['base'\] . ' ' . $datos\['precio'\]\['moneda'\] . ' (sin IVA)', 0, 1);  
}

// 10\. Certificaciones (si existen)  
if (\!empty($datos\['certificaciones'\])) {  
    $pdf-\>SetFont('helvetica', 'B', 12);  
    $pdf-\>Cell(0, 8, 'Certificaciones', 0, 1);  
    $pdf-\>SetFont('helvetica', '', 9);  
    foreach ($datos\['certificaciones'\] as $cert) {  
        $pdf-\>MultiCell(0, 5, '✓ ' . $cert, 0, 'L');  
    }  
}

// 11\. Pie de página con datos de contacto  
$pdf-\>AddPage();  
$pdf-\>SetFont('helvetica', 'B', 14);  
$pdf-\>Cell(0, 10, 'Contacto', 0, 1);  
$pdf-\>SetFont('helvetica', '', 10);  
$pdf-\>MultiCell(0, 5, "Multiwheel \- Equipamiento Profesional\\n\\nPol. Ind. La Red, Calle 12 Nave 14\\n41500 Alcalá de Guadaíra, Sevilla\\n\\nTeléfono: 620 531 511\\nEmail: info@multiwheel.es\\nWeb: www.multiwheel.es\\n\\nHorario: Lun-Vie 8:00-18:00h | Sáb 9:00-14:00h", 0, 'L');

// Generar y descargar PDF  
$pdf-\>Output('ficha-tecnica-' . $datos\['slug'\] . '.pdf', 'D');  
?\>  
Copy  
Resultado: Usuario descarga archivo ficha-tecnica-estanteria-modular-lateral.pdf

B. PDF CATÁLOGO COMPLETO  
Trigger: Botón "Descargar catálogo completo PDF" (en header, footer o página catálogo)

Archivo: generar-catalogo-completo.php

Lógica:

Copy\<?php  
// Leer TODOS los productos de todas las categorías  
$categorias \= \['estanterias', 'bancos-trabajo', 'iluminacion', 'generadores', 'sistemas-rescate', 'anclajes', 'accesorios'\];  
$todos\_productos \= \[\];

foreach ($categorias as $categoria) {  
    $ruta\_categoria \= "/catalogo/productos/{$categoria}/";  
    $carpetas \= scandir($ruta\_categoria);  
      
    foreach ($carpetas as $carpeta) {  
        if ($carpeta \!= '.' && $carpeta \!= '..' && is\_dir($ruta\_categoria . $carpeta)) {  
            $json\_path \= $ruta\_categoria . $carpeta . '/datos.json';  
            if (file\_exists($json\_path)) {  
                $producto \= json\_decode(file\_get\_contents($json\_path), true);  
                $producto\['\_ruta\_carpeta'\] \= $ruta\_categoria . $carpeta;  
                $todos\_productos\[\] \= $producto;  
            }  
        }  
    }  
}

// Ordenar productos por categoría y nombre  
usort($todos\_productos, function($a, $b) {  
    if ($a\['categoria'\] \== $b\['categoria'\]) {  
        return strcmp($a\['nombre'\], $b\['nombre'\]);  
    }  
    return strcmp($a\['categoria'\], $b\['categoria'\]);  
});

// Inicializar PDF  
$pdf \= new TCPDF('P', 'mm', 'A4', true, 'UTF-8');  
$pdf-\>SetCreator('Multiwheel');  
$pdf-\>SetTitle('Catálogo Completo de Productos \- Multiwheel 2026');  
$pdf-\>SetHeaderData('logo-multiwheel.png', 30, 'CATÁLOGO DE PRODUCTOS 2026', 'Multiwheel \- Equipamiento Profesional');

// PORTADA  
$pdf-\>AddPage();  
$pdf-\>SetFont('helvetica', 'B', 24);  
$pdf-\>Cell(0, 40, '', 0, 1); // Espacio superior  
$pdf-\>Cell(0, 15, 'CATÁLOGO DE PRODUCTOS', 0, 1, 'C');  
$pdf-\>SetFont('helvetica', '', 16);  
$pdf-\>Cell(0, 10, 'Equipamiento profesional para vehículos comerciales', 0, 1, 'C');  
$pdf-\>SetFont('helvetica', '', 12);  
$pdf-\>Cell(0, 50, '', 0, 1);  
$pdf-\>MultiCell(0, 5, "Multiwheel\\nEspecialistas desde 2011\\n\\nPol. Ind. La Red, Calle 12 Nave 14\\n41500 Alcalá de Guadaíra, Sevilla\\n\\nTel: 620 531 511\\nwww.multiwheel.es", 0, 'C');

// ÍNDICE por categorías  
$pdf-\>AddPage();  
$pdf-\>SetFont('helvetica', 'B', 16);  
$pdf-\>Cell(0, 10, 'Índice de Categorías', 0, 1);  
$pdf-\>SetFont('helvetica', '', 11);

$categoria\_actual \= '';  
$contador\_por\_categoria \= \[\];  
foreach ($todos\_productos as $prod) {  
    if (\!isset($contador\_por\_categoria\[$prod\['categoria\_display'\]\])) {  
        $contador\_por\_categoria\[$prod\['categoria\_display'\]\] \= 0;  
    }  
    $contador\_por\_categoria\[$prod\['categoria\_display'\]\]++;  
}

foreach ($contador\_por\_categoria as $cat \=\> $count) {  
    $pdf-\>Cell(0, 7, $cat . ' (' . $count . ' productos)', 0, 1);  
}

// CONTENIDO: Iterar por cada producto  
$categoria\_anterior \= '';  
foreach ($todos\_productos as $producto) {  
      
    // Nueva página para nueva categoría (separador visual)  
    if ($producto\['categoria'\] \!= $categoria\_anterior) {  
        $pdf-\>AddPage();  
        $pdf-\>SetFillColor(30, 58, 95); // multiwheel-blue  
        $pdf-\>SetTextColor(255, 255, 255);  
        $pdf-\>SetFont('helvetica', 'B', 18);  
        $pdf-\>Cell(0, 12, strtoupper($producto\['categoria\_display'\]), 0, 1, 'C', true);  
        $pdf-\>SetTextColor(0, 0, 0);  
        $categoria\_anterior \= $producto\['categoria'\];  
    }  
      
    // Cada producto en nueva página (ficha completa)  
    $pdf-\>AddPage();  
      
    // Imagen principal  
    $img\_path \= $producto\['\_ruta\_carpeta'\] . '/' . $producto\['imagenes'\]\[0\];  
    if (file\_exists($img\_path)) {  
        $pdf-\>Image($img\_path, 15, 20, 70);  
    }  
      
    // Nombre \+ Ref (columna derecha junto a imagen)  
    $pdf-\>SetXY(95, 20);  
    $pdf-\>SetFont('helvetica', 'B', 14);  
    $pdf-\>MultiCell(100, 6, $producto\['nombre'\], 0, 'L');  
      
    $pdf-\>SetX(95);  
    $pdf-\>SetFont('helvetica', '', 9);  
    $pdf-\>Cell(0, 5, 'Ref: ' . $producto\['id'\], 0, 1);  
      
    $pdf-\>SetX(95);  
    $pdf-\>SetFont('helvetica', 'I', 9);  
    $pdf-\>MultiCell(100, 4, $producto\['descripcion\_corta'\], 0, 'L');  
      
    // Salto para descripción completa (debajo de imagen)  
    $pdf-\>SetY(100);  
    $pdf-\>SetFont('helvetica', '', 9);  
    $pdf-\>MultiCell(0, 4, $producto\['descripcion\_larga'\], 0, 'J');  
      
    // Especificaciones (tabla compacta 2 columnas)  
    $pdf-\>Ln(3);  
    $pdf-\>SetFont('helvetica', 'B', 10);  
    $pdf-\>Cell(0, 6, 'Especificaciones Técnicas', 0, 1);  
      
    $pdf-\>SetFont('helvetica', '', 8);  
    $specs \= $producto\['especificaciones'\];  
    $html\_specs \= '\<table border="0.5" cellpadding="3"\>  
    \<tr\>\<td width="25%"\>\<b\>Alto\</b\>\</td\>\<td width="25%"\>' . ($specs\['alto'\] ?? '-') . '\</td\>  
        \<td width="25%"\>\<b\>Peso\</b\>\</td\>\<td width="25%"\>' . ($specs\['peso'\] ?? '-') . '\</td\>\</tr\>  
    \<tr\>\<td\>\<b\>Ancho\</b\>\</td\>\<td\>' . ($specs\['ancho'\] ?? '-') . '\</td\>  
        \<td\>\<b\>Material\</b\>\</td\>\<td\>' . ($specs\['material'\] ?? '-') . '\</td\>\</tr\>  
    \<tr\>\<td\>\<b\>Profundidad\</b\>\</td\>\<td\>' . ($specs\['profundidad'\] ?? '-') . '\</td\>  
        \<td\>\<b\>Carga máx.\</b\>\</td\>\<td\>' . ($specs\['carga\_maxima'\] ?? '-') . '\</td\>\</tr\>  
    \</table\>';  
    $pdf-\>writeHTML($html\_specs, true, false, false, false, '');  
      
    // Características (bullets compactos)  
    $pdf-\>Ln(2);  
    $pdf-\>SetFont('helvetica', 'B', 10);  
    $pdf-\>Cell(0, 6, 'Características', 0, 1);  
    $pdf-\>SetFont('helvetica', '', 8);  
    $caracteristicas\_texto \= '';  
    foreach ($producto\['caracteristicas\_tecnicas'\] as $car) {  
        $caracteristicas\_texto .= '• ' . $car . "\\n";  
    }  
    $pdf-\>MultiCell(0, 3.5, $caracteristicas\_texto, 0, 'L');  
      
    // Aplicaciones (compacto inline)  
    if (\!empty($producto\['aplicaciones'\])) {  
        $pdf-\>Ln(1);  
        $pdf-\>SetFont('helvetica', 'B', 9);  
        $pdf-\>Cell(40, 5, 'Aplicaciones:', 0, 0);  
        $pdf-\>SetFont('helvetica', '', 8);  
        $pdf-\>MultiCell(0, 5, implode(', ', $producto\['aplicaciones'\]), 0, 'L');  
    }  
      
    // Info comercial (recuadro gris final)  
    $pdf-\>Ln(2);  
    $pdf-\>SetFillColor(245, 245, 245);  
    $pdf-\>SetFont('helvetica', '', 8);  
    $info\_comercial \= 'Plazo entrega: ' . $producto\['plazo\_entrega'\] . ' | ';  
    $info\_comercial .= 'Instalación: ' . ($producto\['instalacion\_incluida'\] ? 'Incluida' : 'No incluida') . ' | ';  
    $info\_comercial .= 'Garantía: ' . $producto\['garantia'\];  
    $pdf-\>MultiCell(0, 4, $info\_comercial, 0, 'C', true);  
}

// ÚLTIMA PÁGINA: Información de contacto completa  
$pdf-\>AddPage();  
$pdf-\>SetFont('helvetica', 'B', 18);  
$pdf-\>Cell(0, 15, 'Información y Contacto', 0, 1, 'C');  
$pdf-\>SetFont('helvetica', '', 11);  
$pdf-\>MultiCell(0, 6, "Multiwheel \- Equipamiento Profesional de Vehículos\\n\\nDesde 2011 equipando furgonetas y reparando grúas en Andalucía\\n\\n", 0, 'C');

$pdf-\>SetFont('helvetica', 'B', 11);  
$pdf-\>Cell(0, 8, 'Nuestras instalaciones', 0, 1);  
$pdf-\>SetFont('helvetica', '', 10);  
$pdf-\>MultiCell(0, 5, "Pol. Ind. La Red, Calle 12 Nave 14\\n41500 Alcalá de Guadaíra, Sevilla\\n\\n", 0, 'L');

$pdf-\>SetFont('helvetica', 'B', 11);  
$pdf-\>Cell(0, 8, 'Contacto', 0, 1);  
$pdf-\>SetFont('helvetica', '', 10);  
$pdf-\>MultiCell(0, 5, "Teléfono: 620 531 511\\nEmail: info@multiwheel.es\\nWeb: www.multiwheel.es\\n\\n", 0, 'L');

$pdf-\>SetFont('helvetica', 'B', 11);  
$pdf-\>Cell(0, 8, 'Horario', 0, 1);  
$pdf-\>SetFont('helvetica', '', 10);  
$pdf-\>MultiCell(0, 5, "Lunes a Viernes: 8:00 \- 18:00h\\nSábados: 9:00 \- 14:00h\\nDomingos y festivos: Cerrado\\n\\n", 0, 'L');

$pdf-\>SetFont('helvetica', 'I', 9);  
$pdf-\>MultiCell(0, 5, "Todos los precios indicados no incluyen IVA. Instalación incluida en Sevilla y provincia. Consulte condiciones para otras provincias. Catálogo actualizado a " . date('d/m/Y') . ".", 0, 'C');

// Generar PDF  
$pdf-\>Output('catalogo-completo-multiwheel-2026.pdf', 'D');  
?\>  
Copy  
Resultado: Usuario descarga archivo catalogo-completo-multiwheel-2026.pdf con todos los productos organizados por categorías.

BOTONES DE DESCARGA PDF  
En ficha individual de producto (producto.php):  
Copy\<div class="flex gap-4"\>  
    \<a href="/generar-pdf-producto.php?id=\<?php echo $producto\['id'\]; ?\>"   
       class="bg-multiwheel-red text-white px-6 py-3 font-semibold hover:bg-red-700 transition"  
       target="\_blank"\>  
        \<i class="fas fa-file-pdf mr-2"\>\</i\>  
        Descargar ficha técnica PDF  
    \</a\>  
      
    \<a href="/contacto?producto=\<?php echo urlencode($producto\['nombre'\]); ?\>"   
       class="bg-multiwheel-blue text-white px-6 py-3 font-semibold hover:bg-blue-900 transition"\>  
        \<i class="fas fa-envelope mr-2"\>\</i\>  
        Solicitar presupuesto  
    \</a\>  
\</div\>  
En página catálogo (catalogo.php) \- Header o zona destacada:  
Copy\<div class="bg-workshop-white border border-light-gray p-6 mb-8"\>  
    \<div class="flex items-center justify-between"\>  
        \<div\>  
            \<h3 class="font-rajdhani font-bold text-xl text-multiwheel-blue mb-2"\>  
                Catálogo completo de productos  
            \</h3\>  
            \<p class="text-steel-gray"\>  
                Descarga nuestro catálogo técnico completo en formato PDF con todos los productos y especificaciones  
            \</p\>  
        \</div\>  
        \<a href="/generar-catalogo-completo.php"   
           class="bg-multiwheel-red text-white px-8 py-4 font-bold hover:bg-red-700 transition whitespace-nowrap"  
           target="\_blank"\>  
            \<i class="fas fa-download mr-2"\>\</i\>  
            Descargar catálogo PDF  
        \</a\>  
    \</div\>  
\</div\>  
En footer (footer.php) \- Columna adicional o dentro de navegación:  
Copy\<div\>  
    \<h4 class="font-rajdhani font-bold text-lg mb-4 text-multiwheel-orange"\>Descargas\</h4\>  
    \<ul class="space-y-2 text-sm"\>  
        \<li\>  
            \<a href="/generar-catalogo-completo.php" class="text-gray-300 hover:text-white transition" target="\_blank"\>  
                \<i class="fas fa-file-pdf mr-2"\>\</i\>Catálogo completo PDF  
            \</a\>  
        \</li\>  
        \<li\>  
            \<a href="/catalogo" class="text-gray-300 hover:text-white transition"\>  
                \<i class="fas fa-list mr-2"\>\</i\>Ver catálogo online  
            \</a\>  
        \</li\>  
    \</ul\>  
\</div\>  
BUSCADOR DE PRODUCTOS  
Funcionalidad adicional recomendada:  
Añadir buscador en página catálogo para filtrar productos por:

Nombre  
Referencia (ID)  
Categoría  
Compatibilidad vehículo (muy útil B2B)  
Implementación simple con JavaScript:

Copy\<div class="mb-8"\>  
    \<input type="text"   
           id="buscador-productos"   
           placeholder="Buscar productos por nombre, referencia o vehículo compatible..."  
           class="w-full px-4 py-3 border border-light-gray focus:border-multiwheel-blue focus:outline-none"\>  
\</div\>

\<script\>  
document.getElementById('buscador-productos').addEventListener('input', function(e) {  
    const termino \= e.target.value.toLowerCase();  
    const cards \= document.querySelectorAll('.producto-card');  
      
    cards.forEach(card \=\> {  
        const texto \= card.textContent.toLowerCase();  
        if (texto.includes(termino)) {  
            card.style.display \= 'block';  
        } else {  
            card.style.display \= 'none';  
        }  
    });  
});  
\</script\>  
GESTIÓN DE CONTENIDO: CÓMO AÑADIR NUEVOS PRODUCTOS  
Proceso para el cliente (sin tocar código):

Crear carpeta producto:

Ruta: /catalogo/productos/\[categoria\]/\[nombre-producto-slug\]/  
Ejemplo: /catalogo/productos/estanterias/estanteria-modular-lateral/  
Subir imágenes:

Nombrar: imagen-principal.jpg (obligatorio), imagen-detalle-1.jpg, imagen-detalle-2.jpg, etc.  
Formatos aceptados: JPG, PNG  
Tamaño recomendado: 1200x900px, optimizadas para web (\< 300KB)  
Crear archivo datos.json:

Copiar plantilla JSON (la estructura completa mostrada arriba)  
Rellenar todos los campos con información del producto  
Validar JSON en herramienta online (jsonlint.com)  
Guardar en carpeta del producto  
Resultado automático:

El producto aparece automáticamente en catálogo.php  
Tiene su propia ficha en /catalogo/\[slug\]  
Se incluye en PDF catálogo completo  
No requiere tocar código PHP, solo subir archivos vía FTP o panel.

CONSIDERACIONES TÉCNICAS IMPORTANTES  
Performance:  
Caché de listado de productos (evitar leer todos los JSON en cada carga)  
Lazy loading de imágenes en grid  
Miniaturas (thumbnails) de imágenes para listados (ej: 400x300px)  
SEO:  
Cada producto tiene su propia URL limpia: /catalogo/estanteria-modular-lateral  
Meta title y description desde campo meta\_seo del JSON  
Schema markup Product (JSON-LD) en cada ficha:  
Copy\<script type="application/ld+json"\>  
{  
  "@context": "https://schema.org/",  
  "@type": "Product",  
  "name": "\<?php echo $producto\['nombre'\]; ?\>",  
  "description": "\<?php echo $producto\['descripcion\_corta'\]; ?\>",  
  "image": "https://multiwheel.es\<?php echo $ruta\_imagen; ?\>",  
  "sku": "\<?php echo $producto\['id'\]; ?\>",  
  "offers": {  
    "@type": "Offer",  
    "price": "\<?php echo $producto\['precio'\]\['base'\]; ?\>",  
    "priceCurrency": "EUR",  
    "availability": "https://schema.org/InStock"  
  }  
}  
\</script\>  
Seguridad:  
Validar que archivos JSON no contengan código malicioso  
Sanitizar output de datos JSON antes de mostrar en HTML  
Limitar tamaño de subida de imágenes  
Validar extensiones de archivos permitidos  
Compatibilidad móvil:  
Grid de productos responsive (1 col mobile, 2 tablet, 3-4 desktop)  
Galerías de imágenes touch-friendly  
Botones descarga PDF accesibles en mobile  
Tablas de especificaciones scroll horizontal si necesario  
RESUMEN PARA PLATAFORMA DE VIBE CODING  
Sistema requerido:

Lectura dinámica de archivos JSON desde estructura de carpetas organizada  
Página listado catálogo con filtros y búsqueda  
Página ficha individual de producto con toda la información técnica  
Generación de PDF individual por producto usando librería TCPDF  
Generación de PDF catálogo completo con todos los productos  
Botones de descarga en ubicaciones estratégicas  
URLs limpias para SEO (via .htaccess)  
Schema markup para productos  
Sistema escalable: añadir productos sin tocar código, solo subiendo carpeta \+ JSON \+ imágenes  
Campos mínimos obligatorios por producto:

ID, nombre, slug, categoría, descripción corta/larga, características técnicas, especificaciones (dimensiones/peso/material), compatibilidad vehículos, aplicaciones, qué incluye, precio, imágenes  
Campos opcionales pero recomendados:

Certificaciones, opciones personalización, productos relacionados, badges destacado/nuevo, stock  
Resultado esperado: Cliente puede gestionar catálogo completo sin conocimientos técnicos, solo organizando carpetas y editando archivos JSON con información de productos.