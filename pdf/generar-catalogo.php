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
if (!class_exists('TCPDF'))
    die('Error: La clase TCPDF no se cargó correctamente.');

$products_file = __DIR__ . '/../catalogo/data/productos.json';
$products_data = json_decode(file_get_contents($products_file), true);

// Initialize PDF
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');
$pdf->SetCreator('Multiwheel');
$pdf->SetTitle('Catálogo Multiwheel ' . date('Y'));

// --- COVER PAGE ---
$pdf->AddPage();
$pdf->SetFillColor(30, 58, 95);
$pdf->Rect(0, 0, 210, 297, 'F');

$pdf->SetFont('helvetica', 'B', 32);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetY(100);
$pdf->Cell(0, 20, 'CATÁLOGO GENERAL', 0, 1, 'C');
$pdf->SetFont('helvetica', '', 18);
$pdf->Cell(0, 10, 'EQUIPAMIENTO PROFESIONAL', 0, 1, 'C');

$pdf->SetY(250);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Cell(0, 8, 'MULTIWHEEL', 0, 1, 'C');
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(0, 5, 'www.multiwheel.es', 0, 1, 'C');

// --- PRODUCT PAGES ---
foreach ($products_data['productos'] as $producto) {
    $pdf->AddPage();

    // Header
    $pdf->SetFillColor(30, 58, 95);
    $pdf->Rect(0, 0, 210, 20, 'F');

    // Logo in header
    $logo_path = __DIR__ . '/../logo550_nuevo.png';
    if (file_exists($logo_path)) {
        $pdf->Image($logo_path, 15, 3, 0, 14, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    }

    $pdf->SetXY(75, 6);
    $pdf->SetFont('helvetica', 'B', 9);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Cell(0, 8, 'CATÁLOGO MULTIWHEEL - ' . strtoupper($producto['categoria_display'] ?? 'Accesorio'), 0, 1, 'L');

    // 1. PRODUCT TITLE (Centered)
    $pdf->SetY(30);
    $pdf->SetFont('helvetica', 'B', 18);
    $pdf->SetTextColor(30, 58, 95);
    $pdf->Cell(0, 10, mb_strtoupper($producto['nombre']), 0, 1, 'C');

    // 2. REFERENCE (Centered)
    $pdf->SetFont('helvetica', '', 9);
    $pdf->SetTextColor(100, 100, 100);
    $pdf->Cell(0, 5, 'Ref: ' . $producto['id'], 0, 1, 'C');

    // 3. IMAGE GALLERY (Centered)
    if (!empty($producto['imagenes'])) {
        $pdf->Ln(5);
        $img_path = __DIR__ . '/../catalogo/productos/' . $producto['categoria'] . '/' . $producto['slug'] . '/images/' . $producto['imagenes'][0];
        if (file_exists($img_path)) {
            $pdf->Image($img_path, 65, $pdf->GetY(), 80, 0, '', '', 'T', false, 300, 'C', false, false, 0, false, false, false);
            $pdf->Ln(60); // Gap after image
        }
    } else {
        $pdf->Ln(5);
    }

    // 4. DESCRIPTION (Under image)
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->SetTextColor(30, 58, 95);
    $pdf->Cell(0, 8, 'Descripción del producto', 0, 1, 'L');

    $lines = explode("\n", $producto['descripcion_larga'] ?? $producto['descripcion_corta']);
    $html = '<ul style="font-size: 10pt; color: #3c3c3c; line-height: 1.4;">';
    foreach ($lines as $line) {
        if (!empty(trim($line))) {
            $html .= '<li>' . htmlspecialchars(trim($line)) . '</li>';
        }
    }
    $html .= '</ul>';

    $pdf->writeHTML($html, true, false, true, false, '');

    // Table Specs
    if (!empty($producto['especificaciones'])) {
        $pdf->Ln(10);
        $pdf->SetFont('helvetica', 'B', 11);
        $pdf->SetTextColor(30, 58, 95);
        $pdf->Cell(0, 6, 'Especificaciones Técnicas', 0, 1);

        $html = '<table border="0.1" cellpadding="3" width="100%">';
        foreach ($producto['especificaciones'] as $k => $v) {
            $html .= '<tr><td width="30%" bgcolor="#f5f5f5"><b>' . ucfirst($k) . '</b></td><td width="70%">' . $v . '</td></tr>';
        }
        $html .= '</table>';
        $pdf->writeHTML($html, true, false, true, false, '');
    }

    // Short footer info
    $pdf->SetY(-25);
    $pdf->SetFont('helvetica', 'B', 10);
    $pdf->SetTextColor(240, 90, 40);
    $pdf->Cell(0, 5, 'Consulte precio y disponibilidad en multiwheel.es', 0, 1, 'R');
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
