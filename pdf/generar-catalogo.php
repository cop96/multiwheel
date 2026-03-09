<?php
/**
 * Generar PDF del Catálogo Completo - Multiwheel
 */

$base_dir = dirname(__DIR__);
$tcpdf_path = $base_dir . '/inc/tcpdf/tcpdf.php';
if (!file_exists($tcpdf_path))
    die('Error: TCPDF no encontrado en ' . $tcpdf_path);
// Suppress deprecation warnings for TCPDF compatibility with PHP 8.5
error_reporting(E_ALL & ~E_DEPRECATED);
ini_set('display_errors', 0);

require_once($tcpdf_path);
require_once(__DIR__ . '/../inc/wp-compat.php');
require_once(__DIR__ . '/template-producto.php');

if (!class_exists('TCPDF'))
    die('Error: La clase TCPDF no se cargó correctamente.');

$products_file = __DIR__ . '/../catalogo/data/productos.json';
$products_data = json_decode(file_get_contents($products_file), true);

// Initialize PDF
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');
$pdf->SetCreator('Multiwheel');
$pdf->SetTitle('Catálogo Multiwheel ' . date('Y'));
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// --- COVER PAGE ---
$pdf->AddPage();
$pdf->SetFillColor(30, 58, 95);
$pdf->Rect(0, 0, 210, 297, 'F');

// Logo in cover
$logo_path = __DIR__ . '/../logo550_nuevo.png';
if (file_exists($logo_path)) {
    $pdf->Image($logo_path, 55, 40, 100, 0, 'PNG', '', 'T', false, 300, 'C', false, false, 0, false, false, false);
}

$pdf->SetFont('helvetica', 'B', 32);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetY(120);
$pdf->Cell(0, 20, 'CATÁLOGO GENERAL', 0, 1, 'C');
$pdf->SetFont('helvetica', '', 18);
$pdf->Cell(0, 10, 'EQUIPAMIENTO PROFESIONAL', 0, 1, 'C');

$pdf->SetY(260);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Cell(0, 8, 'MULTIWHEEL EQUIPOS Y SISTEMAS S.L.', 0, 1, 'C');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(0, 5, 'www.multiwheel.es', 0, 1, 'C');

// --- PRODUCT PAGES ---
foreach ($products_data['productos'] as $producto) {
    $pdf->AddPage();
    $pdf->SetMargins(15, 15, 15);

    // Generar el HTML usando la plantilla
    $html = generar_html_producto($producto, true);

    // Renderizar HTML
    $pdf->writeHTML($html, true, false, true, false, '');
}

// --- BACK COVER ---
$pdf->AddPage();
$pdf->SetFillColor(30, 58, 95);
$pdf->Rect(0, 0, 210, 297, 'F');
$pdf->SetY(120);
$pdf->SetFont('helvetica', 'B', 20);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(0, 10, 'GRACIAS POR SU CONFIANZA', 0, 1, 'C');
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 10, 'Contacte con nosotros para presupuestos a medida', 0, 1, 'C');

// Output
$pdf->Output('Catalogo-Multiwheel-' . date('Y') . '.pdf', 'D');