<?php
/**
 * Generador de ZIP Limpio para Servidor
 * Elimina archivos innecesarios y crea un ZIP listo para subir
 */

// Archivos y carpetas a incluir
$include = [
    'index.php',
    'servicios.php',
    'proyectos.php',
    'catalogo.php',
    'producto.php',
    'contacto.php',
    'aviso-legal.php',
    'politica-privacidad.php',
    'ley-cookies.php',
    'header.php',
    'footer.php',
    'css/',
    'js/',
    'catalogo/',
    'pdf/',
    'inc/',
    'images/',
    '.gitignore',
];

// Archivos y carpetas a excluir del ZIP
$exclude = [
    '# __PROMPT COMPLETO_ DISEÑO WEB MULTIWHEEL - EQUIPAMIENTO PROFESIONAL DE VEHÍCULOS__.md',
    'ADDON_ SISTEMA DE CATÁLOGO ONLINE CON FICHAS TÉCNICAS Y GENERACIÓN PDF.md',
    'README.md',
    'plans/',
    'docs/',
    'logo550_nuevo.png',
    '.git/',
    '.DS_Store',
    'Thumbs.db',
];

// Crear archivo ZIP
$zip = new ZipArchive();
$zipName = 'multiwheel-web-' . date('Y-m-d') . '.zip';

if ($zip->open($zipName, ZipArchive::CREATE) === TRUE) {
    
    // Añadir archivos principales
    foreach ($include as $item) {
        if (is_dir($item)) {
            addDirectoryToZip($item, $zip, $exclude);
        } elseif (is_file($item)) {
            if (!in_array(basename($item), $exclude)) {
                $zip->addFile($item, basename($item));
            }
        }
    }
    
    $zip->close();
    
    echo "✅ ZIP creado exitosamente: $zipName\n";
    echo "📦 Tamaño: " . round(filesize($zipName) / 1024, 2) . " KB\n";
    echo "\n📁 Archivos incluidos:\n";
    foreach ($include as $item) {
        echo "   - $item\n";
    }
    echo "\n🗑️ Archivos/carpetas excluidos:\n";
    foreach ($exclude as $item) {
        echo "   - $item\n";
    }
} else {
    echo "❌ Error al crear el ZIP\n";
}

/**
 * Función recursiva para añadir directorios
 */
function addDirectoryToZip($dir, $zip, $exclude) {
    if (!is_dir($dir)) return;
    
    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file == '.' || $file == '..') continue;
        
        $path = $dir . '/' . $file;
        $relativePath = $path;
        
        // Verificar si está excluido
        $isExcluded = false;
        foreach ($exclude as $excl) {
            if (strpos($relativePath, $excl) !== false) {
                $isExcluded = true;
                break;
            }
        }
        
        if ($isExcluded) continue;
        
        if (is_dir($path)) {
            addDirectoryToZip($path, $zip, $exclude);
        } elseif (is_file($path)) {
            $zip->addFile($path, $relativePath);
        }
    }
}
