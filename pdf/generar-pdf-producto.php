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

require_once($tcpdf_path);

if (!class_exists('TCPDF')) {
    die('Error: La clase TCPDF no se cargó correctamente.');
}

// Get product SLUG from URL
$slug = $_GET['slug'] ?? '';

// Load products data
$products_file = __DIR__ . '/../catalogo/data/productos.json';
$products_data = json_decode(file_get_contents($products_file), true);

// Find current product
$producto = null;
foreach ($products_data['productos'] as $p) {
    if ($p['slug'] === $slug) {
        $producto = $p;
        break;
    }
}

if (!$producto)
    die('Producto no encontrado');

// Initialize PDF
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

// Set document info
$pdf->SetCreator('Multiwheel');
$pdf->SetTitle('Ficha Técnica - ' . $producto['nombre']);

// Global Config
$pdf->SetMargins(20, 30, 20);
$pdf->SetAutoPageBreak(true, 30);
$pdf->AddPage();

// Brand Header
$pdf->SetFillColor(30, 58, 95); // multiwheel-blue
$pdf->Rect(0, 0, 210, 25, 'F');
$pdf->SetXY(20, 8);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(0, 10, 'MULTIWHEEL - EQUIPAMIENTO PROFESIONAL', 0, 1, 'L');

// 1. PRODUCT TITLE (Centered)
$pdf->SetY(35);
$pdf->SetFont('helvetica', 'B', 22);
$pdf->SetTextColor(30, 58, 95);
$pdf->Cell(0, 15, mb_strtoupper($producto['nombre']), 0, 1, 'C');

// 2. CATEGORY & REFERENCE (Centered)
$pdf->SetFont('helvetica', 'B', 11);
$pdf->SetTextColor(240, 90, 40); // Orange
$pdf->Cell(0, 5, mb_strtoupper($producto['categoria_display'] ?? 'Accesorio'), 0, 1, 'C');
$pdf->SetFont('helvetica', '', 10);
$pdf->SetTextColor(100, 100, 100);
$pdf->Cell(0, 5, 'Referencia: ' . $producto['id'], 0, 1, 'C');

// 3. IMAGE GALLERY (Centered Large Image)
if (!empty($producto['imagenes'])) {
    $pdf->Ln(5);
    $img_path = __DIR__ . '/../catalogo/productos/' . $producto['categoria'] . '/' . $producto['slug'] . '/images/' . $producto['imagenes'][0];
    if (file_exists($img_path)) {
        // Center image: Page width is 210, margins are 20 (total 170). 
        // Max image width 100mm to leave space.
        $pdf->Image($img_path, 55, $pdf->GetY(), 100, 0, '', '', 'T', false, 300, 'C', false, false, 0, false, false, false);
        $pdf->Ln(75); // Safe gap after image
    }
} else {
    $pdf->Ln(10);
}

// 4. DESCRIPTION (Under image)
$pdf->SetFont('helvetica', 'B', 14);
$pdf->SetTextColor(30, 58, 95);
$pdf->Cell(0, 10, 'Descripción', 0, 1, 'L');

$lines = explode("\n", $producto['descripcion_larga'] ?? $producto['descripcion_corta']);
$html = '<ul style="font-size: 11pt; color: #3c3c3c; line-height: 1.5;">';
foreach ($lines as $line) {
    if (!empty(trim($line))) {
        $html .= '<li>' . htmlspecialchars(trim($line)) . '</li>';
    }
}
$html .= '</ul>';

$pdf->writeHTML($html, true, false, true, false, '');

// Specs table
if (!empty($producto['especificaciones'])) {
    $pdf->Ln(10);
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->SetTextColor(30, 58, 95);
    $pdf->Cell(0, 8, 'Especificaciones Técnicas', 0, 1);

    $html = '<table border="0.5" cellpadding="5" cellspacing="0" width="100%">';
    $fill = false;
    foreach ($producto['especificaciones'] as $key => $val) {
        $bg = $fill ? '#f9fafb' : '#ffffff';
        $html .= '<tr bgcolor="' . $bg . '"><td width="30%"><b>' . ucfirst($key) . '</b></td><td width="70%">' . $val . '</td></tr>';
        $fill = !$fill;
    }
    $html .= '</table>';

    $pdf->writeHTML($html, true, false, true, false, '');
}

// Commercial Info
$pdf->Ln(10);
$pdf->SetFillColor(245, 245, 245);
$pdf->Rect(20, $pdf->GetY(), 170, 25, 'F');
$pdf->SetFont('helvetica', '', 9);
$pdf->SetXY(25, $pdf->GetY() + 2);
$pdf->Cell(80, 5, 'Plazo de entrega: ' . ($producto['plazo_entrega'] ?? 'Consultar'), 0, 1);
$pdf->SetX(25);
$pdf->Cell(80, 5, 'Garantía: ' . ($producto['garantia'] ?? '2 años'), 0, 1);
$pdf->SetX(25);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(80, 5, 'PRECIO: ' . ($producto['precio']['base'] ?? 'Consultar') . ' ' . ($producto['precio']['moneda'] ?? 'EUR'), 0, 1);

// Footer
$pdf->SetY(-30);
$pdf->SetFont('helvetica', 'I', 8);
$pdf->SetTextColor(150, 150, 150);
$pdf->Cell(0, 5, 'Solicite su presupuesto en info@multiwheel.es | Telf: 620 531 511', 0, 1, 'C');
$pdf->Cell(0, 5, 'Generado automáticamente por el Catálogo Multiwheel - ' . date('d/m/Y'), 0, 1, 'C');

// Output
$filename = 'Ficha-' . $producto['slug'] . '.pdf';
$pdf->Output($filename, 'D');
