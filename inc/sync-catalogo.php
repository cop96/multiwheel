<?php
/**
 * Script de Sincronización del Catálogo Avanzado
 * Escanea 'Catalogo Multiwheel' (Word + Imágenes) y 'catalogo/productos/' (JSON)
 */

$realCatalogRoot = __DIR__ . '/../Catalogo Multiwheel';
$webCatalogRoot = __DIR__ . '/../catalogo/productos';
$dataFile = __DIR__ . '/../catalogo/data/productos.json';

// Función para leer texto de un archivo .docx
function readDocx($filename)
{
    if (!file_exists($filename))
        return "";
    $zip = new ZipArchive();
    if ($zip->open($filename) === true) {
        if (($index = $zip->locateName('word/document.xml')) !== false) {
            $data = $zip->getFromIndex($index);
            $zip->close();
            return strip_tags($data);
        }
        $zip->close();
    }
    return "";
}

// Función para generar un slug válido
function createSlug($text)
{
    $text = strtolower(trim($text));
    $text = preg_replace('/[^a-z0-9\-]/', '-', $text);
    $text = preg_replace('/-+/', '-', $text);
    return trim($text, '-');
}

// Cargar datos actuales
if (file_exists($dataFile)) {
    $data = json_decode(file_get_contents($dataFile), true);
} else {
    $data = ["productos" => [], "categorias" => [], "meta" => []];
}

$newProductos = [];

// 1. PROCESAR CARPETAS REALES (Nuevas)
if (is_dir($realCatalogRoot)) {
    $dirs = array_filter(glob($realCatalogRoot . '/*'), 'is_dir');
    foreach ($dirs as $dir) {
        $folderName = basename($dir);
        $slug = createSlug($folderName);

        $docxFiles = glob($dir . '/*.docx');
        $description = "";
        $nombre = $folderName;

        if (!empty($docxFiles)) {
            $description = readDocx($docxFiles[0]);
            // El nombre podría ser la primera línea del docx si es corto
            $lines = explode("\n", trim($description));
            if (strlen($lines[0]) < 100) {
                $nombre = $lines[0];
            }
        }

        $producto = [
            "id" => "REAL-" . strtoupper(substr($slug, 0, 3)) . rand(100, 999),
            "nombre" => $nombre,
            "slug" => $slug,
            "categoria" => "accesorios",
            "categoria_display" => "Accesorios",
            "descripcion_corta" => mb_strimwidth($description, 0, 150, "..."),
            "descripcion_larga" => $description,
            "stock" => "disponible",
            "plazo_entrega" => "5-7 días",
            "instalacion_incluida" => false,
            "garantia" => "2 años",
            "precio" => ["base" => "Consultar", "moneda" => "EUR"],
            "especificaciones" => ["Material" => "Acero", "Tipo" => "Industrial"],
            "relacionados" => [],
            "imagenes" => []
        ];

        // Crear carpeta en catálogo web si no existe
        $targetDir = $webCatalogRoot . '/accesorios/' . $slug;
        $targetImagesDir = $targetDir . '/images';
        if (!is_dir($targetImagesDir)) {
            mkdir($targetImagesDir, 0777, true);
        }

        // Procesar imágenes
        $images = array_filter(glob($dir . '/*.{jpg,jpeg,png,webp,gif,JPEG}', GLOB_BRACE));
        foreach ($images as $img) {
            $imgName = basename($img);
            $destPath = $targetImagesDir . '/' . $imgName;
            copy($img, $destPath);
            $producto['imagenes'][] = $imgName;
        }

        $newProductos[] = $producto;
    }
}

// 2. Definir categorías oficiales
$categorias = [
    ["id" => "estanterias", "nombre" => "Estanterías", "icono" => "fa-pallet"],
    ["id" => "accesorios", "nombre" => "Accesorios", "icono" => "fa-cogs"],
    ["id" => "rescate", "nombre" => "Rescate", "icono" => "fa-truck-pickup"]
];

$data['productos'] = $newProductos;
$data['categorias'] = $categorias;
$data['meta']['ultima_actualizacion'] = date('Y-m-d H:i:s');
$data['meta']['total_productos'] = count($newProductos);

file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "Sincronización refinada completada. Total productos reales: " . count($newProductos) . "\n";
