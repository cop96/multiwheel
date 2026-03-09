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

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once($tcpdf_path);
require_once(__DIR__ . '/template-producto.php');

if (!class_exists('TCPDF')) {
    die('Error: La clase TCPDF no se cargó correctamente.');
}

// Get product SLUG from URL
$slug = $_GET['slug'] ?? '';

// Load products data
$products_file = __DIR__ . '/../catalogo/data/productos.json';
if (!file_exists($products_file)) {
    die('Error: Archivo de productos no encontrado');
}
$products_data = json_decode(file_get_contents($products_file), true);

// Find current product
$producto = null;
if (isset($products_data['productos'])) {
    foreach ($products_data['productos'] as $p) {
        if ($p['slug'] === $slug) {
            $producto = $p;
            break;
        }
    }
}

if (!$producto)
    die('Producto no encontrado');

// Initialize PDF
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

// Set document info
$pdf->SetCreator('Multiwheel');
$pdf->SetTitle('Ficha Técnica - ' . $producto['nombre']);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetMargins(15, 15, 15);
$pdf->SetAutoPageBreak(true, 15);
$pdf->AddPage();

// Generar el HTML usando la nueva plantilla (con is_pdf = true)
$html = generar_html_producto($producto, true);

// Renderizar HTML
$pdf->writeHTML($html, true, false, true, false, '');

// Output
$filename = 'Ficha-' . $producto['slug'] . '.pdf';
$pdf->Output($filename, 'D');