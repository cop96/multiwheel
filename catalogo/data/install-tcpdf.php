<?php
/**
 * TCPDF Downloader Script
 * Download TCPDF library to the inc/tcpdf directory
 */

$tcpdf_url = 'https://github.com/tecnickcom/TCPDF/archive/refs/tags/6.7.5.tar.gz';
$target_dir = __DIR__ . '/../../inc/tcpdf';
$tar_file = __DIR__ . '/tcpdf.tar.gz';

// Create directory if it doesn't exist
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0755, true);
}

// Download TCPDF
echo "Descargando TCPDF...\n";
$file_content = @file_get_contents($tcpdf_url);

if ($file_content === false) {
    echo "Error al descargar TCPDF. Por favor, descarga manualmente desde:\n";
    echo $tcpdf_url . "\n";
    echo "\nInstrucciones de instalación manual:\n";
    echo "1. Descarga el archivo desde la URL anterior\n";
    echo "2. Extrae el contenido en: " . $target_dir . "\n";
    echo "3. Renombra la carpeta extraída a 'tcpdf'\n";
    exit(1);
}

// Save tar file
file_put_contents($tar_file, $file_content);

// Extract tar file
echo "Extrayendo archivos...\n";
try {
    $phar = new PharData($tar_file);
    $phar->extractTo($target_dir);
    
    // Find extracted directory and move contents
    $dirs = glob($target_dir . '/TCPDF-*');
    if (!empty($dirs)) {
        $extracted_dir = $dirs[0];
        $files = scandir($extracted_dir);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                rename($extracted_dir . '/' . $file, $target_dir . '/' . $file);
            }
        }
        rmdir($extracted_dir);
    }
    
    // Clean up tar file
    unlink($tar_file);
    
    echo "TCPDF instalado correctamente en: " . $target_dir . "\n";
    echo "Ahora puedes usar los archivos PDF.\n";
} catch (Exception $e) {
    echo "Error al extraer: " . $e->getMessage() . "\n";
    echo "Por favor, instala TCPDF manualmente.\n";
    exit(1);
}
