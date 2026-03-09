<?php
/**
 * Generar PDF de Producto Individual - Multiwheel
 */

// Verificar si TCPDF existe
$base_dir = dirname(__DIR__);
$tcpdf_path = $base_dir . '/inc/tcpdf/tcpdf.php';

if (!file_exists($tcpdf_path)) {
    die('Error: TCPDF no encontrado en ' . $tcpdf_path);
}

// Suppress deprecation warnings for TCPDF compatibility with PHP 8.5
error_reporting(E_ALL & ~E_DEPRECATED);
ini_set('display_errors', 0);